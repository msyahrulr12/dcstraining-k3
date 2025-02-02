<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Carousel;
use App\Models\Client;
use App\Models\ExpertCompetence;
use App\Models\ExpertRequirement;
use App\Models\FlyerTraining;
use App\Models\Gallery;
use App\Models\Information;
use App\Models\ParticipantRequirement;
use App\Models\Service;
use App\Models\TrainingFacility;
use App\Models\TrainingInstructure;
use App\Models\TrainingInvestation;
use App\Models\TrainingMaterial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $carousels = (new Carousel())->getAll();
        $aboutUs = (new AboutUs())->findOne();
        $services = (new Service())->getAll();
        $trainingMaterial = (new TrainingMaterial())->findOne();
        $expertCompetence = (new ExpertCompetence())->findOne();
        $expertRequirement = (new ExpertRequirement())->findOne();
        $participantRequirement = (new ParticipantRequirement())->findOne();
        $trainingFacility = (new TrainingFacility())->findOne();
        $trainingInstructure = (new TrainingInstructure())->findOne();
        $trainingInvestation = (new TrainingInvestation())->findOne();
        $flyerTraining = (new FlyerTraining())->findOne();
        $clients = (new Client())->getAll();
        $informations = (new Information())->getAll();

        return view('client.pages.home', [
            'carousels' => $carousels,
            'about_us' => $aboutUs,
            'services' => $services,
            'training_material' => $trainingMaterial,
            'expert_competence' => $expertCompetence,
            'expert_requirement' => $expertRequirement,
            'participant_requirement' => $participantRequirement,
            'training_facility' => $trainingFacility,
            'training_instructure' => $trainingInstructure,
            'trainingInvestation' => $trainingInstructure,
            'training_investation' => $trainingInvestation,
            'flyer_training' => $flyerTraining,
            'clients' => $clients,
            'informations' => $informations,
        ]);
    }

    public function gallery(Request $request)
    {
        return view('client.pages.gallery', [
            'datas' => []
        ]);
    }
}
