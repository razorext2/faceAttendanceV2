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
        Schema::create('tb_attendance', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pegawai', 12);
            $table->tinyInteger('upl')->nullable();
            $table->tinyInteger('upl68')->nullable();
            $table->tinyInteger('uplm68')->nullable();
            $table->tinyInteger('upljam')->nullable();
            $table->string('jenis', 128)->nullable();
            $table->datetime('waktuori')->nullable();
            $table->tinyInteger('status')->nullable();
            $table->dateTime('jam_masuk');
            $table->string('photoURL', 64)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_attendance');
    }
};
