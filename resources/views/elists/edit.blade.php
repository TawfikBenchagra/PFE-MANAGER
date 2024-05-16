@extends('layouts.app')
@section('contents')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier l'ensiegnant</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('elists.index') }}">Retour</a>
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
  
    <form action="{{ route('elists.update',$elist->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom:</strong>
                    <input type="text" name="nom" value="{{ $elist->nom }}" class="form-control" placeholder="Nom">
                    <strong>Prenom:</strong>
                    <input type="text" name="prenom" value="{{ $elist->prenom }}" class="form-control" placeholder="prenom">
                    <strong>Sexe:</strong>
                    <input type="text" name="sexe" value="{{ $elist->sexe }}" class="form-control" placeholder="Sexe">
                    <strong>Module:</strong>
                    <input type="text" name="module" value="{{ $elist->module }}" class="form-control" placeholder="Module">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="votre observation">{{ $elist->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </div>
   
    </form>
@endsection
