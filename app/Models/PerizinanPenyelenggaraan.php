<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerizinanPenyelenggaraan extends Model
{
    use HasFactory;


    protected $table = "perizinan_penyelenggaraan";
    protected $guarded = [];

    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'tipe_dokumen',
        'status_dokumen',
        'longitude',
        'latitude',
        'lokasi',
        'doc_pendirian',
        'identitas_pemilik',
        'identitas_pengajar',
        'kualifikasi_pengajar',
        'kurikulum',
        'doc_keuangan',
        'surat_otorisasi',
        'program_akademik',
        'sarpras'
    ];

}
