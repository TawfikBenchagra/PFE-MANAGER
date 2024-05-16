@extends('layouts.ENS')
  
@section('contents')
        <h1>Question Details</h1>
        <p><strong>ID:</strong> {{ $question->id }}</p>
        <p><strong>Question:</strong> {{ $question->lib_question }}</p>
        <h2>Reponses</h2>
        <a href="{{ route('reponses.create', $question->id) }}" class="btn btn-primary">Create Reponse</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Reponse</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($question->reponses as $reponse)
                    <tr>
                        <td>{{ $reponse->id }}</td>
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
