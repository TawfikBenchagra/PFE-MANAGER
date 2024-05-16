@extends('layouts.ENS')
@section('contents')

<h1>Créer une reponse</h1>
<form action="{{ route('reponses.store') }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-14">
            <div class="form-group">
                <label for="lib_reponse">Question:</label>
                <select name="question_id" class="form-control">
                    <option value="">Sélectionner une question</option>
                    @foreach ($questions as $question)
                        <option value="{{ $question->id }}">{{ $question->lib_question}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="lib_reponse">Reponse:</label>
                <input type="text" name="lib_reponse" class="form-control" placeholder="Entrer une reponse">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="is_correct">La réponse est-elle vrai ou fausse :</label>
                <div>
                    <label>
                        <input type="radio" name="is_correct" value="1" required> Vrai
                    </label>
                </div>
                <div>
                    <label>
                        <input type="radio" name="is_correct" value="0" required> Faux
                    </label>
                </div>
            </div>
        </div>
        

    </div>
    <button type="submit" class="btn btn-primary">Créer</button>
</form>
@endsection

    
      

