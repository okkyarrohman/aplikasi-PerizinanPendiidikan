<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ChangeStatusMail;
use App\Models\PerizinanPenyelenggaraan;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\ValidationException;

class PenyelenggaraanController extends Controller
{
    use ApiResponses;

    public function getPenyelenggaraan(Request $request)
{
    try {
        $statusDokumen = $request->input('status_dokumen');
        $tipeDokumen = $request->input('tipe_dokumen');

        $query = PerizinanPenyelenggaraan::query();

        if ($statusDokumen) {
            $query->where('status_dokumen', $statusDokumen);
        }

        if ($tipeDokumen) {
            $query->where('tipe_dokumen', $tipeDokumen);
        }

        // Retrieve all data without pagination
        $penyelenggaraan = $query->get();

        $totalData = $query->count();

        if ($totalData == 0) {
            return $this->sendErrorResponse('Data not found.', 404);
        }

        return $this->sendSuccessResponse(
            ['data' => $penyelenggaraan],
            'Data penyelenggaraan retrieved successfully.',
            200,
            [
                'total_data' => $totalData,
            ]
        );
    } catch (Exception $e) {
        return $this->sendErrorResponse($e->getMessage(), 500);
    }
}



    public function getPenyelenggaraanByUser(Request $request)
    {
        try {
            $user = Auth::user();

            if (!$user) {
                return $this->sendErrorResponse('User not found.', 404);
            }

            $limit = $request->input('limit', 10);
            $offset = $request->input('offset', 0);

            $query = PerizinanPenyelenggaraan::where('user_id', $user->id);
            $totalData = $query->count();

            if ($totalData == 0) {
                return $this->sendErrorResponse('Data not found. User has not created penyelenggaraan.', 404);
            }

            $penyelenggaraan = $query->offset($offset)->limit($limit)->get();

            return $this->sendSuccessResponse([
                'data' => $penyelenggaraan,
            ], 'User penyelenggaraan retrieved successfully.', 200, [
                'total_data' => $totalData,
                'total_current_data' => $penyelenggaraan->count(),
                'current_page' => ceil(($offset + 1) / $limit),
            ]);
        } catch (Exception $e) {
            return $this->sendErrorResponse($e->getMessage(), 500);
        }
    }

    public function getPenyelenggaraanById($id)
{
    try {
        if (!ctype_digit($id) || $id <= 0) {
            return $this->sendErrorResponse('Invalid ID parameter. It should be a positive integer.', 400);
        }

        $penyelenggaraan = PerizinanPenyelenggaraan::find($id);

        if (!$penyelenggaraan) {
            return $this->sendErrorResponse('Data not found.', 404);
        }

        return $this->sendSuccessResponse([
            'data' => $penyelenggaraan,
        ], 'Data penyelenggaraan retrieved successfully.', 200);
    } catch (Exception $e) {
        return $this->sendErrorResponse($e->getMessage(), 500);
    }
}


    public function create(Request $request)
    {
        try {
            $request->validate([
                'nama' => 'required|string|max:255',
                'email' => 'required|string|email|max:255',
                'telepon' => 'required|string',
                'tipe_dokumen' => 'required|string',
                'status_dokumen' => 'string',
                'longtitude' => 'required|string',
                'latitude' => 'required|string',

                // Validate File Untuk Pendirian TK
                'doc_pendirian' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'identitas_pemilik' => ['max:300', 'mimes:pdf,jpg,jpeg,png'],
                //Maks = 300Kb
                'identitas_pengajar' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'kualifikasi_pengajar' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'kurikulum' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'doc_keuangan' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'surat_otorisasi' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'program_akademik' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                'sarpras' => ['max:300', 'mimes:pdf'],
                //Maks = 300Kb
                //End Validate File Untuk Pendirian TK

            ]);

            $penyelenggaraan = new PerizinanPenyelenggaraan([
                // Sesuaikan dengan input data yang dibutuhkan
                'nama' => $request->input('nama'),
                'email' => $request->input('email'),
                'telepon' => $request->input('telepon'),
                'tipe_dokumen' => $request->input('tipe_dokumen'),
                'status_dokumen' => "Checking Berkas Operator",
                'longtitude' => $request->input('longtitude'),
                'latitude' => $request->input('latitude'),
                'lokasi' => $request->input('lokasi'),
            ]);

            $penyelenggaraan->user()->associate(Auth::user());
            $penyelenggaraan->save();

            $fields = [
                'doc_pendirian',
                'identitas_pemilik',
                'identitas_pengajar',
                'kualifikasi_pengajar',
                'kurikulum',
                'doc_keuangan',
                'surat_otorisasi',
                'program_akademik',
                'sarpras',
            ];
            
            foreach ($fields as $field) {
                $this->handleFileUpload($request, $penyelenggaraan, $field);
            }
            

            return $this->sendSuccessResponse([
                'data' => $penyelenggaraan,
            ], 'Penyelenggaraan created successfully.', 201);
        } catch (ValidationException $e) {
            return $this->sendValidationErrorResponse($e);
        } catch (Exception $e) {
            return $this->sendErrorResponse($e->getMessage(), 500);
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'nama' => ['string'],
                'email' => ['string'],
                'telepon' => ['string'],
                'tipe_dokumen' => ['string'],
                'status_dokumen' => ['string'],
                'longtitude' => ['string'],
                'latitude' => ['string'],
    
                // Validate File Untuk Pendirian TK
                'doc_pendirian' => ['max:300','mimes:pdf'], //Maks = 300Kb
                'identitas_pemilik' => ['max:300','mimes:pdf,jpg,jpeg,png'], //Maks = 300Kb
                'identitas_pengajar' => ['max:300','mimes:pdf'], //Maks = 300Kb
                'kualifikasi_pengajar' => ['max:300','mimes:pdf'], //Maks = 300Kb
                'kurikulum' => ['max:300','mimes:pdf'], //Maks = 300Kb
                'doc_keuangan' => ['max:300','mimes:pdf'], //Maks = 300Kb
                'surat_otorisasi' => ['max:300','mimes:pdf'], //Maks = 300Kb
                'program_akademik' => ['max:300','mimes:pdf'], //Maks = 300Kb
                'sarpras' => ['max:300','mimes:pdf'], //Maks = 300Kb
                 //End Validate File Untuk Pendirian TK
    
            ]);

