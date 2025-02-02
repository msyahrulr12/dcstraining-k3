<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CarouselSeeder::class,
            AboutUsSeeder::class,
            ServiceSeeder::class,
            TrainingMaterialSeeder::class,
            ExpertCompetenceSeeder::class,
            ExpertRequirementSeeder::class,
            ParticipantRequirementSeeder::class,
            TrainingFacilitySeeder::class,
            TrainingInstructureSeeder::class,
            TrainingInvestationSeeder::class,
            FlyerTrainingSeeder::class,
            ClientSeeder::class,
            InformationSeeder::class,
            GallerySeeder::class,
        ]);
    }
}
