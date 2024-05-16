@extends('layouts.ETD')
@section('contents')

<div class="row" style="margin-top: 1rem;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2 class="text-dark"><strong>Emploi de temps</strong></h2>
        </div>
    </div>
</div>

@if($emplois->count() > 0)
    <table class="table table-bordered text-dark">
        <tr class="table-warning text-center">
            <th>Jour/Temps</th>
            <th>08:30 - 10:30</th>
            <th>10:40 - 12:40</th>
            <th>13:00 - 15:00</th>
            <th>15:10 - 17:10</th>
            <th>17:20 - 19:20</th>
        </tr>

        @foreach($emplois as $emploi)
            <tr class="text-center">
                <td class="table-warning "><strong>{{ $emploi->Jour }}</strong></td>
                <td><strong>{{ $emploi->Seance1 }}</strong></td>
                <td><strong>{{ $emploi->Seance2 }}</strong></td>
                <td><strong>{{ $emploi->Seance3 }}</strong></td>
                <td><strong>{{ $emploi->Seance4 }}</strong></td>
                <td><strong>{{ $emploi->Seance5 }}</strong></td>
            </tr>
        @endforeach

    </table>
@else
    <div class="alert alert-danger" role="alert" style="margin-top: 20px">
        <h4>Aucun emplois à afficher</h4>
    </div>
@endif

@endsection
