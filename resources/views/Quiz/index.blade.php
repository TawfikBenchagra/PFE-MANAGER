@extends('layouts.ENS')

@section('contents')
    <div class="row">
        <div class="col-md-10">
            <h1><strong class="text-dark">Questions</strong></h1>
        </div>
        <div class="col-md-2">
            <a href="{{ route('quiz.create') }}" class="btn btn-success">Créer Question</a>
        </div>
    </div>

    @if ($questions->isEmpty())
        <div class="alert alert-danger">
            <h5>Aucune question à afficher !</h5>
        </div>
    @else
        <table class="table table-bordered text-dark" style="border: 2px solid black;">
            <thead>
                <tr>
                    <th style="border: 2px solid black;">Titre</th>
                    <th style="border: 2px solid black;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($questions as $question)
                    <tr>
                        <td style="border: 2px solid black;">{{ $question->lib_question }}</td>
                        <td style="border: 2px solid black;">
                            <a href="{{ route('quiz.show', ['id' => $question->id]) }}" class="btn btn-primary">View</a>
                            <form action="{{ route('quiz.destroy', $question->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
