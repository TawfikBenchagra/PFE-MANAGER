@extends('layouts.app')
  
 {{--@section('title', 'Emplois de temps')--}}
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Bibliothèque</h1>
        <a href="{{ route('bibliotheque.create') }}" class="btn btn-success">Ajouter un fichier</a>
    </div>
    <!-- ajouter la possibilite -->
    <form action="{{ route('bibliotheque.index') }}" method="GET">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="filiere">Filière</label>
                    <select name="filiere" id="filiere" class="form-control">
                        <option value="">Toutes les filières</option>
                        @foreach($filieres as $filiere)
                            <option value="{{ $filiere }}">{{ $filiere }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="semestre">Semestre</label>
                    <select name="semestre" id="semestre" class="form-control">
                        <option value="">Tous les semestres</option>
                        @foreach($semestres as $semestre)
                            <option value="{{ $semestre }}">{{ $semestre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="semestre">Module</label>
                    <select name="module" id="module" class="form-control">
                        <option value="">Tous les modules</option>
                        @foreach($modules as $module)
                            <option value="{{ $module }}">{{ $module }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Filtrer</button>
    </form>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    @if(request()->has('filiere') || request()->has('semestre') || request()->has('module') )
    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>Cours</th>
                <th>Travaux Dirigés</th>
                <th>Travaux Pratique</th>  
                <th>Actions</th>  
            </tr>
        </thead>
        <tbody>
            
                @foreach($biblio as $key => $rs)
                    <tr>
                       
                        <td class="align-middle"><a href="#">{{ $rs->Cours }}</a></td>
                        <td class="align-middle"><a href="#">{{ $rs->TD}}</a></td>
                        <td class="align-middle"><a href="#">{{ $rs->TP }}</a></td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('bibliotheque.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <a href="{{ route('bibliotheque.show', $rs->id)}}" type="button" class="btn btn-info">Show</a>
                                <form action="{{ route('bibliotheque.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
           
        </tbody>
    </table>
    @else
        <h3>Aucune filière, aucun semestre et aucun module sélectionné.</h3>
    @endif
    {{-- $timetable->links() --}} 
@endsection