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
                return '
                <div class="inline-flex rounded-md shadow-sm" role="group">
                    <a href="' . $editUrl . '"
                        class="px-4 py-2 text-sm font-medium text-white bg-green-500 rounded-s-lg hover:bg-green-600 hover:text-white focus:z-10 focus:ring-green-500 focus:bg-green-600 focus:text-white dark:bg-green-800 dark:hover:bg-green-900 dark:text-white dark:border-gray-500">
                        Edit
                    </a>
                    <button
                        class="px-4 py-2 text-sm font-medium text-white bg-red-500 delete-btn rounded-e-lg hover:bg-red-900 hover:text-white focus:ring-red-500 focus:bg-red-900 focus:text-white dark:bg-red-800 dark:hover:bg-red-900 dark:text-white dark:border-gray-500"
                        data-id="' . $data->id . '" data-modal-target="deleteModal"
                        data-modal-toggle="deleteModal">
                        Delete
                    </button>
                </div>';
            })
            ->editColumn('created_updated_at', function ($data) {
                return $data->created_at . ' / ' . $data->updated_at;
            })
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
