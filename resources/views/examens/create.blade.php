@extends('layouts.app')
@section('contents')

    <h1 class="mb-0">Créer une planification</h1>
    <hr />
    <form action="{{ route('exams.store') }}" method="POST">
        @csrf
    <!-- <form action="{{-- route('Emplois.store') --}}" method="POST" enctype="multipart/form-data"> -->
        {{-- @csrf --}} 
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>date</strong>
                <input type="date" name="date" class="form-control" value="{{old('date')}}" placeholder="Enter une date" >
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Filière</strong>
                    <select name="filiere" class=" col-xs-12 col-sm-12 col-md-12" required>
                        <option value="SMI">SMI</option>
                        <option value="SMA">SMA</option>
                        <option value="SMP">SMP</option>
                        <option value="SMC">SMC</option>
                        <option value="DP">DP</option>
                        <option value="SVI">SVI</option>
                    </select>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Maodule</strong>
                <input type="text" name="matiere" class="form-control" value="{{old('matiere')}}" placeholder="Enter un module">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Section</strong>
                <input type="text" name="section" class="form-control" value="{{old('section')}}" placeholder="Enter une section s'il existe">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Semestre</strong>
                    <select name="semestre" class=" col-xs-12 col-sm-12 col-md-12" required>
                        <option value="S6">S6</option>
                        <option value="S5">S5</option>
                        <option value="S4">S4</option>
                        <option value="S3">S3</option>
                        <option value="S2">S2</option>
                        <option value="S1">S1</option>
                    </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Professeur</strong>
                <input type="text" name="Professeur" class="form-control" value="{{old('Professeur')}}" placeholder="Enter le nom de professeur">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Heure_début</strong>
                <input type="time" name="Heure_début" class="form-control" value="{{old('Heure_début')}}" placeholder="Enter l'heure de début">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Heure_fin</strong>
                <input type="time" name="Heure_fin" class="form-control" value="{{old('Heure_fin')}}" placeholder="Enter l'heure de fin">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Créer</button>
        </div>
    </div>
    </form>
@endsection

    
      

