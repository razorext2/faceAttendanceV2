<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $golongan = Golongan::with('jadwalRelasi')->get();
        return view('dashboard.golongan.index', compact('golongan'));
    }

    public function create()
    {
        return view('dashboard.golongan.add');
    }

    public function store(Request $request)
    {
        // Create the new Golongan and retrieve the instance
        $golongan = Golongan::create([
            'nama_golongan' => $request->input('nama_golongan'),
            'alias' => $request->input('alias'),
        ]);

        // Get the id_golongan from the newly created Golongan instance
        $id_golongan = $golongan->id;

        $jadwal = [];
        $days = ['senin', 'selasa', 'rabu', 'kamis', 'jumat', 'sabtu'];

        foreach ($days as $day) {
            $jadwal[$day] = [
                'jam_masuk' => $request->input("jam_masuk_$day"),
                'jam_keluar' => $request->input("jam_keluar_$day"),
            ];
        }

        // Loop through the jadwal and insert each day's schedule
        foreach ($jadwal as $day => $times) {
            Jadwal::create([
                'id_golongan' => $id_golongan,  // Use the retrieved id_golongan here
                'hari' => ucfirst($day),
                'jam_masuk' => $times['jam_masuk'],
                'jam_keluar' => $times['jam_keluar'],
            ]);
        }


        return redirect()->route('dashboard.golongan')->with('status', 'Berhasil menambah data golongan.');
    }

    public function edit($id)
    {
        // Fetch the golongan and its associated jadwal
        $golongan = Golongan::with('jadwalRelasi')->findOrFail($id);

        // Pass the golongan and jadwal to the view
        return view('dashboard.golongan.edit', compact('golongan'));
    }


    public function update(Request $request, Golongan $golongan)
    {
        // Update the golongan
        $golongan->update([
            'nama_golongan' => $request->input('nama_golongan'),
            'alias' => $request->input('alias'),
        ]);

        // Get the id_golongan from the updated Golongan instance
        $id_golongan = $golongan->id;

        // Define the days of the week
        $days = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

        foreach ($days as $day) {
            $jamMasuk = $request->input("jam_masuk_" . strtolower($day));
            $jamKeluar = $request->input("jam_keluar_" . strtolower($day));

            // Create or update the jadwal for each day
            Jadwal::updateOrCreate(
                [
                    'id_golongan' => $id_golongan,
                    'hari' => ucfirst($day),
                ],
                [
                    'jam_masuk' => $jamMasuk,
                    'jam_keluar' => $jamKeluar,
                ]
            );
        }

        return redirect()->route('dashboard.golongan')->with('status', 'Berhasil mengubah data golongan');
    }

    public function destroy(Golongan $golongan)
    {
        $golongan->delete();

        return redirect()->route('dashboard.golongan')->with('status', 'Berhasil menghapus data golongan');
    }
}
