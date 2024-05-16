@extends('layouts.app')
@section('contents')
    
    <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">

        @csrf
   <div style="padding-left: 15rem" style="font-size: 15rem">
        <input type="text" name="name" placeholder="TD/TP/Cour" style="margin-bottom: 1rem"  ><br>

        <input type="text" name="description" placeholder="Titre" style="margin-bottom: 1rem"><br>
    
        <input type="file" name="file" style="margin-bottom: 1rem"><br>

     
        <button type="submit" class="btn btn-primary" style="margin-bottom: 1rem">Soumettre</button>
    </div>
    </form>  

@endsection

