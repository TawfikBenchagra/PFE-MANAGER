@extends('layouts.app')
@section('contents')

  
<style>
    table {
  width: 50%;
  height: 40%;
  padding-top:5rem; 
  margin-left: 5rem;
  font-size: 1.5rem;
}
</style>

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 > Parent</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('plists.index') }}"> Retour</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table  style="text-align=center;" class="pull-center" >
                    <tr>
                        <td><strong>Nom    :</strong></td>
                        <td>{{ $plist->nom }}  </td>
                    </tr>

                    <tr>
                        <td><strong>Prenom:</strong></td>
                        <td> {{ $plist->prenom }}  <br> </td>
                    </tr>


                    <tr>
                        <td><strong>Apogee:</strong></td>
                        <td>{{ $plist->apogee}}<br> </td>
                    </tr>

                    <tr>
                        <td><strong>Observation:</strong></td>
                        <td>{{ $plist->description }}</td>
                    </tr>


                </table>
                
                  
                
               
                
                
                
                
            </div>
        </div>

     <!--
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Observation:</strong>
                   {{-- $plist->description --}}
            </div>
        </div>
    -->
        
    </div>
@endsection
