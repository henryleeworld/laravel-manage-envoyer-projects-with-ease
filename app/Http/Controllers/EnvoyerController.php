<?php

namespace App\Http\Controllers;

use JustSteveKing\Laravel\Envoyer\SDK\Envoyer;

class EnvoyerController extends Controller
{
    public function manageProject() 
    {
        $envoyer = Envoyer::illuminate(env('ENVOYER_API_TOKEN'));
        echo (empty($envoyer->projects->all()->projects)? '目前無專案' : '目前有專案') . PHP_EOL;
    }
}
