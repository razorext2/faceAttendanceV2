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

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    function __construct()
    {
        $this->middleware('permission:roles-list|roles-create|roles-edit|roles-delete', ['only' => ['index', 'store', 'getData']]);
        $this->middleware('permission:roles-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:roles-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:roles-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return view('dashboard.user-manage.roles.index');
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
        $query = Role::get();

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
                $editUrl = route('roles.edit', $data->id);
                return '
            <div class="inline-flex rounded-md shadow-sm" role="group">
                <a href="' . $editUrl . '"
                    class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border-t border-b border-l border-green-800 rounded-s-lg hover:bg-green-600 hover:text-white focus:z-10 focus:ring-green-500 focus:bg-green-600 focus:text-white dark:bg-green-800 dark:hover:bg-green-900 dark:text-white dark:border-gray-500">
                    Edit
                </a>
                <button
                    class="px-4 py-2 text-sm font-medium text-gray-900 bg-transparent border border-red-800 delete-btn rounded-e-lg hover:bg-red-900 hover:text-white focus:ring-red-500 focus:bg-red-900 focus:text-white dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:border-gray-500"
                    data-id="' . $data->id . '" data-modal-target="deleteModal"
                    data-modal-toggle="deleteModal">
                    Delete
                </button>
            </div>';
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
            ->rawColumns(['action', 'permissions', 'created_updated_at'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $permission = Permission::get();
        return view('dashboard.user-manage.roles.add', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:roles,name',
            'permission' => 'required',
        ]);

        $permissionsID = array_map(
            function ($value) {
                return (int)$value;
            },
            $request->input('permission')
        );

        $role = Role::create(['name' => $request->input('name')]);
        $role->syncPermissions($permissionsID);

        return redirect()->route('dashboard.roles')->with('status', 'Berhasil menambah data role');;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
            ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
            ->all();

        return view('dashboard.user-manage.roles.edit', compact('role', 'permission', 'rolePermissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'permission' => 'required',
        ]);

        $role = Role::find($id);
        $role->name = $request->input('name');
        $role->save();

        $permissionsID = array_map(
            function ($value) {
                return (int)$value;
            },
            $request->input('permission')
        );

        $role->syncPermissions($permissionsID);

        return redirect()->route('dashboard.roles')
            ->with('status', 'Berhasil mengubah data role');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table("roles")->where('id', $id)->delete();
        return redirect()->route('dashboard.roles')
            ->with('status', 'Berhasil menghapus data role');
    }
}
