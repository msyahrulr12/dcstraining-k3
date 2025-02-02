<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\ExpertCompetence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ExpertCompetenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $host = env('APP_URL', 'http://127.0.0.1:8005');

        ExpertCompetence::create([
            'code' => Str::random(50).uniqid(),
            'title' => 'Kompetensi Ahli K3 Umum',
            'description' => '<ul class="list-disc list-inside">
                        <li>Menjelaskan tugas, wewenang dan tanggung jawab Ahli K3</li>
                        <li>Menjelaskan hak pekerja dalam bidang K3</li>
                        <li>Menjelaskan kepada pengusaha bahwa upaya K3 menguntungkan bagi perusahaan</li>
                        <li>Menjelaskan tujuan sistem manajemen K3 (SMK3)</li>
                        <li>Menjelaskan sistem pelaporan kecelakaan</li>
                        <li>Menganalisa kasus kecelakaan, mengetahui faktor penyebabnya dan dapat menyiapkan laporan kecelakaan kepada pihak terkait.</li>
                        <li>Mengenal P2K3, tugas, tanggung jawab dan wewenang organisasi ini – Mengenal pembinaan dan pengawasan K3 di tingkat perusahaan, Nasional dan Internasional</li>
                        <li>Mengidentifikasi obyek pengawasan K3</li>
                        <li>Mengetahui persyaratan dan pemenuhan terhadap peraturan perundangan di tempat kerja.</li>
                        <li>Mengetahui persyaratan keselamatan dan kesehatan kerja di tempat kerja</li>
                        <li>Mengetahui proses audit dan ruang lingkupnya untuk mengukur tingkat pencapaian.</li>
                    </ul>',
            'image_url' => $host . '/storage/images/kompetensi-1.avif',
            'active' => true,
        ]);
    }
}
