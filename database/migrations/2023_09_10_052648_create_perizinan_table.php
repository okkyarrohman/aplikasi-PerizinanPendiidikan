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
        Schema::create('perizinan', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('alamat_praktek');
            $table->bigInteger('telepon');
            $table->integer('nomor_berkas')->nullable();
            $table->string('surat_permohonan')->nullable();
            $table->string('pas_foto')->nullable();
            $table->string('ktp')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('surat_tanda_regist')->nullable();
            $table->string('surat_persetujuan_kerja')->nullable();
            $table->string('surat_pernyataan_praktik')->nullable();
            $table->string('surat_sehat')->nullable();
            $table->string('surat_rekomendasi_profesi')->nullable();
            $table->string('surat_keterangan_praktek')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perizinan');
    }
};
