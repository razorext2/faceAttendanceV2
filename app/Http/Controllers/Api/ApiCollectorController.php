<?php

namespace App\Http\Controllers\Api;

use App\Models\Collector;
use App\Http\Controllers\Controller;
use App\Http\Resources\CollectResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ApiCollectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query = Collector::with('photoCollectRelasi')->latest()->get();
        return DataTables::of($query)
            ->editColumn('created_updated_at', function ($data) {
                return $data->created_at->locale('id')->isoFormat('D MMM YY H:m:s') . ' / ' . $data->updated_at->locale('id')->isoFormat('D MMM YY H:m:s');
            })
            ->make(true);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Mendefinisikan validator
        $validator = Validator::make($request->all(), [
            'kode_pegawai' => 'required|integer|max_digits:12',
            'title' => 'required|string|max:32',
            'keterangan' => 'required|string|max:512'
        ]);

        // Validasi data
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422); // Mengirim status 422 untuk validasi gagal
        }

        // Menambah data jika validasi berhasil
        $query = Collector::create([
            'kode_pegawai' => $request->kode_pegawai,
            'title' => $request->title,
            'keterangan' => $request->keterangan,
        ]);

        if ($request->isJson()) {
            return new CollectResource(true, 'Data berhasil ditambah!', $query);
        }
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
