<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\Placement;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class JabatanController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:jabatan-list', ['only' => ['index', 'getData']]);
        $this->middleware('permission:jabatan-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:jabatan-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:jabatan-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dashboard.jabatan.index');
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
        $query = Jabatan::with(['divisionRelasi', 'placementRelasi'])
            ->select([
                'id',
                'nama_jabatan',
                'divisi',
                'penempatan',
                'created_at',
                'updated_at'
            ])
            ->get();

        // Apply date filtering if minDate and maxDate are provided
        if ($minDate) {
            $query = $query->where('created_at', '>=', Carbon::parse($minDate)->startOfDay());
        }
        if ($maxDate) {
            $query = $query->where('created_at', '<=', Carbon::parse($maxDate)->endOfDay());
        }

        // Fetch the filtered data with pagination for DataTables
        return DataTables::of($query)
            ->addColumn('action', function ($data) {
                $editUrl = route('jabatan.edit', $data->id);

                $actionButtons = '
            <div class="inline-flex" role="group">';

                if (auth()->user()->can('jabatan-edit')) {
                    $actionButtons .=
                        '<a href="' . $editUrl . '"class="mx-1 text-md font-medium rounded-lg focus:z-10">
                            &#9999; <span class="hover:underline" style="color: #057A55"> Edit </span>
                        </a>';
                }

                if (auth()->user()->can('jabatan-delete')) {
                    $actionButtons .= '
                        <button
                            class="mx-1 group text-md font-medium rounded-lg focus:z-10 delete-btn"
                            data-id="' . $data->id . '" data-modal-target="deleteModal" data-modal-toggle="deleteModal">
                            &#x26D4; <span class="hover:underline" style="color: #E02424;"> Delete </span>
                        </button>';
                }

                '</div>';

                return $actionButtons;
            })
            ->addIndexColumn() // This is the DT_RowIndex
            ->editColumn('nama_divisi', function ($row) {
                return $row->divisionRelasi->nama_divisi ?? 'N/A';  // Handle null cases
            })
            ->editColumn('nama_penempatan', function ($row) {
                return $row->placementRelasi->penempatan ?? 'N/A';  // Handle null cases
            })
            ->editColumn('created_updated_at', function ($row) {
                return $row->created_at . ' / ' . $row->updated_at;
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $division = Division::all();
        $placement = Placement::all();
        return view('dashboard.jabatan.add', compact('division', 'placement'));
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Jabatan::create([
            'nama_jabatan' => $request->input('nama_jabatan'),
            'divisi' => $request->input('divisi'),
            'penempatan' => $request->input('penempatan')
        ]);

        return redirect()->route('dashboard.jabatan')->with('status', 'Berhasil menambah data Jabatan');;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jabatan $jabatan)
    {
        //
        $division = Division::all();
        $placement = Placement::all();
        return view('dashboard.jabatan.edit', compact('jabatan', 'division', 'placement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jabatan $jabatan)
    {
        //
        $jabatan->update([
            'nama_jabatan' => $request->input('nama_jabatan'),
            'divisi' => $request->input('divisi'),
            'penempatan' => $request->input('penempatan')
        ]);

        return redirect()->route('dashboard.jabatan')->with('status', 'Berhasil mengubah data Jabatan');;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jabatan $jabatan)
    {
        $jabatan->delete();
        return redirect()->route('dashboard.jabatan')->with('status', 'Berhasil menghapus data Jabatan');;
    }
}
