<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $host = env('APP_URL', 'http://127.0.0.1:8005');

        AboutUs::create([
            'code' => Str::random(50).uniqid(),
            'title' => 'Tentang Kami',
            'description' => '<p>PT Dinamika Candra Sarana Atau DCS Merupakan Perusahaan Jasa Keselamatan dan Kesehatan Kerja ( PJK3) Bidang Pembinaan Keselamatan dan Kesehatan Kerja (K3) Pada Perusahaan.</p><br>
                    <p>DCS telah mendapatkan Surat Penunjukan Sebagai PJK3 dari Kementerian Ketenagakerjaan Republik Indonesia Nomor : ---------------------------------------------- Tentang Pembinaan Keahlian Keselamatan Kerja.</p><br>
                    <p>Sesuai Peraturan Menteri Tenaga Kerja No. PER. 04/MEN/1987, dalam pasal 3 ayat (2) yang berbunyi, Sekretaris P2K3 ialah “Ahli Keselamatan dan Kesehatan Kerja”dari perusahaan tersebut. Merujuk dari Regulasi yang dikeluarkan oleh Pemerinath, Terkait dengan Ahli K3 Umum tertuang di dalam :</p><br>

                    <ul class="list-disc list-inside px-3">
                        <li>Permenaker No.02 Tahun 1992, tentang Penunjujkan dan Kewenangan Ahli K3</li>
                        <li>Permenaker No.239 Tahun 2003, tentang Pedoman Pelaksanaan Calon Ahli K3 Umum</li>
                        <li>KepDirjen No.69 Tahun 2015, tentang Pedoman Pembinaan Calon Ahli K3 Umum</li>
                        <li>Tambahan Surat Pemberitahuan dari Kemnaker RI yang ditujukkan kepada PJK3</li>
                    </ul>',
            'image_url' => $host . '/storage/images/director-1.avif',
            'active' => true,
        ]);
    }
}
