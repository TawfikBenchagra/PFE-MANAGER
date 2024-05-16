<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exam = Exam::all();
        return view('examens.index', compact('exam'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('examens.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        Exam::create($request->all());
     
        return redirect()->route('exams.index')
                        ->with('success','Examen crée avec succès.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Exam $exam)
    {
        return view('examens.edit', compact('exam'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Exam $exam)
    {
   
            $exam->update($request->all());
            return redirect()->route('exams.index')
                            ->with('success','Examen Modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();

        return redirect()->route('exams.index')
                        ->with('success','Examen supprimé avec succès.');
    }

}
