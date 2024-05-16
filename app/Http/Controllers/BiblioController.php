<?php

namespace App\Http\Controllers;

use App\Models\Biblio;
use Illuminate\Http\Request;

class BiblioController extends Controller
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
    
        return view('biblio.admin.index', compact('biblio', 'filieres', 'semestres','modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('biblio.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Titre' => 'required|string|max:255',
            'Contenu' => 'required|file|max:20000', // Limite de 20 Mo
        ]);

        $Contenu = $request->file('Contenu')->store('Biblio_Admin', 'public');
        
        Biblio::create([
            'Type' => $request->Type,
            'Titre' => $request->Titre,
            'Contenu' => $Contenu,
            'filiere' => $request->filiere,
            'semestre' => $request->semestre,
            'module' => $request->module,
        ]);
        
        return redirect()->route('bibliotheque.index')->with('success', 'Fichier créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $biblio = Biblio::findOrFail($id);
        return view('biblio.admin.show', compact('biblio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $biblio = Biblio::findOrFail($id);
        return view('biblio.admin.edit', compact('biblio'));
    }   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'Titre' => 'required|string|max:255',
        ]);

        $biblio = Biblio::findOrFail($id);
        $biblio->update([
            'Type' => $request->Type,
            'Titre' => $request->Titre,
            'filiere' => $request->filiere,
            'semestre' => $request->semestre,
            'module' => $request->module,
        ]);
            
        return redirect()->route('bibliotheque.index')->with('success', 'Fichier modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $biblio = Biblio::findOrFail($id);
        $biblio->delete();
        return redirect()->route('bibliotheque.index')->with('success', 'Fichier supprimé avec succès.');
    }
}
