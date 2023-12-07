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
        Schema::table('perizinan_pendirian', function (Blueprint $table) {
            $table->string('luas_lahan')->nullable();
            $table->string('luas_bangunan')->nullable();
            $table->string('jumlah_sekolah')->nullable();
            $table->string('geotag')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('perizinan_pendirian', function (Blueprint $table) {
            $table->dropColumn('luas_lahan');
            $table->dropColumn('luas_bangunan');
            $table->dropColumn('jumlah_sekolah');
            $table->dropColumn('geotag');
        });
    }
};
