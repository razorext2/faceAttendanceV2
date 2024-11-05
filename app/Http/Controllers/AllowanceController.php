<?php

namespace App\Http\Controllers;

use App\Models\Allowance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AllowanceController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        Allowance::create([
            'kode_pegawai' => $request->input('kode_pegawai'),
            'allowance_name' => $request->input('allowance_name'),
            'allowance_type' => $request->input('allowance_fee'),
            'allowance_fee' => $request->input('allowance_fee'),
            'allowance_period' => $request->input('allowance_period')
        ]);

        return redirect()->route('pegawai.payrollinfo', ['pegawai' => Crypt::encrypt($request->input('id'))])
            ->with('status', 'Berhasil menambah dana allowance.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
