<?php

namespace App\Http\Controllers;

use App\Models\enseignant;
use App\Models\Exam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EnsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enseignants = enseignant::all();
            return view('elists.enseignants', ['enseignants' => $enseignants]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enseignants.RegisterEns');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nom = $request->nom;
        $prenom = $request->prenom;
        $email = $request->email;
        $sexe = $request->sexe;
        $password = Hash::make($request->password);
        $datNais = $request->datnais;
        $photo = $request->file('photo')->store('profil_Ens_imgs', 'public');

        //Validation
        $request->validate([
            'email'=>'unique:enseignants',
            'password' => [
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
                'confirmed',
            ],
            'photo' => 'image|mimes:png,jpg,jpeg,svg',
        ]);

        //Insertion
        enseignant::create([
            'nom' => $nom,
            'prenom' => $prenom,
            'email' => $email,
            'sexe' => $sexe,
            'date_naissance' => $datNais,
            'password' => $password,
            'image' => $photo,
        ]);

        return redirect()->route('login')->with('success','Votre compte enseignant a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(enseignant $enseignant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(enseignant $enseignant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, enseignant $enseignant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(enseignant $enseignant)
    {
        //
    }
    public function Ens_delete($id, Request $request)
    {
        $removeDelete = enseignant::find($id);
        $removeDelete->delete();
        return redirect()->back()->with('error',"Compte enseignant Supprimé avec succès ");
    }

    public function Ensprofile()
    {
        return view('enseignants.Ensprofile');
    }

    public function planification()
    {
        
            $exams = Exam::all();
            return view('enseignants.planification ', compact('exams'));
    }
}
