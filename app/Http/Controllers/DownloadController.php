<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerizinanPendirian;
use App\Models\PerizinanPenyelenggaraan;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    // Pendirian
    public function download_suratPemohon($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/surat_permohonan/{$permohonans->surat_permohonan}");
        return response()->download($path);
    }

    public function download_ktp($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/ktp/{$permohonans->ktp}");
        return response()->download($path);
    }

    public function download_suket_domisili($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/suket_domisili/{$permohonans->suket_domisili}");
        return response()->download($path);
    }

    public function download_pengurus($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/pengurus/{$permohonans->pengurus}");
        return response()->download($path);
    }

    public function download_suket_mendirikan($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/suket_mendirikan/{$permohonans->suket_mendirikan}");
        return response()->download($path);
    }

    public function download_suket_tanah($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/suket_tanah/{$permohonans->suket_tanah}");
        return response()->download($path);
    }

    public function download_suket_pbh($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/suket_pbh/{$permohonans->suket_pbh}");
        return response()->download($path);
    }

    public function download_suket_perubahanPBH($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/suket_perubahanPBH/{$permohonans->suket_perubahanPBH}");
        return response()->download($path);
    }

     public function download_suket_rip($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/suket_rip/{$permohonans->suket_rip}");
        return response()->download($path);
    }

     public function download_suket_psp($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/suket_psp/{$permohonans->suket_psp}");
        return response()->download($path);
    }

     public function download_sukas_perizinan($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/sukas_perizinan/{$permohonans->sukas_perizinan}");
        return response()->download($path);
    }

     public function download_sk_izinOperasional($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/sk_izinOperasional/{$permohonans->sk_izinOperasional}");
        return response()->download($path);
    }

     public function download_sertif_bpjs_sehat($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/sertif_bpjs_sehat/{$permohonans->sertif_bpjs_sehat}");
        return response()->download($path);
    }

     public function download_sertif_bpjs_kerja($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/sertif_bpjs_kerja/{$permohonans->sertif_bpjs_kerja}");
        return response()->download($path);
    }

     public function download_denah($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/denah/{$permohonans->denah}");
        return response()->download($path);
    }

     public function download_gedung($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/gedung/{$permohonans->gedung}");
        return response()->download($path);
    }

     public function download_akta_pendirian($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/akta_pendirian/{$permohonans->akta_pendirian}");
        return response()->download($path);
    }

     public function download_surper_kades($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/surper_kades/{$permohonans->surper_kades}");
        return response()->download($path);
    }

     public function download_surper_camat($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/surper_camat/{$permohonans->surper_camat}");
        return response()->download($path);
    }

     public function download_surat_tanah($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/surat_tanah/{$permohonans->surat_tanah}");
        return response()->download($path);
    }

     public function download_patuh_aturan($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/patuh_aturan/{$permohonans->patuh_aturan}");
        return response()->download($path);
    }

     public function download_daftar_siswa($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/daftar_siswa/{$permohonans->daftar_siswa}");
        return response()->download($path);
    }

     public function download_daftar_TKK($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/daftar_TKK/{$permohonans->daftar_TKK}");
        return response()->download($path);
    }
     public function download_daftar_TKnK($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/daftar_TKnK/{$permohonans->daftar_TKnK}");
        return response()->download($path);
    }

     public function download_kurikulum($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/kurikulum/{$permohonans->kurikulum}");
        return response()->download($path);
    }

     public function download_sarpras($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/sarpras/{$permohonans->sarpras}");
        return response()->download($path);
    }

     public function download_sk_yayasan($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/sk_yayasan/{$permohonans->sk_yayasan}");
        return response()->download($path);
    }
     public function download_studi_layak($id){
        $permohonans = PerizinanPendirian::where('id',$id)->first();
        $path = public_path("storage/perizinanPendirian/studi_layak/{$permohonans->studi_layak}");
        return response()->download($path);
    }
    // End Pendirian


    // Penyelenggaraan
     public function download_doc_pendirian($id){
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();
        $path = public_path("storage/perizinanPenyelenggaraan/doc_pendirian/{$permohonans->doc_pendirian}");
        return response()->download($path);
    }

    public function download_identitas_pemilik($id){
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();
        $path = public_path("storage/perizinanPenyelenggaraan/identitas_pemilik/{$permohonans->identitas_pemilik}");
        return response()->download($path);
    }

    public function download_kualifikasi_pengajar($id){
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();
        $path = public_path("storage/perizinanPenyelenggaraan/kualifikasi_pengajar/{$permohonans->kualifikasi_pengajar}");
        return response()->download($path);
    }
    public function download_kurikulumP($id){
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();
        $path = public_path("storage/perizinanPenyelenggaraan/download_kurikulum/{$permohonans->download_kurikulum}");
        return response()->download($path);
    }

    public function download_doc_keuangan($id){
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();
        $path = public_path("storage/perizinanPenyelenggaraan/doc_keuangan/{$permohonans->doc_keuangan}");
        return response()->download($path);
    }

    public function download_surat_otorisasi($id){
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();
        $path = public_path("storage/perizinanPenyelenggaraan/surat_otorisasi/{$permohonans->surat_otorisasi}");
        return response()->download($path);
    }

    public function download_program_akademik($id){
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();
        $path = public_path("storage/perizinanPenyelenggaraan/program_akademik/{$permohonans->program_akademik}");
        return response()->download($path);
    }

    public function download_sarprasP($id){
        $permohonans = PerizinanPenyelenggaraan::where('id',$id)->first();
        $path = public_path("storage/perizinanPenyelenggaraan/sarpras/{$permohonans->sarpras}");
        return response()->download($path);
    }

    // End Penyelenggaraan



}
