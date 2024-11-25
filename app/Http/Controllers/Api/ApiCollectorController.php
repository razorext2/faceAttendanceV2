<?php

namespace App\Http\Controllers\Api;

use App\Models\Collector;
use App\Models\PhotoCollect;
use App\Http\Controllers\Controller;
use App\Http\Resources\CollectResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Mendefinisikan validator
        $validator = Validator::make($request->all(), [
            'kode_pegawai' => 'required|integer|max_digits:12',
            'title' => 'required|string|max:128|min:10',
            'keterangan' => 'required|string|min:50',
            'longitude' => 'required|string|max:16',
            'latitude' => 'required|string|max:16',
            'images' => 'required|array', // Menambahkan validasi untuk array gambar
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi tiap gambar
        ]);

        // Validasi data
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422); // Mengirim status 422 untuk validasi gagal
        }

        // Menambah data ke tabel Collector jika validasi berhasil
        $data = $validator->validated();
        $collector = Collector::create($data);

        // Memastikan folder 'public/collector' ada, buat jika belum ada
        $folderPath = "public/collectors"; // Change path to storage/app/public

        if (!Storage::exists($folderPath)) {
            Storage::makeDirectory($folderPath);
            chmod(storage_path("app/{$folderPath}"), 0755);
        }

        // Menyimpan gambar dan menambahkan ke tabel tb_photo_collect
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Membuat nama gambar random
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();

                // Menyimpan gambar ke folder 'public/collector'
                $imagePath = $folderPath . "/" . $imageName;
                Storage::put($imagePath, file_get_contents($image));

                // Mendapatkan URL gambar
                $imageUrl = Storage::url('public/collectors/' . $imageName);

                // Menyimpan informasi gambar ke tabel tb_photo_collect
                PhotoCollect::create([
                    'id_collect' => $collector->id,
                    'photourl' => $imageUrl,
                ]);
            }
        }

        // Jika request JSON, kembalikan response JSON
        if ($request->isJson()) {
            return new CollectResource(true, 'Data berhasil ditambah!', $collector);
        }

        // Response default jika bukan request JSON
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil ditambah!',
            'data' => $collector
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // cari data berdasarkan id
        $query = Collector::with('photoCollectRelasi', 'pegawaiRelasi')->find($id);

        return new CollectResource(true, 'Detail data', $query);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // define validation rules
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:128|min:10',
            'keterangan' => 'required|string|min:50',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $query = Collector::find($id);
        $query->update([
            'title' => $request->title,
            'keterangan' => $request->keterangan,
        ]);

        // Jika request JSON, kembalikan response JSON
        if ($request->isJson()) {
            return new CollectResource(true, 'Data berhasil ditambah!', $query);
        }

        // Response default jika bukan request JSON
        return response()->json([
            'success' => true,
            'message' => 'Data berhasil ditambah!',
            'data' => $query
        ]);
    }

    public function confirmCollect($id)
    {
        $query = Collector::find($id);
        $query->update([
            'status' => 1,
        ]);
    }

    public function denyCollect(Request $request, $id)
    {
    $query = Collector::find($id);
        $query->update([
            'status' => 2,
            'notes' => $request->notes,
        ]);
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
