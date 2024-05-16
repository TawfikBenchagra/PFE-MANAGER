@extends('layouts.app')
  
 {{--@section('title', 'Emplois de temps')--}}
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0 text-dark">Emplois de temps</h1>
        <a href="{{ route('emplois.create') }}" class="btn btn-success">Créer un emploi</a>
    </div>
    <!-- ajouter la possibilite -->
    <form action="{{ route('emplois.index') }}" method="GET">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group text-dark">
                    <label for="filiere">Filière</label>
                    <select name="filiere" id="filiere" class="form-control">
                        <option value="">Toutes les filières</option>
                        @foreach($filieres as $filiere)
                            <option value="{{ $filiere }}">{{ $filiere }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group text-dark">
                    <label for="semestre">Semestre</label>
                    <select name="semestre" id="semestre" class="form-control">
                        <option value="">Tous les semestres</option>
                        @foreach($semestres as $semestre)
                            <option value="{{ $semestre }}">{{ $semestre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-sm">Filtrer</button> 
    </form>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    @if(request()->has('filiere') || request()->has('semestre'))
    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>Jour/Temps</th>
                <th>08:30 - 10:30</th>
                <th>10:40 - 12:40</th>
                <th>13:00 - 15:00</th>
                <th>15:10 - 17:10</th>
                <th>17:20 - 19:20</th>   
                <th>Actions</th>  
            </tr>
        </thead>
        <tbody>
            
                @foreach($timetable as $key => $rs)
                    <tr>
                       
                        <td class="align-middle">{{ $rs->Jour }}</td>
                        <td class="align-middle">{{ $rs->Seance1}}</td>
                        <td class="align-middle">{{ $rs->Seance2 }}</td>
                        <td class="align-middle">{{ $rs->Seance3 }}</td>  
                        <td class="align-middle">{{ $rs->Seance4 }}</td>
                        <td class="align-middle">{{ $rs->Seance5 }}</td> 
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('emplois.edit', $rs->id)}}" type="button" class="btn btn-warning">Modifier</a>
                                <form action="{{ route('emplois.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Supprimer</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
           
        </tbody>
    </table>
    @else
        <p>Aucune filière et aucun semestre sélectionné.</p>
    @endif
    {{-- $timetable->links() --}} 
@endsection