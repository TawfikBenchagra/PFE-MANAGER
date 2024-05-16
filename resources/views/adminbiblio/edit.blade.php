@extends('layouts.app')
  
@section('contents')

<div class="row">
        <div class="col-lg-10 margin-tb">
            <div class="pull-left">
                <h2>Modifier un fichier</h2>
            </div>
        </div>
        <div class="col-lg-2 margin-tb">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bibliotheque.index') }}"> Retour</a>
            </div>
        </div>
    
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
    <form action="{{ route('bibliotheque.update',$biblio->id) }}" method="POST">
        @csrf
        @method('PUT')  
         <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cours</strong>
                    <input type="file" name="Cours" class="form-control" value="{{ $biblio->Cours }}" placeholder="Ajouter un fichier">
                </div>
            </div>  

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Travaux Dirigés</strong>
                    <input type="file" name="TD" class="form-control" value="{{ $biblio->TD }}"  placeholder="Ajouter un fichier">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Travaux Pratiques</strong>
                    <input type="file" name="TP" class="form-control" value="{{ $biblio->TP }}" placeholder="Ajouter un fichier">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </div>
        </div>
   
    </form>
@endsection