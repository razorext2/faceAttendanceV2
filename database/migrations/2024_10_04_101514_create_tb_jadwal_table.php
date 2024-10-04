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
        Schema::create('tb_jadwal', function (Blueprint $table) {
            $table->id();
            $table->integer('id_golongan')->nullable();
            $table->string('hari', 12)->nullable();
            $table->string('jam_masuk', 6)->nullable();
            $table->string('jam_keluar', 6)->nullable();
            $table->string('break_start', 6)->nullable();
            $table->string('break_end', 6)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_jadwal');
    }
};
