<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Reponse;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::with('reponses')->get();

        return view('Quiz.index', compact('questions'));
    }

    public function create()
    {
        $answerCount = 4; // Number of answer fields
        return view('Quiz.create', compact('answerCount'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'lib_question' => 'required',
            'reponses' => 'required|array|min:2',
            'reponses.*' => 'required|string|max:255',
            'correct_answer' => 'required|integer',
        ]);

        $question = Question::create([
            'lib_question' => $request->input('lib_question'),
            'filiere' => $request->input('filiere'),
            'semestre' => $request->input('semestre'),
            'module' => $request->input('module'),
        ]);

        foreach ($request->input('reponses') as $index => $reponse) {
            $isCorrect = $index == $request->input('correct_answer');
            $reponseModel = new Reponse([
                'lib_reponse' => $reponse,
                'is_correct' => $isCorrect,
            ]);

            $question->reponses()->save($reponseModel);
        }

        return redirect()->route('quiz.index')->with('success', 'Question crée avec successfully.');
    }

    public function show($id)
    {
        $question = Question::with('reponses')->findOrFail($id);

        return view('Quiz.show', compact('question'));
    }

    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->reponses()->delete();
        $question->delete();

        return redirect()->route('quiz.index')->with('success', 'Question supprimé successfully.');
    }




}
