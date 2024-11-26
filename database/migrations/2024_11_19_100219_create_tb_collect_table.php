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
        Schema::create('tb_collect', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pegawai', 32)->nullable();
            $table->string('title', 128)->nullable();
            $table->text('keterangan')->nullable();
            $table->string('longitude', 32);
            $table->string('latitude', 32);
            $table->boolean('status')->default(0);
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_collect');
    }
};
