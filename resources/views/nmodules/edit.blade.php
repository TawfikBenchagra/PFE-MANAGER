@extends('nmodules.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editer l'étudiant</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('nmodules.index') }}">Retour</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Il y a eu des problèmes avec votre entrée.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('nmodules.update',$nmodule->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom:</strong>
                    <input type="text" name="nom" value="{{ $nmodule->nom }}" class="form-control" placeholder="Nom">
                    <strong>Prenom:</strong>
                    <input type="text" name="prenom" value="{{ $nmodule->prenom }}" class="form-control" placeholder="prenom">
                    <strong>Note:</strong>
                    <input type="text" name="note" value="{{ $nmodule->note }}" class="form-control" placeholder="Note">
                    <strong>Apogee:</strong>
                    <input type="text" name="apogee" value="{{ $nmodule->apogee }}" class="form-control" placeholder="Apogee">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Observation:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="votre observation">{{ $nmodule->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </div>
   
    </form>
@endsection
