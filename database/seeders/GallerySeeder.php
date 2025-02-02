<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $host = env('APP_URL', 'http://127.0.0.1:8005');

        $z = 1;
        while ($z < 20) {
            for ($i = 1; $i <= 12; $i++) {
                Gallery::create([
                    'code' => Str::random(50).uniqid(),
                    'image_name' => 'Client-' . $i,
                    'image_url' => $host . '/storage/images/img-'. $i .'.avif',
                    'active' => true,
                ]);
            }

            $z++;
        }
    }
}
