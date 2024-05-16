<?php

namespace App\Http\Controllers;

use App\Models\administrateur;
use App\Models\etudiant;
use App\Models\pere;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    #Pour choisir le type de compte à créer : 
    public function firstregister()
    {
        return view('FirstRegister');
    }

}

