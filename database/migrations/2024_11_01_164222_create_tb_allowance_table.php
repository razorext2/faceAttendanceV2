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
        Schema::create('tb_allowance', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pegawai', 32)->nullable();
            $table->string('allowance_name', 32)->nullable();
            $table->string('allowance_type', 12)->nullable();
            $table->bigInteger('allowance_fee')->nullable();
            $table->date('allowance_period')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_allowance');
    }
};
