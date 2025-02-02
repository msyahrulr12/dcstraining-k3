<?php

namespace Database\Seeders;

use App\Models\FlyerTraining;
use App\Models\TrainingMaterial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class FlyerTrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $host = env('APP_URL', 'http://127.0.0.1:8005');

        FlyerTraining::create([
            'code' => Str::random(50).uniqid(),
            'title' => 'Flyer Training',
            'description' => 'Flyer Training',
            'image_url' => $host . '/storage/images/flyer-training.jpg',
            'active' => true,
        ]);
    }
}
