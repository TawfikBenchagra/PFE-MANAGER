@extends('layouts.app')

@section('contents')
 
   <div class="row" style="margin-top: 1rem;">
       
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-dark"><strong>Liste des étudiants</strong></h2>
            </div>
            {{-- @include('layouts.message') --}}
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

   
   
    <table class="table table-bordered text-dark" >
        <tr class="bg-warning">
            
            <th>Nom</th>
            <th>Prenom</th>
            <th>Apogee</th>
            <th>Date_naissance</th>
            <th>Email</th>
            <th>sexe</th>
            <th>Filiere</th>
            <th>Action</th>
            
        </tr>
        @foreach ($etudiants as $etudiant)
        <tr>
            
            <td>{{ $etudiant->nom }}</td>
            <td>{{ $etudiant->prenom }}</td>
            <td>{{ $etudiant->apogee }}</td>
            <td>{{ $etudiant->date_naissance }}</td>
            <td>{{ $etudiant->email }}</td>
            <td>{{ $etudiant->sexe }}</td>
            <td>{{ $etudiant->filiere }}</td>
            <td><a onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')" href="{{ url('Etd/delete/'.$etudiant->id) }}" class="btn btn-danger" style="font-size: 70%">Supprimer</a></td>
            
            
            
        </tr>
        @endforeach
    </table>  
        
@endsection





  

