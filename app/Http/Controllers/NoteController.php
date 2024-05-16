<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Reponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $etudiant = Auth::guard('etudiant')->user();
        $apogee = $etudiant->apogee;

        $reponses = $request->input('reponses');

        $note = 0;
        $module = '';

        foreach ($reponses as $questionId => $reponseId) {
            $reponse = Reponse::find($reponseId);
            if ($reponse && $reponse->is_correct) {
                $note += 1;
            }
            $question = $reponse->question;
            if ($question) {
                $module = $question->module;
            }
        }

        $existingNote = Note::where('apogee_etd', $apogee)->where('module', $module)->first();
        if ($existingNote) {
            return redirect()->route('qcm.check')->with('error', 'Vous avez déjà répondu à ce QCM.');
        }

        Note::create([
            'note' => $note,
            'module' => $module,
            'apogee_etd' => $apogee,
        ]);

        return redirect()->route('qcm.check')->with('success', 'Vos réponses ont été envoyées avec succès.');
    }
}
