@extends('layouts.ETD')
@section('contents')
  <div class="row">
    <h1 class="text-dark" style="margin-right: 10px"> Bienvenu Monsieur {{Auth::guard('etudiant')->user()->nom}} 
      {{Auth::guard('etudiant')->user()->prenom}}</h1>
  </div>
@endsection