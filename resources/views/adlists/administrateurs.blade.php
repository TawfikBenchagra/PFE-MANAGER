@extends('layouts.app')
@section('contents')

    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-dark"><strong>Liste des administrateurs</strong></h2>
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
            <th >Nom</th>
            <th>Prenom</th>
            <th>CIN</th>
            <th>Email</th>
            <th>Action</th>
            
        </tr>
        @foreach ($administrateurs as $adm)
        <tr>
            <td>{{ $adm->nom }}</td>
            <td>{{ $adm->prenom }}</td>
            <td>{{ $adm->cin }}</td>
            <td>{{ $adm->email }}</td>
            <td ><a onclick="return confirm('Êtes-vous sûr de vouloir supprimer?')" href="{{ url('Adm/delete/'.$adm->id) }}" class="btn btn-danger">Supprimer</a></td>
        </tr>
        @endforeach
    </table>  
        
@endsection





  

