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
        Schema::create('tb_deduction', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pegawai', 32)->nullable();
            $table->string('deduction_name', 32)->nullable();
            $table->string('deduction_type', 12)->nullable();
            $table->bigInteger('deduction_fee')->nullable();
            $table->string('deduction_period', 32)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_deduction');
    }
};
