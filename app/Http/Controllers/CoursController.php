<?php

namespace App\Http\Controllers;

use App\Models\Cour;
use Illuminate\Http\Request;

class CoursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
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
        return view('Cours.index', compact('allcours', 'filieres', 'semestres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Cours.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
        return to_route('cours.index')->with('success', 'PFE créé avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cour $cour)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cour $cour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cour $cour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cour = Cour::findOrFail($id);
        $cour->delete();
        return to_route('cours.index')->with('success', 'PFE supprimé avec succès');
    }
}
