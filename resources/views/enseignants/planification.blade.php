@extends('layouts.ENS')
@section('contents')

    <div class="row" style="margin-top: 1rem;">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 class="text-dark"><strong>Planification des examens</strong> </h2>
            </div> 
        </div>
    </div>
   

    <table class="table table-bordered text-dark">
        <thead class="table-warning">
            <tr class=" text-center">
                <th>Date</th>
                <th>Filière</th>
                <th>Module</th>
                <th>Section</th>
                <th>Semestre</th>
                <th>Professeur</th>
                <th>Heure_début</th>  
                <th>Heure_fin</th>
            </tr>
        </thead>

            <tbody>   
                @foreach($exams as $exam)
                        <tr class="text-center">
                            <td class="table-warning "><strong>{{ $exam->date }}</strong></td>
                            <td><strong>{{ $exam->filiere }}</strong></td>
                            <td><strong>{{ $exam->matiere }}</strong></td>
                            <td><strong>{{ $exam->section }}</strong></td>
                            <td><strong>{{ $exam->semestre }}</strong></td>
                            <td><strong>{{ $exam->Professeur }}</strong></td>
                            <td class="text-success">{{ $exam->Heure_début }}</td>
                            <td class="text-danger">{{ $exam->Heure_fin }}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>  


@endsection





  

