<!-- resources/views/reponses/index.blade.php -->

@extends('layouts.ENS')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Liste des réponses</h1>
    <a href="{{ route('reponses.create') }}" class="btn btn-success">Créer une réponse</a>
</div>

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif

<table class="table table-bordered">
    <thead class="table-primary">
        <tr>
            
            <th>Réponse</th>
            <th>Question</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($reponses as $reponse)
        <tr>
            <td>{{ $reponse->lib_reponse }}</td>
            <td>{{ $reponse->question->lib_question }}</td>
            <td>
                <a href="{{ route('reponses.edit', $reponse->id) }}" class="btn btn-primary">Modifier</a>
                <form action="{{ route('reponses.destroy', $reponse->id) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
