<!-- resources/views/reponses/index.blade.php -->

@extends('layouts.ETD')

@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">La note</h1>
</div>

@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
    </div>
@endif

<table class="table table-bordered" >
    <thead class="table-primary">
        <tr>
            
        </tr>
    </thead>

    <tbody>
       
        <tr>
            <td>Reponse prof</td>
            @foreach($reponses as $reponse)
            <td>{{ $reponse->is_correct}}</td>
            @endforeach
        </tr>

        <tr>
            <td>Reponse etudiant</td>
            @foreach($qr as $reponse)
            <td>{{ $reponse->correct}}</td>
            @endforeach
        </tr>

        <tr>
            <td>Resulta</td>
            @php
            $sum = 0;
            @endphp

            @foreach($reponses as $index => $profReponse)
                <td>
                    @if(isset($qr[$index]) && $qr[$index]->correct == $profReponse->is_correct)

                    @php
                        $sum += 1;
                    @endphp

                        1
                    @else
                        0
                    @endif
                </td>
            @endforeach
        </tr>

        <tr>
            <td>Note</td>
            <td colspan="{{ count($reponses) }}">{{ $sum }}</td>
        </tr>
      
    </tbody>

</table>

@endsection










