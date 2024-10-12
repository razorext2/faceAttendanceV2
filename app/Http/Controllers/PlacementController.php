<?php

namespace App\Http\Controllers;

use App\Models\Placement;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Carbon\Carbon;

class PlacementController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:placement-list', ['only' => ['index', 'getData']]);
        $this->middleware('permission:placement-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:placement-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:placement-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        return view('dashboard.placement.index');
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
        $query = Placement::get();

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
                $editUrl = route('placement.edit', $data->id);

                // Inisialisasi variabel untuk tombol aksi
                $actionButtons = '
                <div class="inline-flex" role="group">';

                    // Cek izin edit
                    if (auth()->user()->can('placement-edit')) {
                        $actionButtons .= '
                        <a href="' . $editUrl . '"
                            class="px-4 py-2 mx-1 text-sm font-medium text-gray-900 bg-transparent border border-green-800 rounded-lg hover:bg-green-600 hover:text-white focus:z-10 focus:ring-green-500 focus:bg-green-600 focus:text-white dark:bg-green-800 dark:hover:bg-green-900 dark:text-white">
                            Edit
                        </a>';
                    }

                    if(auth()->user()->can('placement-delete')) {
                        // Tambahkan tombol delete
                        $actionButtons .= '
                        <button
                            class="px-4 py-2 mx-1 text-sm font-medium text-gray-900 bg-transparent border border-red-800 rounded-lg hover:bg-red-600 hover:text-white focus:z-10 focus:ring-red-500 focus:bg-red-600 focus:text-white dark:bg-red-800 dark:hover:bg-red-900 dark:text-white"
                            data-id="' . $data->id . '" data-modal-target="deleteModal" data-modal-toggle="deleteModal">
                            Delete
                        </button>';
                    }
                    
                '</div>';
                
                return $actionButtons;
            })
            ->addIndexColumn() // This is the DT_RowIndex
            ->editColumn('restrict_app', function ($data) {
                if ($data->restrict_app == 'y')
                    return 'Aplikasi dibatasi';
                elseif ($data->restrict_app == 't')
                    return 'Aplikasi tidak dibatasi';
                else
                    return 'N/A';
            })
            ->editColumn('longitude_latitude', function ($data) {
                return '<p>Longitude: ' . $data->longitude . '</p><p>Latitude: ' . $data->latitude . '</p>';
            })
            ->editColumn('created_updated_at', function ($data) {
                return $data->created_at . ' / ' . $data->updated_at;
            })
            ->editColumn('radius', function ($data) {
                return $data->radius . ' M';
            })
            ->rawColumns(['action', 'longitude_latitude'])
            ->make(true);
    }

    public function create()
    {
        return view('dashboard.placement.add');
    }

    public function store(Request $request)
    {
        //
        Placement::create([
            'kode_penempatan' => $request->input('kode_penempatan'),
            'penempatan' => $request->input('penempatan'),
            'alamat' => $request->input('alamat'),
            'longitude' => $request->input('longitude'),
            'latitude' => $request->input('latitude'),
            'radius' => $request->input('radius'),
            'restrict_app' => $request->input('restrict_app'),
        ]);

        return redirect()->route('dashboard.placement')->with('status', 'Berhasil menambah data penempatan.');
    }

    public function edit(Placement $placement)
    {
        //
        return view('dashboard.placement.edit', compact('placement'));
    }

    public function update(Request $request, Placement $placement)
    {
        //
        $placement->update([
            'kode_penempatan' => $request->input('kode_penempatan'),
            'penempatan' => $request->input('penempatan'),
            'alamat' => $request->input('alamat'),
            'longitude' => $request->input('longitude'),
            'latitude' => $request->input('latitude'),
            'radius' => $request->input('radius'),
            'restrict_app' => $request->input('restrict_app'),
        ]);

        return redirect()->route('dashboard.placement')->with('status', 'Berhasil mengubah data penempatan');
    }

    public function destroy(Placement $placement)
    {
        //
        $placement->delete();

        return redirect()->route('dashboard.placement')->with('status', 'Berhasil menghapus data penempatan');
    }
}
