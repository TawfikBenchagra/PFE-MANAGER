@extends('layouts.ETD')
@section('contents')

<div class="row" style="margin-top: 1rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-dark"><strong>Bibliothèque</strong></h2>
        </div>
    </div>
</div>

<form action="{{ route('biblioETD') }}" method="get">
    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6">
            <div class="form-group text-dark">
                <label for="module">Modules:</label>
                <select name="module" id="module" class="form-control">
                    <option value="">Tous les modules</option>
                    @foreach($modules as $module)
                        <option value="{{ $module }}" {{ request('module') == $module ? 'selected' : '' }}>
                            {{ $module }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6 d-flex align-items-center ">
            <div class="form-group mb-0" style="margin-top: 1.0rem;">
                <button class="btn btn-primary">Filtrer</button>
            </div>
        </div>
    </div>
</form>

@if (request()->has('module'))
    @if(request('module') == '')
        <br>
        <div class="alert alert-danger">
            <h5>Sélectionner un module !</h5>
        </div>
    @elseif($biblios->count() > 0)
        <table class="table table-bordered text-dark">
            <thead class="table-warning">
                <tr class="bg-warning text-center">
                    <th>Type</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($biblios as $biblio)
                    <tr class="text-center">
                        <td class="text-danger"><strong>{{ $biblio->Type }}</strong></td>
                        <td class="text-dark">{{ $biblio->Titre }}</td>
                        <td class="text-success">{{ $biblio->Contenu }}</td>
                        <td><a href="{{asset('storage/'. $biblio->Contenu)}}" type="button" class="btn btn-info">Voir</a>  </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $biblios->links() }}
    @else
        <div class="alert alert-danger" role="alert" style="margin-top: 20px">
            <h4>Aucun fichier à afficher</h4>
        </div>
    @endif
@else 
<div class="alert alert-danger">
    <h5>Sélectionner un module !</h5>
</div>
@endif

@endsection
