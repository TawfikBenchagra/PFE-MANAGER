@extends('layouts.ENS')
  
@section('contents')
        <h1 class="text-dark">Modifier la question</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('questions.update', $question->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="lib_question" class="text-dark">Question:</label>
                <input type="text" name="lib_question" class="form-control" value="{{ $question->lib_question }}">
            </div>
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>

@endsection