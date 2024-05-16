@extends('layouts.app')
@section('contents')
    <div class="d-flex align-items-center justify-content-between ms-3 me-3">
        <h1 class="mb-0">PFE</h1>
        <a href="{{ route('coursAdm.createCours') }}" class="btn btn-success">Ajouter un PFE</a>
    </div>
    <hr>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <form action="{{route('coursAdm.indexCours')}}" method="get">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <strong>Filière : </strong>
                    <select name="filiere" id="filiere" class="form-control">
                        <option value="">Toute les filières</option>
                        @foreach ($filieres as $item)
                            <option value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="form-group">
                    <strong>Semestre : </strong>
                    <select name="semestre" id="semestre" class="form-control">
                        <option value="">Toute les semestres</option>
                        @foreach ($semestres as $itm)
                            <option value="{{ $itm }}">{{ $itm }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            
        </div>
        <button type="submit" class="btn btn-primary">Filtrer</button><br>

    </form>

    @if (request()->has('filiere') || request()->has('semestre'))
        @if($allcours->count() > 0)
        <div class="row">
            @foreach ($allcours as $item)
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4">
                <div class="card mt-3 display-inline" style="width: 16rem; height: 23rem; margin-left: 15px;">
                    <img src="{{asset('images')}}/cours_logo.jpg" class="card-img-top w-100" alt="">
                    <div class="card-body">
                    <h5 class="card-title text-center">{{ $item->nom }}</h5>
                    <div class="row">
                        <form action="{{route('coursAdm.destroyCours', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="margin-left: 70px">Supprimer</button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else 
            <div class="alert alert-danger" role="alert" style="margin-top: 20px">
                <h4>Aucun PFE à afficher</h4>
            </div>
        @endif
    @else
    <br>
        <div class="alert alert-danger">
            <h5>Séléctionner une filière et un semestre !</h5>
        </div>
    @endif
@endsection