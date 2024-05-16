@extends('layouts.ENS')
  
@section('contents')
   <!--     <h1 class="text-dark">Question Details</h1>-->
       
        @if (isset($question))
            <h3 class="text-dark text-center"><strong >Question:</strong> {{ $question->lib_question }}</h3>
        @else
            <p>Aucune question !!</p>
        @endif
        <div class="d-flex align-items-center justify-content-between">
            <h2 class="text-dark">Responses</h2>
            <a href="{{ route('reponses.create') }}" class="btn btn-primary">Create Response</a>
        </div>
        
        <table class="table table-bordered">
            <thead>
                <tr>
                    
                    <th>Reponse</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reponses as $reponse)
                    <tr>
                        
                        <td>{{ $reponse->lib_reponse }}</td>
                        <td>
                            <a href="{{ route('reponses.edit', $reponse->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('reponses.destroy', $reponse->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
@endsection
