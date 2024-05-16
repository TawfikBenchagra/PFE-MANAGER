@extends('layouts.ENS')
  
 {{--@section('title', 'Emplois de temps')--}}
  
@section('contents')

<div class="d-flex align-items-center justify-content-between">
    <h1>Liste des questions</h1>
    <a href="{{ route('questions.create') }}" class="btn btn-success">Créer une question</a>
</div>
@if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
@endif
<table class="table table-bordred">
    <thead class="table-primary">
        <tr>
            <th>Questions</th>
            <th>Filière</th>
            <th>Semestre</th>
            <th>Module</th>
            <th>Actions</th>
        </tr>
    </thead>
    
    <tbody>
        @foreach($questions as $question)
            <tr>
                
                <td>{{ $question->lib_question }}</td>
                <td>{{ $question->filiere }}</td>
                <td>{{ $question->semestre}}</td>
                <td>{{ $question->module }}</td>
                <td>
                    <a href="{{ route('questions.show', $question->id) }}" class="btn btn-info">Voir</a>
                    <a href="{{ route('questions.edit', $question->id) }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ route('questions.destroy', $question->id) }}" method="POST" style="display: inline-block;">
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