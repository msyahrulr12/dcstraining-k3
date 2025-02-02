<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\TrainingFacility;
use App\Models\TrainingMaterial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class TrainingFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $host = env('APP_URL', 'http://127.0.0.1:8005');

        TrainingFacility::create([
            'code' => Str::random(50).uniqid(),
            'title' => 'Fasilitas Training Ahli K3 Umum',
            'description' => '<ul class="list-disc list-inside px-3">
                    <li>Sertifikat Calon Ahli K3 Umum Kemnaker RI</li>
                    <li>SKP (Surat Keterangan Penunjukan) sebagai Ahli K3 dari Kementrian Ketenagakerjaan RI (Jika utusan perusahaan)</li>
                    <li>Kartu Lisensi Ahli K3 (Jika utusan perusahaan)</li>
                    <li>Surat Keterangan Lulus ( SKL ) Dari PJK3 PT Dinamika Candra Sarana</li>
                    <li>E-Modul Materi Ahli K3 Umum</li>
                    <li>E-Modul Peraturan perundang – Undangan K3</li>
                    <li>Kemeja Safety</li>
                    <li>Training Kit</li>
                    <li>Souvenir</li>
                </ul>',
            'image_url' => $host . 'images/kompetensi-1.avif',
            'active' => true,
        ]);
    }
}
