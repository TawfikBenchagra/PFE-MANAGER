<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MeetingController extends Controller
{

    public function CoursEtudiantAuth()
    {
        $etudiant = Auth::guard('etudiant')->user();
        $cours = Cour::where('filiere', $etudiant->filiere)->where('semestre', $etudiant->semestre)->get();
        return view('etudiants.cours', compact('cours'));
    }

    public function lien(Request $request)
    {
        $lien = $request->lien;
        return view('Cours.meet')->with('lien', $lien);
    }

    public function lienAdm(Request $request)
    {
        $lien = $request->lien;
        return view('admins.Cours.meet')->with('lien', $lien);
    }
    
    public function lienEtd(Request $request)
    {
        $lien = $request->lien;
        return view('etudiants.meet')->with('lien', $lien);
    }
}
