@extends('layouts.ENS')
  
@section('title', 'Modifier une seance')
  
@section('contents')
    <h1 class="mb-0">Modifier une seance</h1>
    <hr />
    <form action="{{ route('EnsEmplois.update',$timetable->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jour</strong>
                    <input type="text" name="Jour" class="form-control" value="{{ $timetable->Jour }}" placeholder="Enter le nom de module">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>8:30 - 10:30</strong>
                    <input type="text" name="Seance1" class="form-control" value="{{ $timetable->Seance1 }}"  placeholder="Enter le nom de module">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>10:40 - 12:40</strong>
                    <input type="text" name="Seance2" class="form-control" value="{{ $timetable->Seance2 }}" placeholder="Enter le nom de module">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>13:00 - 15:00</strong>
                    <input type="text" name="Seance3" class="form-control" value="{{ $timetable->Seance3 }}" placeholder="Enter le nom de module">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>15:10 - 17:10</strong>
                    <input type="text" name="Seance4" class="form-control" value="{{ $timetable->Seance4 }}"  placeholder="Enter le nom de module">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>17:20 - 19:20</strong>
                    <input type="text" name="Seance5" class="form-control" value="{{ $timetable->Seance5 }}"  placeholder="Enter le nom de module">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </div>
        </div>
   
    </form>
@endsection