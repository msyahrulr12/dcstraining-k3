<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\TrainingMaterial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $host = env('APP_URL', 'http://127.0.0.1:8005');

        for ($i = 1; $i <= 12; $i++) {
            Client::create([
                'code' => Str::random(50).uniqid(),
                'name' => 'Client-' . $i,
                'description' => 'Detail Client-' . $i,
                'image_url' => $host . '/storage/images/img-'. $i .'.avif',
                'active' => true,
            ]);
        }
    }
}
