<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PerizinanPenyelenggaraan>
 */
class PerizinanPenyelenggaraanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->email(),
            'telepon' => $this->faker->phoneNumber(),
            'tipe_dokumen' => $this->faker->randomElement([
                'SD/SMP/SMA',
                'Universitas/PT',
                'Lembaga Pelatihan Profesional',
                'Lembaga Pendidikan Non Pemerintah',
                'Pusat Pembelajaran Online',
                'Lembaga Pendidikan Tinggi Swasta',
                'Pendidikan Khusus dan Lembaga Pelatihan Keterampilan'
            ]),
            'status_dokumen' => $this->faker->randomElement([
                'Checking Berkas Operator',
                'Dokumen Valid',
                'Dokumen Tidak Valid',
                'Sedang Disurvey',
                'Telah Disurvey',
                'Checking Berkas Verifikator',
                'Dokumen Sesuai',
                'Dokumen Tidak Sesuai',
                'Tanda Tangan Kepala Dinas',
                'Tanda Tangan Walikota',
                'Izin Diterbitkan',
                'Tolak Permohonan']),
            'latitude' => $this->faker->latitude(),
            'longtitude' => $this->faker->longitude(),
            'lokasi' => $this->faker->address(),
        ];
    }
}