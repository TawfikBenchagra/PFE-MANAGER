<?php

namespace App\Http\Controllers;

use App\Models\pere;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Exam;
use App\Models\Emplois;

use App\Models\etudiant;
use Illuminate\Support\Facades\Auth;

class ParController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parents = pere::all();
        return view('plists.parents ', ['parents' => $parents]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parents.RegisterPar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nom = $request->nom;
        $prenom = $request->prenom;
        $cin = $request->cin;
        $apogee_etd = $request->apogee_etd;
        $email = $request->email;
        $password = Hash::make($request->password);
        $photo = $request->file('photo')->store('profil_Par_imgs', 'public');


        //Validation
        $request->validate([
            'apogee_etd' => 'integer|unique:peres',
            'password' => [
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
                'confirmed',
            ],
            'photo' => 'image|mimes:png,jpg,jpeg,svg',
        ]);

        //Insertion
        pere::create([
            'nom'=>$nom,
            'prenom'=>$prenom,
            'cin' => $cin,
            'apogee_etd' => $apogee_etd,
            'email' => $email,
            'password' => $password,
            'image' => $photo,
        ]);

        return to_route('login')->with('success', 'Votre compte parent a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(parent $parent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(parent $parent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, parent $parent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(parent $parent)
    {
        //
    }
    public function Par_delete($id, Request $request)
    {
        $removeDelete = pere::find($id);
        $removeDelete->delete();
        return redirect()->back()->with('error',"Compte parent Supprimé avec succès ");
    }

    public function Parprofile()
    {
        return view('parents.Parprofile');
    }

    public function planification()
    {
        
            $exams = Exam::all();
            return view('parents.planification ', compact('exams'));
    }


    public function showEmpl()
    {
        $pere = Auth::guard('pere')->user();
        $etudiant = $pere->etudiants;

        if ($etudiant) {
            $filiere = $etudiant->filiere;
            $semestre = $etudiant->semestre;
        
            $emploi = Emplois::where('filiere', $filiere)
                            ->where('semestre', $semestre)
                            ->get();
        } else {
            $emploi = collect();
        }

        return view('parents.emplois', compact('etudiant', 'emploi'));
    }
}
