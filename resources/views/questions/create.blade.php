@extends('layouts.ENS')
@section('contents')
    
    <div class="d-flex align-items-center justify-content-between">
        <h1>Créer une question</h1>
        <a href="{{ route('questions.index') }}" class="btn btn-success">Liste des questions</a>
    </div>

        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif
        
         @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('questions.store') }}" method="POST">
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
            </div>  
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                   <strong for="lib_question">Question:</strong>
                    <input type="text" name="lib_question" class="form-control" value="{{old('lib_question')}}" placeholder="Entrer un question " autocomplete="off">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <div class="form-group">
                        <strong>Module :</strong>
                        <input type="text" name="module" class="form-control" value="{{old('module')}}" placeholder="Enter le nom de module" autocomplete="off">
                    </div>
                </div>
            </div>
                <button type="submit" class="btn btn-primary">Create</button>
        </form>
@endsection

    
      

