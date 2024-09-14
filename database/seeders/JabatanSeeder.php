<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tb_jabatan')->insert([
            [
                'nama_jabatan' => 'Software Developer',
                'divisi' => 'IT Support',
                'penempatan' => 'Kantor Pusat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_jabatan' => 'Teknisi Hardware',
                'divisi' => 'IT Support',
                'penempatan' => 'Kantor Pusat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_jabatan' => 'Service',
                'divisi' => 'Marketing',
                'penempatan' => 'Kantor Pusat',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'nama_jabatan' => 'Staff Marketing',
                'divisi' => 'Marketing',
                'penempatan' => 'Kantor Pusat',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
