<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerizinanPendirian extends Model
{
    use HasFactory;

    protected $table = "perizinan_pendirian";
    protected $guarded = [];
    protected $fillable = [
            'nama',
            'email',
            'contact',
            'tipe_dokument',
            'status_dokumen',
            'longtitude',
            'latitude',
            'lokasi',

            'surat_permohonan',
            'ktp',
            'suket_domisili',
            'pengurus',
            'suket_mendirikan',
            'suket_tanah',
            'suket_pbh',
            'suket_perubahanPBH',
            'suket_rip',
            'suket_psp',
            'sukas_perizinan',
            'sk_izinOperasional',
            'sertif_bpjs_sehat',
            'sertif_bpjs_kerja',

    ];
}