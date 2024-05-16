
@extends('layouts.ETD')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0" style="padding-left: 18rem">Examen</h1>
</div>

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif

<table class="table table-bordered">
    <thead class="table-primary">
        <tr>
            <th>Les questions</th>
            <th>Les reponse</th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
        @foreach($reponses as $reponse)
        <tr>
            <td>{{ $reponse->question->lib_question }}</td>

            <td>{{ $reponse->lib_reponse }}</td>

            <td> 
        <form action="{{ route('Q&R.store') }}" method="POST">  
            @csrf      
                 <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="correct">Choisir si cette reponse est vrai au fausse:</label>
                    <div>
                        <label>
                            <input type="radio" name="correct" value="1" required> Vrai
                        </label>
                    </div>
                    <div>
                        <label>
                            <input type="radio" name="correct" value="0" required> Faux
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Confirmer</button>
        </form>
        </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection









