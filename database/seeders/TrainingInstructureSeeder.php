<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use App\Models\TrainingInstructure;
use App\Models\TrainingMaterial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class TrainingInstructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $host = env('APP_URL', 'http://127.0.0.1:8005');

        TrainingInstructure::create([
            'code' => Str::random(50).uniqid(),
            'title' => 'Instruktur Training',
            'description' => '<p>Pemateri yang akan menyampaikan Pembelajaran dalam Pelaksanaan training Calon Ahli K3 umum ini bersumber dari beberapa instruktur Kementrian Ketenagakerjaan R.I dan Disnaker Kota  Setempat yang telah Berpengalaman , serta para Akademisi dan Praktisi yang berpengalaman dan  berkompeten dibidang K3.</p>',
            'image_url' => $host . 'images/kompetensi-1.avif',
            'active' => true,
        ]);
    }
}
