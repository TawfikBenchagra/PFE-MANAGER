@extends('layouts.ETD')
@section('contents')
    <div class="d-flex align-items-center justify-content-between ms-3 me-3">
        <h1 class="mb-0">Cours</h1>
    </div>
    <hr>

    @if($cours->count() > 0)
        <div class="row">
            @foreach ($cours as $item)
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-4">
                <div class="card mt-3 display-inline" style="width: 16rem; height: 23rem; margin-left: 15px;">
                    <img src="{{asset('images')}}/cours_logo.jpg" class="card-img-top w-100" alt="">
                    <div class="card-body">
                    <h5 class="card-title text-center">{{ $item->nom }}</h5>
                    <div class="row">
                        <a href="{{route('meetingEtd')}}" class="btn btn-primary mx-auto" style="">Voir plus</a>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    @else 
        <div class="alert alert-danger" role="alert" style="margin-top: 20px">
            <h4>Aucun cours à afficher</h4>
        </div>
    @endif

@endsection