@extends('layouts.app')
@section('contents')
    <h1 class="mb-0">Modifier une planification</h1>
    <hr />
    <form action="{{ route('exams.update',$exam->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>date</strong>
                    <input type="date" name="date" class="form-control" value="{{ $exam->Jour }}" placeholder="Enter une date">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Filière</strong>
                    <input type="text" name="filiere" class="form-control" value="{{ $exam->filiere }}"  placeholder="Enter une filière">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Module</strong>
                    <input type="text" name="filiere" class="form-control" value="{{$exam->matiere }}" placeholder="Enter un module ">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Section</strong>
                    <input type="text" name="section" class="form-control" value="{{ $exam->section }}" placeholder="Enter une section s'il existe">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Semestre</strong>
                    <input type="text" name="semestre" class="form-control" value="{{ $exam->Semestre }}" placeholder="Enter une semestre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Professeur</strong>
                    <input type="text" name="Professeur" class="form-control" value="{{ $exam->Professeur }}"  placeholder="Enter le nom de professeur">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Heure_début</strong>
                    <input type="time" name="Heure_début" class="form-control" value="{{ $exam->Heure_début }}"  placeholder="Enter l'heure de début">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Heure_fin</strong>
                    <input type="time" name="Heure_fin" class="form-control" value="{{ $exam->Heure_fin }}"  placeholder="Enter l'heure de fin">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </div>
        </div>
   
    </form>
@endsection