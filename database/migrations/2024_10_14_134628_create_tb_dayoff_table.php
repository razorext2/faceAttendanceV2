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
        Schema::create('tb_dayoff', function (Blueprint $table) {
            $table->id();
            $table->string('id_user', 32);
            $table->string('dayoff_for', 32);
            $table->string('url', 128);
            $table->string('tgl_dari', 32);
            $table->string('tgl_hingga', 32);
            $table->string('keterangan');
            $table->string('status', 16);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_dayoff');
    }
};
