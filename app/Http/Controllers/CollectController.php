<?php

namespace App\Http\Controllers;

use App\Models\Collector;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;

class CollectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.collect.index');
    }

    public function getData()
    {
        $query = Collector::with('photoCollectRelasi')->where('kode_pegawai', '=', Auth::user()->kode_pegawai)->latest()->get();

        return DataTables::of($query)
            ->editColumn('created_at', function ($data) {
                return $data->created_at->locale('id')->isoFormat('D MMMM YY HH:mm:ss');
            })
            ->editColumn('title_status', function ($data) {
                $el =  '<div class="inline-flex">
                            <p>' . $data->short_title . '</p>';

                if ($data->status === 0) {
                    $el .= '<span class="bg-yellow-100 ms-2 text-yellow-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-yellow-900 dark:text-yellow-300">Pending</span>';
                } else {
                    $el .= '<span class="bg-green-100 ms-2 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Approve</span>';
                }

                '</div>';
                return $el;
            })
            ->addIndexColumn() // This is the DT_RowIndex
            ->rawColumns(['title_status'])
            ->make(true);
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Collector $collect)
    {
        //
    }
}
