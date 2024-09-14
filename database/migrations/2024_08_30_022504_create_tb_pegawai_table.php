<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pegawai', 16);
            $table->string('full_name', 64);
            $table->string('nick_name', 20)->nullable();
            $table->string('no_telp', 13);
            $table->string('alamat', 64);
            $table->integer('jabatan');
            $table->date('tgl_lahir');
            $table->string('storage', 32)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pegawai');
    }
};
