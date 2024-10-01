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
        Schema::create('tbllog', function (Blueprint $table) {
            $table->increments('urutan');
            $table->string('nik', 255)->nullable();
            $table->string('kodejari', 255)->nullable();
            $table->datetime('waktu')->nullable();
            $table->string('lokasifoto', 255)->nullable();
            $table->smallInteger('upl')->nullable();
            $table->smallInteger('upl68')->nullable();
            $table->smallInteger('uplm68')->nullable();
            $table->smallInteger('upljam')->nullable();
            $table->string('jenis', 255)->nullable();
            $table->datetime('waktuori')->nullable();
            $table->string('KodeBarcode', 255)->nullable();
            $table->string('status', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbllog');
    }
};
