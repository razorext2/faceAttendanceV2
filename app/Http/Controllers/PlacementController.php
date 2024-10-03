<?php

namespace App\Http\Controllers;

use App\Models\Placement;
use Illuminate\Http\Request;

class PlacementController extends Controller
{

    public function index()
    {
        $placement = Placement::all();
        return view('dashboard.placement.index', compact('placement'));
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
