@extends('layouts.ENS')
@section('contents')

    <h1 class="mb-0">Créer un emploi</h1>
    <hr />
    <form action="{{ route('EnsEmplois.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Filière : </label>
                                        <select name="filiere" class=" col-xs-12 col-sm-12 col-md-12" required>
                                            <option value="SMI">SMI</option>
                                            <option value="SMA">SMA</option>
                                            <option value="SMP">SMP</option>
                                            <option value="SMC">SMC</option>
                                            <option value="DP">DP</option>
                                            <option value="SVI">SVI</option>
                                        </select>
                                        @error('filiere')
                                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                                        @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="">Semestre : </label>
                                        <select name="semestre" class=" col-xs-12 col-sm-12 col-md-12" required>
                                            <option value="S6">S6</option>
                                            <option value="S5">S5</option>
                                            <option value="S4">S4</option>
                                            <option value="S3">S3</option>
                                            <option value="S2">S2</option>
                                            <option value="S2">S1</option>
                                        </select>
                                        @error('semestre')
                                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                                        @enderror
                </div>
            </div>
        <!-- Rest of the form -->
  
    
    <!-- <form action="{{-- route('Emplois.store') --}}" method="POST" enctype="multipart/form-data"> -->
        {{-- @csrf --}} 
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="">Jour : </label>
                <select name="Jour" class=" col-xs-12 col-sm-12 col-md-12" required>
                    <option value="Lundi">Lundi</option>
                    <option value="Mardi">Mardi</option>
                    <option value="Mercredi">Mercredi</option>
                    <option value="Jeudi">Jeudi</option>
                    <option value="Vendredi">Vendredi</option>
                    <option value="Samedi">Samedi</option>
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>8:30 - 10:30</strong>
                <input type="text" name="Seance1" class="form-control" value="{{old('Seance1')}}" placeholder="Enter le nom de module">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>10:40 - 12:40</strong>
                <input type="text" name="Seance2" class="form-control" value="{{old('Seance2')}}" placeholder="Enter le nom de module">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>13:00 - 15:00</strong>
                <input type="text" name="Seance3" class="form-control" value="{{old('Seance3')}}" placeholder="Enter le nom de module">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>15:10 - 17:10</strong>
                <input type="text" name="Seance4" class="form-control" value="{{old('Seance4')}}" placeholder="Enter le nom de module">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <strong>17:20 - 19:20</strong>
                <input type="text" name="Seance5" class="form-control" value="{{old('Seance5')}}" placeholder="Enter le nom de module">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center" >
                <button type="submit" class="btn btn-primary" >Créer</button>
        </div>
    </div>
    </form>
@endsection

    
      

