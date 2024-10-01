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
        Schema::create('tb_placement', function (Blueprint $table) {
            $table->id();
            $table->string('kode_penempatan', 32)->unique();
            $table->string('penempatan', 128)->nullable();
            $table->string('alamat', 128)->nullable();
            $table->string('longitude', 32)->nullable();
            $table->string('latitude', 32)->nullable();
            $table->integer('radius', 3);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_placement');
    }
};
