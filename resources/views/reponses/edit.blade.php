@extends('layouts.ENS')

@section('contents')
    <h1>Modifier la résponse</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('reponses.update', $reponse->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
           <!-- <label for="lib_reponse">reponses:</label>-->
            <input type="text" name="lib_reponse" class="form-control" value="{{ $reponse->lib_reponse }}">
        </div>
        <input type="hidden" name="question_id" value="{{ $reponse->question_id }}">
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
@endsection
