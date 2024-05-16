<?php

namespace App\Http\Controllers;

use App\Models\Adlist;
use Illuminate\Http\Request;

class AdlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Adlist::latest()->paginate(5);
    
        return view('adlists.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adlists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'description' => 'required',
        ]);
    
        Adlist::create($request->all());
     
        return redirect()->route('adlists.index')
                        ->with('success','Administrateur créé avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Adlist $adlist)
    {
        return view('adlists.show',compact('adlist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adlist $adlist)
    {
        return view('adlists.edit',compact('adlist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adlist $adlist)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'description' => 'required',
        ]);
    
        $adlist->update($request->all());
    
        return redirect()->route('adlists.index')
                        ->with('success','Administrateur mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adlist $adlist)
    {
        $adlist->delete();
    
        return redirect()->route('adlists.index')
                        ->with('success','Administrateur supprimé avec succès');
    }

}
