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
        Schema::create('tb_photo_collect', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_collect')->nullable();
            $table->string('photourl', 64)->nullable();
            $table->foreign('id_collect')->references('id')->on('tb_collect')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_photo_collect');
    }
};
