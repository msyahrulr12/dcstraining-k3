<?php

namespace Database\Seeders;

use App\Models\Carousel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class CarouselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $host = env('APP_URL', 'http://127.0.0.1:8005');

        for ($i = 1; $i <= 3; $i++) {
            Carousel::create([
                'code' => Str::random(50).uniqid(),
                'name' => 'Image-' . $i,
                'image_url' => $host . '/storage/images/carousel-'. $i .'.jpeg',
                'active' => true,
            ]);
        }
    }
}
