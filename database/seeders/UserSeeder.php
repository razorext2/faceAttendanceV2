<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            [
                'name' => 'Muhammad Abdi Mayu',
                'email' => 'abdi@darkotech.id',
                'email_verified_at' => NULL,
                'password' => '$2y$12$Dj.8m0Fp7nUdAkkWUgi5iOqC7GdhV594MjUHvSiQsjTr7XWKjKCW6',
                'remember_token' => NULL,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
