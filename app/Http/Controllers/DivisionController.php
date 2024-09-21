<?php

namespace App\Http\Controllers;

use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $division = Division::all();

        return view('dashboard.division.index', compact('division'));
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
    public function destroy(Division $division)
    {
        //
        $division->delete();

        return redirect()->route('dashboard.division')->with('status', 'Berhasil menghapus data divisi.');
    }
}
