@extends('layouts.ETD')
@section('contents')

    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-dark"><strong>Planification des examens</strong> </h2>
            </div> 
        </div>
    </div>
   

    <table class="table table-bordered text-dark">
        <tr class="table-warning text-center">
                <th>Date</th>
                <th>Filière</th>
                <th>Module</th>
                <th>Section</th>
                <th>Semestre</th>
                <th>Professeur</th>
                <th>Heure_début</th>  
                <th>Heure_fin</th>
        </tr>

       
                @foreach($exams as $exam)
                        <tr class="text-center">
                            <td class="table-warning "><strong>{{ $exam->date }}</strong></td>
                            <td><strong>{{ $exam->filiere }}</strong></td>
                            <td><strong>{{ $exam->matiere }}</strong></td>
                            <td><strong>{{ $exam->section }}</strong></td>
                            <td><strong>{{ $exam->semestre }}</strong></td>
                            <td><strong>{{ $exam->Professeur }}</strong></td>
                            <td class="text-success"><strong>{{ $exam->Heure_début }}</strong></td>
                            <td class="text-danger"><strong>{{ $exam->Heure_fin }}</strong></td>
                        </tr>
                @endforeach
        </table>  


@endsection





  
