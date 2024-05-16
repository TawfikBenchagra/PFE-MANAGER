@extends('layouts.app')
@section('contents')
    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Les ensiegnants</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('elists.create') }}"> Ajouter un nouvel ensiegnamt</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Sexe</th>
            <th>Module</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->nom }}</td>
            <td>{{ $value->prenom }}</td>
            <td>{{ $value->sexe }}</td>
            <td>{{ $value->module }}</td>
            <td>{{ \Str::limit($value->description, 100) }}</td>
            <td>
                <form action="{{ route('elists.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info " style="font-size: 12px;" href="{{ route('elists.show',$value->id) }}">Afficher</a>    
                    <a class="btn btn-primary" style="font-size: 12px;" href="{{ route('elists.edit',$value->id) }}">Modifier</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger" style="font-size: 12px;">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>  
    {!! $data->links() !!}      
@endsection
