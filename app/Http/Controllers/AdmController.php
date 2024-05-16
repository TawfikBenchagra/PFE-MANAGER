<?php

namespace App\Http\Controllers;

use App\Models\administrateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Cour;

class AdmController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $administrateurs = administrateur::all();
            return view('adlists.administrateurs', ['administrateurs' => $administrateurs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admins.RegisterAdm');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nom = $request->nom;
        $prenom = $request->prenom;
        $cin = $request->cin;
        $email = $request->email;
        $password = Hash::make($request->password);
        $photo = $request->file('photo')->store('profil_Adm_imgs', 'public');

        //Validation
        $request->validate([
            'cin' => 'unique:administrateurs',
            'email' => 'unique:administrateurs',
            'password' => [
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
                'confirmed',
            ],
            'photo' => 'image|mimes:png,jpg,jpeg,svg',
        ]);

        //Insertion
        administrateur::create([
            'nom' => $nom,
            'prenom' => $prenom,
            'cin' => $cin,
            'email' => $email,
            'password' => $password,
            'image' => $photo,
        ]);

        return to_route('login')->with('success', 'Votre compte administrateur a été créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(administrateur $administrateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(administrateur $administrateur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, administrateur $administrateur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(administrateur $administrateur)
    {
        //
    }
    public function Adm_delete($id, Request $request)
    {
        $removeDelete = administrateur::find($id);
        $removeDelete->delete();
        return redirect()->back()->with('error',"Compte administrateur Supprimé avec succès ");
    }

    // Profile admin
    public function Admprofile()
    {
        return view('admins.Admprofile');
    }


    # Les cours :

    // Pour afficher les cours 
    public function indexCours(Request $request)
    {
        $filieres = Cour::distinct('filiere')->pluck('filiere');
        $semestres = Cour::distinct('semestre')->pluck('semestre');

        $query = Cour::query();

        if ($request->filled('filiere')) {
            $query->where('filiere', $request->input('filiere'));
        }

        if ($request->filled('semestre')) {
            $query->where('semestre', $request->input('semestre'));
        }

        $allcours = $query->get();
        #$allcours = Cour::orderBy('created_at', 'ASC')->get();
        return view('admins.Cours.index', compact('allcours', 'filieres', 'semestres'));
    }


    // Pour creer des cours 
    public function createCours()
    {
        return view('admins.Cours.create');
    }

    // pour stocker les cours dans la base de donnees 
    public function storeCours(Request $request)
    {
        $nom_cours = $request->nom;
        $fil_cours = $request->filiere;
        $semestre = $request->semestre;

        //Validation
        $request->validate([
            'nom' => 'string',
        ]);

        //Insertion
        Cour::create([
            'nom' => $nom_cours,
            'filiere' => $fil_cours,
            'semestre' => $semestre,
        ]);
        return to_route('coursAdm.indexCours')->with('success', 'Cours créé avec succès');
    }

    // Pour supprimer les cours 
    public function destroyCours(string $id)
    {
        $cour = Cour::findOrFail($id);
        $cour->delete();
        return to_route('coursAdm.indexCours')->with('success', 'Cours supprimé avec succès');
    }


}
