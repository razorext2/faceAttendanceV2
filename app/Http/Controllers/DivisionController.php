<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DivisionController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:divisi-list', ['only' => ['index', 'getData']]);
        $this->middleware('permission:divisi-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:divisi-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:divisi-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        //
        $division = Division::all();

        return view('dashboard.division.index', compact('division'));
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
        $query = Division::get();

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
                $editUrl = route('division.edit', $data->id);

                // Inisialisasi variabel untuk tombol aksi
                $actionButtons = '
                <div class="inline-flex" role="group">';

                // Cek izin edit
                if (auth()->user()->can('divisi-edit')) {
                    $actionButtons .= '
                        <a href="' . $editUrl . '"
                            class="px-4 py-2 mx-1 text-sm font-medium text-gray-900 bg-transparent border border-green-800 rounded-lg hover:bg-green-600 hover:text-white focus:z-10 focus:ring-green-500 focus:bg-green-600 focus:text-white dark:bg-green-800 dark:hover:bg-green-900 dark:text-white">
                            Edit
                        </a>';
                }

                if (auth()->user()->can('divisi-delete')) {
                    // Tambahkan tombol delete
                    $actionButtons .=
                        '
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
            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.division.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Division::create([
            'kode_divisi' => $request->input('kode_divisi'),
            'nama_divisi' => $request->input('divisi'),
        ]);

        return redirect()->route('dashboard.division')->with('status', 'Berhasil menambah data divisi.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Division $division)
    {
        //
        return view('dashboard.division.edit', compact('division'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Division $division)
    {
        //
        $division->update([
            'kode_divisi' => $request->input('kode_divisi'),
            'nama_divisi' => $request->input('divisi'),
        ]);

        return redirect()->route('dashboard.division')->with('status', 'Berhasil mengubah data divisi');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $division = Division::findOrFail($id);
        $division->delete();

        return redirect()->back()->with('status', 'Berhasil menghapus data divisi.');
    }
}
