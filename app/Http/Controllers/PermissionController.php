<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Carbon\Carbon;
use yajra\DataTables\DataTables;

class PermissionController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:permissions-list', ['only' => ['index', 'getData']]);
        $this->middleware('permission:permissions-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:permissions-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:permissions-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return view('dashboard.user-manage.permissions.index');
    }

    public function getData(Request $request)
    {
        // Function to clean the date string
        function cleanDate($dateString)
        {
            // Use regex to remove timezone name in parentheses, leaving the GMT offset intact
            return preg_replace('/\s\(.+\)$/', '', $dateString);
        }

        // Parse the minDate and maxDate from the request after cleaning
        $minDate = cleanDate($request->input('minDate'));
        $maxDate = cleanDate($request->input('maxDate'));

        // Start building the query
        $query = Permission::get();

        // Apply date filtering if minDate and maxDate are provided
        if ($minDate) {
            $query->where('updated_at', '>=', Carbon::parse($minDate)->startOfDay());
        }
        if ($maxDate) {
            $query->where('updated_at', '<=', Carbon::parse($maxDate)->endOfDay());
        }

        // Fetch the filtered data with pagination for DataTables
        return DataTables::of($query)
            ->addColumn('action', function ($data) {
                $editUrl = route('permissions.edit', $data->id);

                // Inisialisasi variabel untuk tombol aksi
                $actionButtons = '
                <div class="inline-flex rounded-md shadow-sm" role="group">';

                // Cek izin edit
                if (auth()->user()->can('permissions-edit')) {
                    $actionButtons .= '
                        <a href="' . $editUrl . '"
                            class="px-4 py-2 mx-1 text-sm font-medium text-gray-900 bg-transparent border border-green-800 rounded-lg hover:bg-green-600 hover:text-white focus:z-10 focus:ring-green-500 focus:bg-green-600 focus:text-white dark:bg-green-800 dark:hover:bg-green-900 dark:text-white">
                            Edit
                        </a>';
                }

                if (auth()->user()->can('permissions-delete')) {
                    // Tambahkan tombol delete
                    $actionButtons .= '
                        <button
                            class="px-4 py-2 mx-1 text-sm font-medium text-gray-900 bg-transparent border border-red-800 rounded-lg hover:bg-red-600 hover:text-white focus:z-10 focus:ring-red-500 focus:bg-red-600 focus:text-white dark:bg-red-800 dark:hover:bg-red-900 dark:text-white delete-btn"
                            data-id="' . $data->id . '" data-modal-target="deleteModal" data-modal-toggle="deleteModal">
                            Delete
                        </button>';
                }

                '</div>';

                return $actionButtons;
            })
            ->editColumn('created_updated_at', function ($data) {
                return $data->created_at . ' / ' . $data->updated_at;
            })
            // ->addColumn('permissions', function ($data) {
            //     //
            //     $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
            //         ->where("role_has_permissions.role_id", $data->id)
            //         ->get();

            //     $result = '';

            //     if (!empty($rolePermissions)) {
            //         foreach ($rolePermissions as $v) {
            //             $result .= '<div><span class="bg-green-100 text-green-800 text-xs font-  me-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">' . $v->name . '</span></div>';
            //         }
            //     }
            //     return '<div class="grid w-full gap-2 lg:grid-cols-3">' . $result . '</div>';
            // })
            ->addIndexColumn() // This is the DT_RowIndex
            ->rawColumns(['action', 'created_updated_at'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user-manage.permissions.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|array',        // Harus berupa array
            'name.*' => 'required|string|max:255',  // Setiap elemen array harus string
        ]);

        foreach ($request->name as $permissionName) {
            Permission::create(['name' => $permissionName]);
        }

        return redirect()->route('dashboard.permissions')->with('status', 'Berhasil menambah data role');;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $permission = Permission::find($id);
        return view('dashboard.user-manage.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $permission = Permission::find($id);
        $permission->name = $request->input('name');
        $permission->save();

        return redirect()->route('dashboard.permissions')
            ->with('status', 'Berhasil mengubah data permission');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("permissions")->where('id', $id)->delete();
        return redirect()->route('dashboard.permissions')
            ->with('status', 'Berhasil menghapus data permission');
    }
}
