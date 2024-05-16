<?php

namespace App\Http\Controllers;

use App\Models\Biblio;
use Illuminate\Http\Request;


class EnsBiblioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Biblio::query();
    
        $filieres = $query->pluck('filiere')->unique();
        $semestres = $query->pluck('semestre')->unique();
        $modules = $query->pluck('module')->unique();
    
        if ($request->has('filiere') && $request->has('semestre') && $request->has('module')) {
            $query->where('filiere', $request->filiere)
                  ->where('semestre', $request->semestre)
                  ->where('module', $request->module);

        }
    
        $biblio = $query->orderBy('created_at', 'ASC')->get();
    
        return view('biblio.Enseignant.index', compact('biblio', 'filieres', 'semestres','modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biblio.Enseignant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Type = $request->Type;
        $Titre = $request->Titre;
        $Contenu = $request->file('Contenu')->store('Biblio_Enseignant', 'public');
        $filiere = $request->filiere;
        $semestre = $request->semestre;
        $module = $request->module;
        
        $request->validate([
            'Contenu' => 'required|file|max:20000', // Limite de 20 Mo,
        ]);

        Biblio::create([
            'Type' => $Type,
            'Titre' => $Titre,
            'Contenu' => $Contenu,
            'filiere' => $filiere,
            'semestre' => $semestre,
            'module' => $module,
        ]);
        return redirect()->route('Ensbibliotheque.index')->with('success', 'Fichier créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Biblio $biblio)
    {
        return view('biblio.Enseignant.show', compact('biblio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rs = Biblio::findOrFail($id);
        return view('biblio.Enseignant.edit', compact('rs'));

    }   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $biblio = Biblio::findOrFail($id);
        $biblio->update($request->all());

            
        return redirect()->route('Ensbibliotheque.index')
                            ->with('success', 'Fichier modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biblio = Biblio::findOrFail($id);
  
        $biblio->delete();
        return redirect()->route('Ensbibliotheque.index')
                        ->with('success', 'Fichier supprimé avec succès.');

    }
}
