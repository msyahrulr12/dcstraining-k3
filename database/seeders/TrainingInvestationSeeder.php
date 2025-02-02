<?php

namespace Database\Seeders;

use App\Models\TrainingInvestation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class TrainingInvestationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $host = env('APP_URL', 'http://127.0.0.1:8005');

        TrainingInvestation::create([
            'code' => Str::random(50).uniqid(),
            'title' => 'Investasi Training Ahli K3 Umum',
            'description' => '<ul class="list-disc list-inside px-3">
                    <li>Personel/Fresh Graduate/Belum kerja Rp 5.000.000,- (Lima Juta Rupiah)</li>
                    <li>Utusan Perusahaan Rp 6.000.000,- ( Enam Juta Rupiah )</li>
                    <li>Note : Biaya di atas belum termasuk Pajak PPN 10% dan PPh 2% (jika diperlukan)</li>
                </ul>',
            'image_url' => $host . 'images/kompetensi-1.avif',
            'active' => true,
        ]);
    }
}
