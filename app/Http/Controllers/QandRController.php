<?php

namespace App\Http\Controllers;

use App\Models\Qcm;
use Illuminate\Http\Request;
use App\Models\Reponse;
use App\Models\Question;
use App\Models\Qr;
class QandRController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reponses = Reponse::all();
        $questions = Question::all();
        return view('Q&R.index', compact('reponses'));

    }

 
    public function store(Request $request)
    {
        
    $validatedData = $request->validate([
        'correct' => 'required|in:0,1',
        
    ]);

    
    $questionAnswer = new  Qr();
    $questionAnswer->correct = $validatedData['correct'];
    

    
    $questionAnswer->save();
    
        
        return redirect()->route('Q&R.index')->with('success', 'reponse  créé avec succès');

    }


    public function note()
    {
        $reponses = Reponse::all();
        $qr = Qr::all();
        return view('Q&R.note', compact('reponses','qr'));

    }

    public function check(Request $request)
    {
        $selectedModule = $request->input('module');
    
        $questions = Question::where('module', $selectedModule)->with('reponses')->get();
    
       #$score = $request->session()->get('score', 0);

        $modules = Question::distinct('module')->pluck('module')->all();
    
        return view('questions.qcm', compact('questions', 'modules'));
    }


    
    public function verify(Request $request)
    {
        
        $selectedAnswers = $request->input('reponses');
        $questions = Question::with('reponses')->whereIn('id', array_keys($selectedAnswers))->get();

        $score = 0;
    
        foreach ($questions as $question) {
            $selectedAnswerId = $selectedAnswers[$question->id] ?? null;

            $response = Reponse::find($selectedAnswerId);
    
            if ($response && $response->is_correct) {
                $score++;
            }
        }
    
        $request->session()->put('score', $score);
    
        return redirect()->route('qcm.check')->with('score', $score);
    }

}
