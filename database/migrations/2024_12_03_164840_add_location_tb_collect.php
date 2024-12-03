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
        Schema::table('tb_collect', function (Blueprint $table) {
            $table->string('location', 64)->nullable()->after('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tb_collect', function (Blueprint $table) {
            $table->dropColumn('location'); // Menghapus kolom location jika rollback
        });
    }
};
