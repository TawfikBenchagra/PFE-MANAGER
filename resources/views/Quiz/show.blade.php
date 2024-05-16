@extends('layouts.ENS')

@section('contents')
<div class="d-flex align-items-center justify-content-between text-dark">
    <h1>Détails :</h1>
    <a href="{{ route('quiz.index') }}" class="btn btn-success">Liste des questions</a>
</div>
    <table class="table table-bordered text-dark" style="border: 2px solid black;">
        <tr>
            <th style="border: 2px solid black;">Question</th>
            <th>Réponses</th>
        </tr>
        <tr>
            <td class="align-middle text-dark" style="border: 2px solid black;">{{ $question->lib_question }}</td>
            <td style="border: 2px solid black;">
                <ul>
                    @foreach ($question->reponses as $reponse)
                        <li class="text-dark">{{ $reponse->lib_reponse }} :
                            @if ($reponse->is_correct)
                                <strong style="color: green;">Correct</strong>
                            @else
                                <strong style="color: red;">Incorrect</strong>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </td>
        </tr>
    </table>
@endsection
