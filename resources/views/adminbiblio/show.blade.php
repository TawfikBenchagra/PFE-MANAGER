@extends('layouts.app')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Voir le fichier</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('bibliotheque.index') }}"> Retour</a>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cours:</strong>
                {{ $biblio->Cours }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Travaux Dirigés :</strong>
                {{ $biblio->TD }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Travaux Pratiques :</strong>
                {{ $biblio->TP }}
            </div>
        </div>
    </div>
@endsection
