<?php

namespace App\Http\Controllers;

use App\Models\Plist;
use Illuminate\Http\Request;

class PlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Plist::latest()->paginate(5);
    
        return view('plists.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('plists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'apogee' => 'required',
            'description' => 'required',
        ]);
    
        Plist::create($request->all());
     
        return redirect()->route('plists.index')
                        ->with('success','Parent créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plist $plist)
    {
        return view('plists.show',compact('plist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plist $plist)
    {
        return view('plists.edit',compact('plist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plist $plist)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'apogee' => 'required',
            'description' => 'required',
        ]);
    
        $plist->update($request->all());
    
        return redirect()->route('plists.index')
                        ->with('success','Parent mis à jour avec succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plist $plist)
    {
        $plist->delete();
    
        return redirect()->route('plists.index')
                        ->with('success','Parent supprimé avec succès');
    }
}
