<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ChangeStatusMail;
use App\Models\PerizinanPendirian;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class PendirianController extends Controller
{
    use ApiResponses;

    public function getPendirian(Request $request)
    {
        try {
            $query = PerizinanPendirian::query();

            if ($request->has('status_dokumen')) {
                $query->where('status_dokumen', $request->input('status_dokumen'));
            }

            if ($request->has('tipe_dokumen')) {
                $query->where('tipe_dokumen', $request->input('tipe_dokumen'));
            }

            // Filter berdasarkan hari ini
            if ($request->has('today')) {
                $query->whereDate('created_at', now()->toDateString());
            }

            // Filter berdasarkan tanggal
            // var_dump($request->input('date'));
            // die();
            if ($request->has('date')) {
                $query->whereDate('created_at', $request->input('date'));
            }

            // Filter berdasarkan bulan
            if ($request->has('month')) {
                $query->whereMonth('created_at', $request->input('month'));
            }
          
            // Retrieve all data without pagination
            $pendirian = $query->get();

            // Mendapatkan total data tanpa pagination
            $totalData = $pendirian->count();

            if ($totalData == 0) {
                return $this->sendErrorResponse('Data not found.', 404);
            }

            return $this->sendSuccessResponse(
                [$pendirian],
                'Data pendirian retrieved successfully.',
                200,
                [
                    'total_data' => $totalData,
                ]
            );
        } catch (Exception $e) {
            // Tangani kesalahan
            return $this->sendErrorResponse($e->getMessage(), 500);
        }
    }




    public function getPendirianByUser(Request $request)
    {
        try {
            $user = Auth::user();

            if (!$user) {
                return $this->sendErrorResponse('User not found.', 404);
            }

            $limit = $request->input('limit', 10); // Default limit: 10
            $offset = $request->input('offset', 0); // Default offset: 0

            // Mendapatkan data pendirian berdasarkan user_id dengan pagination
            $pendirian = PerizinanPendirian::where('user_id', $user->id)
                ->offset($offset)
                ->limit($limit)
                ->get();

            $totalData = PerizinanPendirian::where('user_id', $user->id)->count();

            if ($pendirian->isEmpty()) {
                return $this->sendErrorResponse('Data Not Found. User not yet create pendirian.', 404);
            }

            return $this->sendSuccessResponse([
                'data' => $pendirian,
            ], 'User pendirian retrieved successfully.', 200, [
                'total_data' => $totalData,
                'total_current_data' => $pendirian->count(),
                'current_page' => ceil(($offset + 1) / $limit),
            ]);
        } catch (Exception $e) {
            // Tangani kesalahan
            return $this->sendErrorResponse($e->getMessage(), 500);
        }
    }

    public function getPendirianById($id)
    {
        try {
            // Validasi parameter id sebagai bilangan bulat positif
            if (!ctype_digit($id) || $id <= 0) {
                return $this->sendValidationErrorResponse(
                    throw new Exception('Invalid id parameter. It should be a positive integer.')
                );
            }

            // Mengambil data pendirian berdasarkan id
            $pendirian = PerizinanPendirian::find($id);

            // Jika data tidak ditemukan
            if (!$pendirian) {
                return $this->sendErrorResponse('Data not found.', 404);
            }

            return $this->sendSuccessResponse([
                'data' => $pendirian,
            ], 'Data pendirian retrieved successfully.', 200);
        } catch (Exception $e) {
            // Tangani kesalahan
            return $this->sendErrorResponse($e->getMessage(), 500);
        }
    }

    public function create(Request $request)
    {
        try {
            // Validasi input data
            $request->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'telepon' => 'required|string',
                'tipe_dokumen' => 'required|string',
                'status_dokumen' => 'string',
                'longtitude' => 'required|string',
                'latitude' => 'required|string',
                // Sesuaikan dengan aturan validasi untuk kolom lainnya
                'lokasi' => 'required|string',
                'surat_permohonan' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'ktp' => ['max:300', 'mimes:pdf,jpg,jpeg,png'],
                //Maks = 300Kb
                'suket_domisili' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'pengurus' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'suket_mendirikan' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'suket_tanah' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'suket_pbh' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'suket_perubahanPBH' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'suket_rip' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'suket_psp' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'sukas_perizinan' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'sk_izinOperasional' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'sertif_bpjs_sehat' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'sertif_bpjs_kerja' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'denah' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'gedung' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'akta_pendirian' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'surper_kades' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'surper_camat' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'surat_tanah' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'patuh_aturan' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'daftar_siswa' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'daftar_TKK' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'daftar_TKnK' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'kurikulum' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'sarpras' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'sk_yayasan' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'studi_layak' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
            ]);

            // Membuat data pendirian baru
            $pendirian = new PerizinanPendirian([
                'nama' => $request->input('nama'),
                'email' => $request->input('email'),
                'telepon' => $request->input('telepon'),
                'tipe_dokumen' => $request->input('tipe_dokumen'),
                'status_dokumen' => "Checking Berkas Operator",
                'longtitude' => $request->input('longtitude'),
                'latitude' => $request->input('latitude'),
                'lokasi' => $request->input('lokasi')
            ]);

            $pendirian->user()->associate(Auth::user());

            // Simpan data pendirian
            $pendirian->save();

            // Penyimpanan file (contoh untuk surat_permohonan)
            if ($request->file()) {
                $this->handleFileUpload($request, $pendirian, 'surat_permohonan');
                $this->handleFileUpload($request, $pendirian, 'ktp');
                $this->handleFileUpload($request, $pendirian, 'suket_domisili');
                $this->handleFileUpload($request, $pendirian, 'pengurus');
                $this->handleFileUpload($request, $pendirian, 'suket_mendirikan');
                $this->handleFileUpload($request, $pendirian, 'suket_tanah');
                $this->handleFileUpload($request, $pendirian, 'suket_pbh');
                $this->handleFileUpload($request, $pendirian, 'suket_perubahanPBH');
                $this->handleFileUpload($request, $pendirian, 'suket_rip');
                $this->handleFileUpload($request, $pendirian, 'suket_psp');
                $this->handleFileUpload($request, $pendirian, 'sukas_perizinan');
                $this->handleFileUpload($request, $pendirian, 'sk_izinOperasional');
                $this->handleFileUpload($request, $pendirian, 'sertif_bpjs_sehat');
                $this->handleFileUpload($request, $pendirian, 'sertif_bpjs_kerja');
            }

            return $this->sendSuccessResponse([
                'data' => $pendirian,
            ], 'Pendirian created successfully.', 201);
        } catch (Exception $e) {
            // Tangani kesalahan
            return $this->sendErrorResponse($e->getMessage(), 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Validasi input data
            $request->validate([
                'nama' => 'string|max:255',
                'email' => 'string|email|max:255',
                'telepon' => 'string',
                'tipe_dokumen' => 'string',
                'status_dokumen' => 'string',
                'longtitude' => 'string',
                'latitude' => 'string',
                // Sesuaikan dengan aturan validasi untuk kolom lainnya
                'surat_permohonan' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'ktp' => ['max:300', 'mimes:pdf,jpg,jpeg,png'],
                //Maks = 300Kb
                'suket_domisili' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'pengurus' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'suket_mendirikan' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'suket_tanah' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'suket_pbh' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'suket_perubahanPBH' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'suket_rip' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'suket_psp' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'sukas_perizinan' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'sk_izinOperasional' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'sertif_bpjs_sehat' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'sertif_bpjs_kerja' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'denah' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'gedung' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'akta_pendirian' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'surper_kades' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'surper_camat' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'surat_tanah' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'patuh_aturan' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'daftar_siswa' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'daftar_TKK' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'daftar_TKnK' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'kurikulum' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'sarpras' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'sk_yayasan' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'studi_layak' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
            ]);

            // Mengambil data pendirian berdasarkan ID
            $pendirian = PerizinanPendirian::findOrFail($id);

            if (count($request->all()) < 1) {
                return $this->sendErrorResponse("Data Kosong. Tidak ada yang di update", 400);
            }

            // Mengupdate field sesuai dengan data yang diberikan
            $pendirian->fill($request->only([
                'nama',
                'email',
                'telepon',
                'tipe_dokumen',
                'status_dokumen',
                'longtitude',
                'latitude'
            ]));



            $fields = [
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
                'denah',
                'gedung',
                'akta_pendirian',
                'surper_kades',
                'surper_camat',
                'surat_tanah',
                'patuh_aturan',
                'daftar_siswa',
                'daftar_TKK',
                'daftar_TKnK',
                'kurikulum',
                'sarpras',
                'sk_yayasan',
                'studi_layak',
            ];

            foreach ($fields as $column) {
                $this->deleteFileIfExists($pendirian->$column, $column);
            }

            // Penyimpanan file (contoh untuk surat_permohonan)
            foreach ($fields as $field) {
                $this->handleFileUpload($request, $pendirian, $field);
            }

            // Simpan perubahan data pendirian
            $pendirian->save();

            $targetStatuses = ['Dokumen Tidak Valid', 'Dokumen Tidak Sesuai', 'Permohonan Ditolak'];
            if (in_array($pendirian->status_dokumen, $targetStatuses)) {
                Mail::to($pendirian->email)->send(new ChangeStatusMail($pendirian));
            }

            return $this->sendSuccessResponse([
                'data' => $pendirian,
            ], 'Pendirian updated successfully.', 200);
        } catch (Exception $e) {
            // Tangani kesalahan
            return $this->sendErrorResponse($e->getMessage(), 500);
        }
    }

    public function delete($id)
    {
        try {
            // Validasi parameter id sebagai bilangan bulat positif
            if (!ctype_digit($id) || $id <= 0) {
                return $this->sendValidationErrorResponse(
                    throw new Exception('Invalid id parameter. It should be a positive integer.', 1)
                );
            }

            // Mengambil data pendirian berdasarkan id
            $pendirian = PerizinanPendirian::find($id);

            // Jika data tidak ditemukan
            if (!$pendirian) {
                return $this->sendErrorResponse('Data not found.', 404);
            }

            // Hapus file terkait jika ada

            // Mendefinisikan kolom-kolom yang menyimpan file
            $fileColumns = ['surat_permohonan', 'ktp', 'suket_domisili', 'pengurus', 'suket_mendirikan', 'suket_tanah', 'suket_pbh', 'suket_perubahanPBH', 'suket_rip', 'suket_psp', 'sukas_perizinan', 'sk_izinOperasional', 'sertif_bpjs_sehat', 'sertif_bpjs_kerja', 'denah', 'gedung', 'akta_pendirian', 'surper_kades', 'surper_camat', 'surat_tanah', 'patuh_aturan', 'daftar_siswa', 'daftar_TKK', 'daftar_TKnK', 'kurikulum', 'sarpras', 'sk_yayasan', 'studi_layak'];

            // Hapus file terkait untuk setiap kolom
            foreach ($fileColumns as $column) {
                $this->deleteFileIfExists($pendirian->$column, $column);
            }

            // Hapus data pendirian dari database
            $pendirian->delete();

            return $this->sendSuccessResponse([], 'Pendirian deleted successfully.', 200);
        } catch (Exception $e) {
            // Tangani kesalahan
            return $this->sendErrorResponse($e->getMessage(), 500);
        }
    }

    private function deleteFileIfExists($fileName, $columnName)
    {
        if ($fileName && Storage::exists('public/perizinanPendirian/' . $columnName . '/' . $fileName)) {
            Storage::delete('public/perizinanPendirian/' . $columnName . '/' . $fileName);
        }
    }




    private function handleFileUpload(Request $request, PerizinanPendirian $pendirian, $columnName)
    {
        if ($request->hasFile($columnName)) {
            $file = $request->file($columnName);
            $extension = $file->getClientOriginalExtension();
            $fileName = date('YmdHis') . '.' . $pendirian->nama . '.' . $extension;
            $file->storeAs('public/perizinanPendirian/' . $columnName, $fileName);
            $pendirian->$columnName = $fileName;
            $pendirian->save();
        }
    }
}


