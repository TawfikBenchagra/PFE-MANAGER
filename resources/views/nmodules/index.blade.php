@extends('nmodules.layout')
 
@section('content')
    <div class="row" style="margin-top: 5rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Liste des étudiants </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('nmodules.create') }}"> Créer un nouvel étudiant</a>
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
            <th>Note</th>
            <th>Apogee</th>
            <th>Observation</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $value->nom }}</td>
            <td>{{ $value->prenom }}</td>
            <td>{{ $value->note }}</td>
            <td>{{ $value->apogee }}</td>
            <td>{{ \Str::limit($value->description, 100) }}</td>
            <td>
                <form action="{{ route('nmodules.destroy',$value->id) }}" method="POST">   
                    <a class="btn btn-info " style="font-size: 12px;" href="{{ route('nmodules.show',$value->id) }}">Afficher</a>    
                    <a class="btn btn-primary" style="font-size: 12px;" href="{{ route('nmodules.edit',$value->id) }}">Modifier</a>   
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
