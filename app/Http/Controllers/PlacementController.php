<?php

namespace App\Http\Controllers;

use App\Models\Placement;
use Illuminate\Http\Request;

class PlacementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $placement = Placement::all();
        return view('dashboard.placement.index', compact('placement'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('dashboard.placement.add');
    }

    /**
     * Store a newly created resource in storage.
     */
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
        ]);

        return redirect()->route('dashboard.placement')->with('status', 'Berhasil menambah data penempatan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Placement $placement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Placement $placement)
    {
        //
        return view('dashboard.placement.edit', compact('placement'));
    }

    /**
     * Update the specified resource in storage.
     */
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
        ]);

        return redirect()->route('dashboard.placement')->with('status', 'Berhasil mengubah data penempatan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Placement $placement)
    {
        //
        $placement->delete();

        return redirect()->route('dashboard.placement')->with('status', 'Berhasil menghapus data penempatan');
    }
}
