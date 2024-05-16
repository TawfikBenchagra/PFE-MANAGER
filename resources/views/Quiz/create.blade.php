@extends('layouts.ENS')

@section('contents')
    
        <div class="d-flex align-items-center justify-content-between">
            <h1>Créer une question</h1>
            <a href="{{ route('quiz.index') }}" class="btn btn-success">Liste des questions</a>
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
        <form action="{{ route('quiz.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Filière : </label>
                        <select name="filiere" class="col-xs-12 col-sm-12 col-md-12" required>
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
                        <select name="semestre" class="col-xs-12 col-sm-12 col-md-12" required>
                            <option value="S6">S6</option>
                            <option value="S5">S5</option>
                            <option value="S4">S4</option>
                            <option value="S3">S3</option>
                            <option value="S2">S2</option>
                            <option value="S1">S1</option>
                        </select>
                        @error('semestre')
                            <div class="alert alert-danger" role="alert">{{$message}}</div>
                        @enderror
                    </div>
                </div>
            </div> 
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('quiz.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="lib_question">Question</label>
                    <input type="text" name="lib_question" class="form-control" value="{{ old('lib_question') }}" required>
                    @error('lib_question')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Réponse</label>
                    @for ($i = 0; $i < $answerCount; $i++)
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="correct_answer" value="{{ $i }}" @if ($i == old('correct_answer')) checked @endif required>
                            <input type="text" name="reponses[]" class="form-control" placeholder="Réponse {{ $i + 1 }}" value="{{ old('reponses.'.$i) }}" required><br>
                            @error('reponses.'.$i)
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    @endfor
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Module :</strong>
                        <input type="text" name="module" class="form-control" value="{{ old('module') }}" placeholder="Enter le nom de module" autocomplete="off">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Créer Question</button>
            </form>
        </form>
    
@endsection
