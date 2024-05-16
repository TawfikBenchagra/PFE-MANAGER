@extends('layouts.PAR')
@section('contents')


    <div class="d-flex align-items-center justify-content-between ms-3 me-3 text-dark">
        <h1 class="mb-0">Emploi de votre etudiant {{$etudiant->nom }} {{ $etudiant->prenom}}</h1>
    </div>

    <hr>

    <table class="table table-hover table-bordered">
        <thead class="table-warning">
            <tr class="text-center text-dark">
                <th>Jour/Temps</th>
                <th>08:30 - 10:30</th>
                <th>10:40 - 12:40</th>
                <th>13:00 - 15:00</th>
                <th>15:10 - 17:10</th>
                <th>17:20 - 19:20</th>     
            </tr>
        </thead>
        <tbody>
                @foreach ($emploi as $emp)
                    <tr class="text-center text-dark">
                        <td class="align-middle table-warning">{{ $emp->Jour }}</td>
                        <td class="align-middle"><strong>{{ $emp->Seance1 }}</strong></td>
                        <td class="align-middle"><strong>{{ $emp->Seance2 }}</strong></td>
                        <td class="align-middle"><strong>{{ $emp->Seance3 }}</strong></td>  
                        <td class="align-middle"><strong>{{ $emp->Seance4 }}</strong></td>
                        <td class="align-middle"><strong>{{ $emp->Seance5 }}</strong></td>
                    </tr>
                @endforeach
        </tbody>
    </table>

@endsection