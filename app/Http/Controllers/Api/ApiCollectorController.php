<?php

namespace App\Http\Controllers\Api;

use App\Models\Collector;
use App\Http\Controllers\Controller;
use App\Http\Resources\CollectResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApiCollectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Collector::latest()->paginate(10);
        return new CollectResource(true, 'List Data Collect', $query);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // define validator
        $validator = Validator::make($request->all(), [
            'kode_pegawai' => 'required|integer|max_digits:12',
            'title' => 'required|string|max:32',
            'keterangan' => 'required|string|max:512'
        ]);

        // validasi data
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // tambah data jika validasi pass
        $query = Collector::create([
            'kode_pegawai' => $request->kode_pegawai,
            'title' => $request->title,
            'keterangan' => $request->keterangan,
        ]);

        return new CollectResource(true, 'Data berhasil ditambah!', $query);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // cari data berdasarkan id
        $query = Collector::find($id);

        return new CollectResource(true, 'Detail data', $query);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // define validation rules
        $validator = Validator::make($request->all(), [
            'kode_pegawai' => 'required|integer|max_digits:12',
            'title' => 'required|string|max:32',
            'keterangan' => 'required|string|max:512'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $query = Collector::find($id);
        $query->update([
            'kode_pegawai' => $request->kode_pegawai,
            'title' => $request->title,
            'keterangan' => $request->keterangan,
        ]);

        return new CollectResource(true, 'Data berhasil diubah', $query);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $query = Collector::find($id);
        $query->delete();

        return new CollectResource(true, 'Data berhasil dihapus', null);
    }
}
