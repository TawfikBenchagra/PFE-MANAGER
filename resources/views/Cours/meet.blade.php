@extends('layouts.ENS')
@section('contents')
    <div class="d-flex align-items-center justify-content-between ms-3 me-3">
        <h1 class="mb-0" style="margin-left:10px">PFE</h1>
        <a href="https://meet.google.com/" class="btn btn-success " style="margin-right: 10px" target="_blank">Démarer une réunion avec google meet</a>
    </div>
    <hr>

    <form action="{{route('recupererLien')}}" method="post">
        @csrf
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            <div class="form-group">
                <strong>Entrer le lien de la réunion : </strong>
                <input type="text" name="lien" class="form-control mt-1" value="{{old('lien')}}" placeholder="Enter le lien de la réunion " required>
                <button type="submit" class="btn btn-primary mt-3">Publier</button>
            </div>
        </div>
    </form>

    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 mt-5">
        @if (isset($lien))
            <h3>Lien pour accéder à la réunion :</h3>
            <ul>
                <li><a href="{{ $lien }}">Cliquer ici pour accéder à la réunion</a></li>
            </ul>
        @else
            <div class="alert alert-danger">
                <h3>Aucune réunion pour le moment</h3>
            </div>
        @endif
    </div>
@endsection