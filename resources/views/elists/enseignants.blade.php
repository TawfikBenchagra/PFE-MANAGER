@extends('layouts.app')
@section('contents')

    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-dark"><strong>Liste des enseignants</strong> </h2>
            </div>
            {{-- @include('layouts.message') --}}
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered text-dark">
        <tr class="bg-warning">
            <th>Nombre</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Date_naissance</th>
            <th>Email</th>
            <th>Sexe</th>
            <th>Action</th>
            
        </tr>
        @foreach ($enseignants as $enseignants)
        <tr>
            <td>{{ $enseignants->id }}</td>
            <td>{{ $enseignants->nom }}</td>
            <td>{{ $enseignants->prenom }}</td>
            <td>{{ $enseignants->date_naissance }}</td>
            <td>{{ $enseignants->email }}</td>
            <td>{{ $enseignants->sexe }}</td>
            <td><a onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')" href="{{ url('Ens/delete/'.$enseignants->id) }}" class="btn btn-danger">Supprimer</a></td>
           
            
        </tr>
        @endforeach
    </table>  
        
@endsection





  

