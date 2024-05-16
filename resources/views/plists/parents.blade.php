@extends('layouts.app')
@section('contents')

    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-dark"><strong>Liste des parents </strong></h2>
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
            
            <th>Nom</th>
            <th>Prenom</th>
            <th>Apogee_etd</th>
            <th>cin</th>
            <th>Email</th>
            <th>Action</th>
         
            
        </tr>
        @foreach ($parents as $parents)
        <tr>
        
            <td>{{ $parents->nom }}</td>
            <td>{{ $parents->prenom }}</td>
            <td>{{ $parents->apogee_etd }}</td>
            <td>{{ $parents->cin }}</td>
            <td>{{ $parents->email }}</td>
            <td><a onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')" href="{{ url('Par/delete/'.$parents->id) }}" class="btn btn-danger">Supprimer</a></td>
           
            
            
            
        </tr>
        @endforeach
    </table>  
        
@endsection





  