            $penyelenggaraan = PerizinanPenyelenggaraan::findOrFail($id);

            if (count($request->all()) < 1) {
                return $this->sendErrorResponse("Data Kosong. Tidak ada yang diupdate", 400);
            }

            $penyelenggaraan->fill($request->only([
                'nama',
                'email',
                'telepon',
                'tipe_dokumen',
                'status_dokumen',
                'longtitude',
                'latitude'
            ]));

            $fields = [
                'doc_pendirian',
                'identitas_pemilik',
                'identitas_pengajar',
                'kualifikasi_pengajar',
                'kurikulum',
                'doc_keuangan',
                'surat_otorisasi',
                'program_akademik',
                'sarpras',
            ];

            foreach ($fields as $column) {
                $this->deleteFileIfExists($penyelenggaraan->$column, $column);
            }
            
            foreach ($fields as $field) {
                $this->handleFileUpload($request, $penyelenggaraan, $field);
            } // Sesuaikan dengan nama kolom file

            $penyelenggaraan->save();

            $targetStatuses = ['Dokumen Tidak Valid', 'Dokumen Tidak Sesuai', 'Permohonan Ditolak'];
            if (in_array($penyelenggaraan->status_dokumen, $targetStatuses)) {
                Mail::to($penyelenggaraan->email)->send(new ChangeStatusMail($penyelenggaraan));
            }

            return $this->sendSuccessResponse([
                'data' => $penyelenggaraan,
            ], 'Penyelenggaraan updated successfully.', 200);
        } catch (Exception $e) {
            return $this->sendErrorResponse($e->getMessage(), 500);
        }
    }

    public function delete($id)
    {
        try {
            if (!ctype_digit($id) || $id <= 0) {
                return $this->sendValidationErrorResponse(
                    throw new Exception('Invalid id parameter. It should be a positive integer.', 1)
                );
            }

            $penyelenggaraan = PerizinanPenyelenggaraan::find($id);

            if (!$penyelenggaraan) {
                return $this->sendErrorResponse('Data not found.', 404);
            }

            // Hapus file terkait jika ada
            $this->deleteFileIfExists($penyelenggaraan->nama_file, 'nama_file'); // Sesuaikan dengan nama kolom file

            $penyelenggaraan->delete();

            return $this->sendSuccessResponse([], 'Penyelenggaraan deleted successfully.', 200);
        } catch (Exception $e) {
            return $this->sendErrorResponse($e->getMessage(), 500);
        }
    }

    // Fungsi-fungsi tambahan, seperti handleFileUpload, deleteFileIfExists, dll.
    // Sesuaikan dengan kebutuhan Anda
    private function deleteFileIfExists($fileName, $columnName)
    {
        if ($fileName && Storage::exists('public/perizinanPenyelenggaraan/' . $columnName . '/' . $fileName)) {
            Storage::delete('public/perizinanPenyelenggaraan/' . $columnName . '/' . $fileName);
        }
    }

    private function handleFileUpload(Request $request, PerizinanPenyelenggaraan $penyelenggaraan, $columnName)
    {
        if ($request->hasFile($columnName)) {
            $file = $request->file($columnName);
            $extension = $file->getClientOriginalExtension();
            $fileName = date('YmdHis') . '.' . $penyelenggaraan->nama . '.' . $extension;
            $file->storeAs('public/perizinanPenyelenggaraan/' . $columnName, $fileName);
            $penyelenggaraan->$columnName = $fileName;
            $penyelenggaraan->save();
        }
    }
}
