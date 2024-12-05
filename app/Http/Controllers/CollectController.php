<?php

namespace App\Http\Controllers;

use App\Models\Collector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class CollectController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Collector::with('photoCollectRelasi')->where('kode_pegawai', '=', Auth::user()->kode_pegawai)->latest();

            return DataTables::eloquent($query)
                ->addIndexColumn()
                ->editColumn('kode_pegawai', function ($data) {
                    return $data->pegawaiRelasi->full_name . ' [' . $data->kode_pegawai . ']';
                })
                ->addColumn('created_updated_at', function ($data) {
                    return $data->created_at->locale('id')->isoFormat('D MMMM YY HH:mm:ss');
                })
                ->addColumn('title_status', function ($data) {
                    $el =  '<div class="inline-flex">
                            <p>' . $data->short_title . '</p>';

                    if ($data->status === 0) {
                        $el .= '<span class="bg-yellow-100 ms-2 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Pending</span>';
                    } elseif ($data->status === 1) {
                        $el .= '<span class="bg-green-100 ms-2 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Approved</span>';
                    } else {
                        $el .= '<span class="bg-red-100 ms-2 text-red-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">Rejected</span>';
                    }
                    '</div>';
                    return $el;
                })
                ->filter(function ($data) use ($request) {
                    if ($request->filled("title")) {
                        $data->where('title', "LIKE", "%$request->title%");
                    }

                    if ($request->filled("kode_pegawai")) {
                        $data->where('kode_pegawai', "LIKE", "%$request->kode_pegawai%");
                    }

                    if ($request->filled("status")) {
                        $data->where('status', "LIKE", "%$request->status%");
                    }

                    if ($request->filled("startDate")) {
                        $data->whereBetween('created_at', [$request->startDate, $request->endDate]);
                    }
                })
                ->rawColumns(['title_status'])
                ->make(true);
        }

        return view('dashboard.collect.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.collect.add');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Collector::find($id);
        return view('dashboard.collect.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = Collector::find($id);
        return view('dashboard.collect.edit', compact('data'));
    }
}
