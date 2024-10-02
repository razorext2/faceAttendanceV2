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
        Schema::create('tb_log', function (Blueprint $table) {
            $table->id();
            $table->string('user_id', 32)->nullable();
            $table->string('user_action', '32')->nullable();
            $table->string('ip_address', '32')->nullable();
            $table->string('user_agent', '128')->nullable();
            $table->string('user_location', '128')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_log');
    }
};
