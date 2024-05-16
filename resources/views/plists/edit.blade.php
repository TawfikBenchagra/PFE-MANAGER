@extends('layouts.app')
@section('contents')
   
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Modifier le parent</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('plists.index') }}">Retour</a>
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
  
    <form action="{{ route('plists.update',$plist->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nom:</strong>
                    <input type="text" name="nom" value="{{ $plist  ->nom }}" class="form-control" placeholder="Nom">
                    <strong>Prenom:</strong>
                    <input type="text" name="prenom" value="{{ $plist->prenom }}" class="form-control" placeholder="prenom">
                    <strong>Apogee:</strong>
                    <input type="text" name="apogee" value="{{ $plist->apogee }}" class="form-control" placeholder="Apogee">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>description:</strong>
                    <textarea class="form-control" style="height:150px" name="description" placeholder="votre description">{{ $plist->description }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Soumettre</button>
            </div>
        </div>
   
    </form>
@endsection
