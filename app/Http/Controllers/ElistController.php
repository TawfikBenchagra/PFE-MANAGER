<?php

namespace App\Http\Controllers;

use App\Models\Elist;
use Illuminate\Http\Request;

use App\Models\etudiant;

class ElistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Elist::latest()->paginate(5);
    
        return view('elists.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }


    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('elists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'module' => 'required',
            'description' => 'required',
        ]);
    
        Elist::create($request->all());
     
        return redirect()->route('elists.index')
                        ->with('success','Enseignant créé avec succès.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Elist $elist)
    {
        return view('elists.show',compact('elist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Elist $elist)
    {
        return view('elists.edit',compact('elist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Elist $elist)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'sexe' => 'required',
            'module' => 'required',
            'description' => 'required',
        ]);
    
        $elist->update($request->all());
    
        return redirect()->route('elists.index')
                        ->with('success','Enseignant mis à jour avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Elist $elist)
    {
        $elist->delete();
    
        return redirect()->route('elists.index')
                        ->with('success','Post Enseignant supprimé avec succès');

    }

    public function Etdlist_pour_Ens(Request $request)
    {
      
        $query = etudiant::query();
        
        $filieres = $query->pluck('filiere')->unique();
        $semestres = $query->pluck('semestre')->unique();

        if ($request->has('filiere') && $request->has('semestre')) {
            $query->where('filiere', $request->filiere)
                  ->where('semestre', $request->semestre);
        }

        $liste = $query->get();
        #$allcours = Cour::orderBy('created_at', 'ASC')->get();
        return view('enseignants.listeEtudiants', compact('liste', 'filieres', 'semestres'));
    }
}
