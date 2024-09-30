<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Models\Division;
use App\Models\Placement;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $jabatan = Jabatan::with('divisionRelasi')->get();
        return view('dashboard.jabatan.index', compact('jabatan'));
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
