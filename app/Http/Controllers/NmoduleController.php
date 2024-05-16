<?php

namespace App\Http\Controllers;

use App\Models\Nmodule;
use Illuminate\Http\Request;


class NmoduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Nmodule::latest()->paginate(5);
    
        return view('nmodules.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nmodules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'note' => 'required',
            'apogee' => 'required',
            'description' => 'required',
        ]);
    
        Nmodule::create($request->all());
     
        return redirect()->route('nmodules.index')
                        ->with('success','étudiant créé avec succès.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Nmodule $nmodule)
    {
        return view('nmodules.show',compact('nmodule'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nmodule $nmodule)
    {
        return view('nmodules.edit',compact('nmodule'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nmodule $nmodule)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'note' => 'required',
            'apogee' => 'required',
            'description' => 'required',
        ]);
    
        $nmodule->update($request->all());
    
        return redirect()->route('nmodules.index')
                        ->with('success','étudiant mis à jour avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nmodule $nmodule)
    {
        $nmodule->delete();
    
        return redirect()->route('nmodules.index')
                        ->with('success','étudiant supprimé avec succès');

    }
}
