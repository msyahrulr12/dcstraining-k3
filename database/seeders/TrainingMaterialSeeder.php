<?php

namespace Database\Seeders;

use App\Models\TrainingMaterial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class TrainingMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $host = env('APP_URL', 'http://127.0.0.1:8005');

        TrainingMaterial::create([
            'code' => Str::random(50).uniqid(),
            'title' => 'Materi Training Ahli K3 Umum',
            'description' => '<p>Sesuai dengan keputusan Dirjen Pembinaan Pengawasan Ketenagakerjaan, Keselamatan dan Kesehatan Kerja (K3) RI No.KEP.69/PPK&K3/XII/2015 Tanggal 02 Desember 2015, tentang Pedoman Pembinaan Calon Ahli Keselamatan dan Kesehatan Kerja (K3) Umum maka berikut Silabi yang akan diberikan selama 12 hari atau 120 JP (Jam Pelajaran) : </p>
                    <br>
                    <ul class="list-disc list-inside px-3">
                        <li>Kebijakan K3</li>
                        <li>Dasar-Dasar K3</li>
                        <li>Undang-undang No.1 Tahun 1970</li>
                        <li>Pengawasan Norma Kelembagaan dan Keahlian K3</li>
                        <li>Pengawasan Norma Keselamatan Kerja Listrik</li>
                        <li>Pengawasan Norma Penanggulangan Kebakaran</li>
                        <li>Pengawasan Norma Keselamatan Kerja Konstruksi dan Bangunan</li>
                        <li>Pengawasan Norma Keselamatan Kerja Mekanik</li>
                        <li>Pengawasan Norma Keselamatan Kerja Pesawat Uap dan Bejana Tekan</li>
                        <li>Pengawasan Norma Kesehatan Kerja</li>
                        <li>Pengawasan Norma Bahan Berbahaya</li>
                        <li>Pengawasan Norma SMK3</li>
                        <li>Laporan Kecelakaan Kerja</li>
                        <li>Konsep Dasar K3</li>
                        <li>Analisis Kecelakaan</li>
                        <li>Manajemen Risiko</li>
                        <li>Praktek Kerja Lapangan / Observasi Lapangan</li>
                        <li>Ujian tertulis</li>
                        <li>Seminar</li>
                    </ul>',
            'image_url' => $host . 'images/kompetensi-1.avif',
            'active' => true,
        ]);
    }
}
