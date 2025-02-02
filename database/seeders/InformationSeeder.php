<?php

namespace Database\Seeders;

use App\Models\Information;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class InformationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $host = env('APP_URL', 'http://127.0.0.1:8005');

        Information::create([
            'code' => Str::random(50).uniqid(),
            'key' => 'WA CENTER',
            'value' => '089602821777',
            'active' => true,
        ]);

        Information::create([
            'code' => Str::random(50).uniqid(),
            'key' => 'Email',
            'value' => 'info@dcstrainingk3.com',
            'active' => true,
        ]);

        Information::create([
            'code' => Str::random(50).uniqid(),
            'key' => 'Website',
            'value' => 'www.dcstrainingk3.com',
            'active' => true,
        ]);

        Information::create([
            'code' => Str::random(50).uniqid(),
            'key' => 'Office',
            'value' => 'Graha STIO. Lt 2 No 2f, JL KH Soleh Iskandar – Jalan Baru, Kota Bogor – Jawa Barat',
            'active' => true,
        ]);

        Information::create([
            'code' => Str::random(50).uniqid(),
            'key' => 'Cabang Lainnya',
            'value' => 'Jakarta',
            'active' => true,
        ]);
    }
}
