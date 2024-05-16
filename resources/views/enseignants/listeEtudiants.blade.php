@extends('layouts.ENS')

@section('contents')
   <div class="row" style="margin-top: 1rem;">
       
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-dark"><strong>Liste des étudiants</strong></h2>
            </div>
            {{-- @include('layouts.message') --}}
        </div>
    </div>
        <!-- ajouter la possibilite -->
        <form action="{{ route('Elist:Etdlist_pour_Ens') }}" method="GET">
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

    @if(request()->has('filiere') || request()->has('semestre'))
        @if($liste->count() > 0)
                <table class="table table-bordered text-dark" >
                    <tr class="bg-warning">

                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Apogee</th>
                        <th>Date_naissance</th>
                        <th>Email</th>
                        <th>sexe</th>
                        <th>Filiere</th>
                        <th>Semestre</th>

                    </tr>
                    @foreach ($liste as $etudiant)
                    <tr>

                        <td>{{ $etudiant->nom }}</td>
                        <td>{{ $etudiant->prenom }}</td>
                        <td>{{ $etudiant->apogee }}</td>
                        <td>{{ $etudiant->date_naissance }}</td>
                        <td>{{ $etudiant->email }}</td>
                        <td>{{ $etudiant->sexe }}</td>
                        <td>{{ $etudiant->filiere }}</td>
                        <td>{{ $etudiant->semestre }}</td>

                    </tr>
                    @endforeach
                </table>
        @else 
            <div class="alert alert-danger" role="alert" style="margin-top: 20px">
                <h4>Aucun étudiants à afficher</h4>
            </div>
        @endif 
    @else
        <div class="alert alert-danger">
        <h5>Séléctionner une filière et un semestre !</h5>
        </div> 
    @endif   
@endsection





  

