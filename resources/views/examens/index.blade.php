@extends('layouts.app')
  
 {{--@section('title', 'Emplois de temps')--}}
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">planification des examens</h1>
        <a href="{{ route('exams.create') }}" class="btn btn-success">Créer une planification</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead class="table-warning">
            <tr>
                <th>Date</th>
                <th>Filière</th>
                <th>Module</th>
                <th>Section</th>
                <th>Semestre</th>
                <th>Professeur</th>
                <th>Heure_début</th>  
                <th>Heure_fin</th>
                <th>Actions</th>  
            </tr>
        </thead>
        <tbody>
            
                @foreach($exam as $key => $rs)
                    <tr>
                       
                        <td class="align-middle text-dark">{{ $rs->date }}</td>
                        <td class="align-middle">{{ $rs->filiere}}</td>
                        <td class="align-middle">{{ $rs->matiere}}</td>
                        <td class="align-middle">{{ $rs->section }}</td>
                        <td class="align-middle">{{ $rs->semestre }}</td>  
                        <td class="align-middle">{{ $rs->Professeur }}</td>
                        <td class="align-middle text-success">{{ $rs->Heure_début }}</td> 
                        <td class="align-middle text-danger">{{ $rs->Heure_fin }}</td> 
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('exams.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('exams.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
           
        </tbody>
    </table>
    {{-- $exams->links() --}} 
@endsection