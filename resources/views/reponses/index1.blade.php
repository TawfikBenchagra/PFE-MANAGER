<!-- resources/views/reponses/index.blade.php -->

@extends('layouts.ETD')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Solution</h1>
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
            <th>Correction</th>
        </tr>
    </thead>

    <tbody>
        @foreach($reponses as $reponse)
        <tr>
            <td>{{ $reponse->question->lib_question }}</td>

            <td>{{ $reponse->lib_reponse }}</td>

            <td> 
                <form action="{{ route('reponses.update', $reponse->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                                
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                           
                            <div>
                                <label>
                                    <input type="radio" name="is_correct" value="1" {{ $reponse->is_correct == 1 ? 'checked' : '' }}> Vrai
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="is_correct" value="0" {{ $reponse->is_correct == 0 ? 'checked' : '' }}> Faux
                                </label>
                            </div>
                        </div>
                    </div>
                                
                  
                </form>
                
                
                
        </td>
        </tr>
        @endforeach
    </tbody>

</table>
@endsection









