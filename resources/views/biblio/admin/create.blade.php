@extends('layouts.app')
@section('contents')

    <h1 class="mb-0">Ajouter un fichier</h1>
    <hr />
    <form action="{{ route('bibliotheque.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Filière : </label>
                        <select name="filiere" class="col-md-4" required>
                            <option value="SMI">SMI</option>
                            <option value="SMA">SMA</option>
                            <option value="SMP">SMP</option>
                            <option value="SMC">SMC</option>
                            <option value="DP">DP</option>
                            <option value="SEG">SVI</option>
                        </select>
                        @error('filiere')
                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Semestre : </label>
                        <select name="semestre" class=" col-md-4" required>
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

            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Type : </label>
                    <select name="Type" class=" col-md-4" required>
                        <option value="Cours">Cours</option>
                        <option value="TD">Travaux dirigés</option>
                        <option value="TP">Travaux pratiques</option>
                    </select>
                </div>
            </div>

        </div>

    <div class="row">
    
        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label for="Contenu"> Contenu de fichier </label>
                <input type="file" name="Contenu" class="form-control" value="{{old('Contenu')}}" placeholder=" Ajouter un fichier" >
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-6">
            <div class="form-group">
                <label>Module :</label>
                <input type="text" name="module" class="form-control" value="{{old('module')}}" placeholder="Enter le nom de module">
            </div>
        </div>
        
    </div>

    <br>    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 text-center ">
                <button type="submit" class="btn btn-primary">Créer</button>
        </div>
    </div>
</form>
@endsection

    
      

