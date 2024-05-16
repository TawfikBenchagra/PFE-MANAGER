@extends('layouts.app')
@section('contents')

<style>
    table{
        width: 70%;
        text-align: center;
        margin-left: 5rem;
    }
</style>
<table border="1px">   

    <tr>
        <th>Nom</th>
        <th>Titre</th>
        <th>Vue</th>
       
    </tr>
    @foreach($data as $data)
    <tr>
        <td>{{$data->name}}</td>
        <td>{{$data->description}}</td>
       <td><a class="btn btn-primary" style="font-size: 12px;" href="{{url('/view',$data->id)}}">Vue</a> </td> 
    </tr>

    @endforeach

</table>  
@endsection




