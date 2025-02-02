<?php

namespace Database\Seeders;

use App\Models\Carousel;
use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $host = env('APP_URL', 'http://127.0.0.1:8005');

        for ($i = 1; $i <= 12; $i++) {
            Service::create([
                'code' => Str::random(),
                'image_url' => env('APP_URL', 'http://127.0.0.1:8005') . '/storage/images/layanan-kami-1.webp',
                'title' => Str::random(),
                'subtitle' => Str::random(),
                'description' => Str::random(),
                'active' => true,
            ]);
        }
    }
}
