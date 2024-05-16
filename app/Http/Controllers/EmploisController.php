<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Emplois;
 
class EmploisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        
        $query = Emplois::query();
    
        $filieres = $query->pluck('filiere')->unique();
        $semestres = $query->pluck('semestre')->unique();

        if ($request->has('filiere') && $request->has('semestre')) {
            $query->where('filiere', $request->filiere)
                  ->where('semestre', $request->semestre);
        }

        $timetable = $query->orderBy('created_at', 'ASC')->get();

        return view('Emplois.admin.index', compact('timetable', 'filieres', 'semestres'));
    }
  
   
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('Emplois.admin.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $emploi = new Emplois;
        $emploi->Jour = $request->input('Jour');
        $emploi->Seance1 = $request->input('Seance1');
        $emploi->Seance2 = $request->input('Seance2');
        $emploi->Seance3 = $request->input('Seance3');
        $emploi->Seance4 = $request->input('Seance4');
        $emploi->Seance5 = $request->input('Seance5');
        $emploi->filiere = $request->input('filiere');
        $emploi->semestre = $request->input('semestre');
        $emploi->save();
        return redirect()->route('emplois.index')->with('success', 'Emploi du temps créé avec succès.');
    }
  
    /**
     * Display the specified resource.
     */
    
  
    
    public function edit(string $id)
    {
        $timetable = Emplois::findOrFail($id);
  
        return view('Emplois.admin.edit', compact('timetable'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $timetable = Emplois::findOrFail($id);
  
        $timetable->update($request->all());
  
        return redirect()->route('emplois.index')
                        ->with('success', 'Seance updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $timetable = Emplois::findOrFail($id);
  
        $timetable->delete();
  
        return redirect()->route('emplois.index')->with('success', 'Seance deleted successfully');
    }
}