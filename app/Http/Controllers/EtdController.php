<?php

namespace App\Http\Controllers;

use App\Models\etudiant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Biblio;
use illuminate\Pagination\Paginator;
class EtdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = etudiant::all();
        return view('nmodules.etudiants', ['etudiants' => $etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('etudiants.Register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nom = $request->nom;
        $prenom = $request->prenom;
        $email = $request->email;
        $apogee = $request->apogee;
        $fil = $request->fil;
        $sem = $request->semestre;
        $datN = $request->datnais;
        $sexe = $request->sexe;                                                                             
        $password = Hash::make($request->password);
        $photo = $request->file('photo')->store('profil_imgs', 'public');

        //Validation
        $request->validate([
            'email'=>'unique:etudiants',
            'apogee'=>'integer|unique:etudiants',
            'password' => [
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/',
                'confirmed',
            ],
            'photo' => 'image|mimes:png,jpg,jpeg,svg',
        ]);

        //Insertion
        etudiant::create([
            'nom' => $nom,
            'prenom' => $prenom,
            'apogee' => $apogee,
            'date_naissance' => $datN,
            'email' => $email,
            'sexe' => $sexe,
            'password' => $password,
            'filiere' => $fil,
            'semestre' => $sem,
            'image' => $photo
         ]);

        return to_route('login')->with('success','Votre compte etudiant a été créé avec succès.'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(etudiant $etd)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(etudiant $etd)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, etudiant $etd)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(etudiant $etd)
    {
        //
    }
    public function Etd_delete($id, Request $request)
    {
        $removeDelete = etudiant::find($id);
        $removeDelete->delete();
        return redirect()->back()->with('error',"Compte étudiant Supprimé avec succès ");
    }

    public function profile()
    {
        return view('etudiants.profile');
    }


    public function biblioETD(Request $request)
    {
        $etudiant = Auth::guard('etudiant')->user();
    
        $query = Biblio::where('filiere', $etudiant->filiere)
                        ->where('semestre', $etudiant->semestre);
    
        $modules = $query->distinct('module')->pluck('module');
    
        if ($request->has('module')) {
            $query->where('module', $request->module);
        }
    
        $biblios = $query->latest()->paginate(100);
    
        return view('etudiants.biblio', compact('biblios', 'modules'));
    }


}
