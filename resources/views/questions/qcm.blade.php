@extends('layouts.ETD')

@section('contents')
    <div class="container">
        <form action="{{ route('qcm.check') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="module">Selectionner un module:</label>
                <select class="form-control" name="module" id="module">
                    <option value="">Tous les modules</option>
                    @if ($modules)
                        @foreach ($modules as $module)
                            <option value="{{ $module }}">{{ $module }}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>

        <hr>
        

        @if ($questions->isEmpty())
            <div class="alert alert-danger">
                <p>Aucun questions à afficher</p>
            </div>
        @else
        <div class="alert alert-info">
            <p>Votre note est calculée à partir de vos premières réponses, autrement dit vous devez répondre une seule fois, les autres tentatives de répondre ne seront pas prises en considération !</p>
        </div>
            <form action="{{ route('qcm.index') }}" method="POST">
                @csrf
                @foreach ($questions as $question)
                    <h3>{{ $question->lib_question }}</h3>
                    <ul>
                        @if ($question->reponses)
                            @foreach ($question->reponses as $response)
                                
                                    <label>
                                        <input type="radio" name="reponses[{{ $question->id }}]" value="{{ $response->id }}">
                                            {{ $response->lib_reponse }}
                                    </label>
                                <br>
                            @endforeach
                        @endif
                    </ul>
                @endforeach

                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
        @endif

        @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
        @endif

    </div>
@endsection
