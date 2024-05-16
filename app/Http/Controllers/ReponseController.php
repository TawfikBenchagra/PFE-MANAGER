<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reponse;
use App\Models\Question;

class ReponseController extends Controller
{
    
    public function index()
    {
        $reponses = Reponse::all();
        return view('reponses.index', compact('reponses'));
    }

    
    public function index1()
    {
        $reponses = Reponse::all();
        $questions = Question::all();
        return view('reponses.index1', compact('reponses','questions'));

    }


    public function create(Request $request)
    {
        $questions = Question::all();
        $query = Reponse::query();

        if ($request->has('id')) {
            $questionId = $request->input('id');
            if ($questionId) {
                $query->where('id', $questionId);
            }
        }

        return view('reponses.create',compact('questions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lib_reponse' => 'required',
            'question_id' => 'required',
            'is_correct' => 'required|in:0,1'
        ]);

        Reponse::create($request->all());

        return redirect()->route('questions.index')->with('success', 'Reponse crée avec succés');
    }


    public function edit(Reponse $reponse)
    {
        return view('reponses.edit', compact('reponse'));
    }


    public function update(Request $request, Reponse $reponse)
    {
        $request->validate([
            'lib_reponse' => 'required',
            'question_id' => 'required',
            'is_correct' => 'required|in:0,1',
        ]);

        $reponse->update($request->all());

        return redirect()->route('questions.show', $request->question_id)->with('success', 'Reponse modifié avec succès');
    }

    
    public function destroy(Reponse $reponse)
    {
        $questionId = $reponse->question_id;
        $reponse->delete();

        return redirect()->route('questions.show', $questionId)->with('success', 'Reponse supprimé avec succès');
    }
}
