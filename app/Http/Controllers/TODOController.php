<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class TODOController extends Controller
{
    public function TODOAccueil()
    {
        return view('projects.Accueil');
    }

    public function TODOHome()
    {
        return view ('projects.Home');
    }
}
