<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\ExpertRequirement;
use App\Models\ParticipantRequirement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ParticipantRequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $host = env('APP_URL', 'http://127.0.0.1:8005');

        ParticipantRequirement::create([
            'code' => Str::random(50).uniqid(),
            'title' => 'Persyaratan Peserta K3 Umum',
            'description' => '<p>Sesuai dengan keputusan Dirjen Pembinaan Pengawasan Ketenagakerjaan, Keselamatan dan Kesehatan Kerja (K3) RI No.KEP.69/PPK&K3/XII/2015 Tanggal 02 Desember 2015, tentang Pedoman Pembinaan Calon Ahli Keselamatan dan Kesehatan Kerja (K3) Umum maka berikut Silabi yang akan diberikan selama 12 hari atau 120 JP (Jam Pelajaran)</p>
                <ul class="list-disc list-inside px-3">
                    <li>Mengisi Formulir Pendaftaran</li>
                    <li>Copy Ijazah Minimal D3</li>
                    <li>Copy KTP</li>
                    <li>Surat Keterangan Kerja dari Perusahaan</li>
                    <li>Surat Keterangan Sehat Dari Klinik / Puskesmas</li>
                    <li>Curicculum Vitae ( CV )</li>
                    <li>Menandatangani Fakta Integritas Peserta</li>
                    <li>Scan Foto ukuran 3x4 dan 2x3 ( Background Merah )</li>
                    <li>Memiliki email pribadi aktif di Google ( GMAIL)</li>
                    <li>Memiliki dan dapat menggunakan Laptop/ PC dan Smartphone</li>
                    <li>Memiliki Koneksi Internet yang memadai ( stabil dan kuota cukup )</li>
                    <li>Menginstal Aplikasi Zoom Meeting</li>
                </ul>',
            'image_url' => $host . '/storage/images/director-1.avif',
            'active' => true,
        ]);
    }
}
