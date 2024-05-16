@extends('nmodules.layout')
  
<style>
    body {

  padding-top: 5rem;
  
 
  
}
    
table {
  width: 40%;
  height: 40%;
  
}
</style>
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 >  L'étudiant</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('nmodules.index') }}"> Retour</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <table  style="text-align=center;" class="pull-center" >
                    <tr>
                        <td><strong>Nom    :</strong></td>
                        <td>{{ $nmodule->nom }}  </td>
                    </tr>

                    <tr>
                        <td><strong>Prenom:</strong></td>
                        <td> {{ $nmodule->prenom }}  <br> </td>
                    </tr>

                    <tr>
                        <td><strong><strong>Note:</strong></strong></td>
                        <td>{{ $nmodule->note}}<br> </td>
                    </tr>

                    <tr>
                        <td><strong>Apogee:</strong></td>
                        <td>{{ $nmodule->apogee}}<br> </td>
                    </tr>

                    <tr>
                        <td><strong>Observation:</strong></td>
                        <td>{{ $nmodule->description }}</td>
                    </tr>


                </table>
                
                  
                
               
                
                
                
                
            </div>
        </div>

     <!--
    <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Observation:</strong>
                   {{ $nmodule->description }}
            </div>
        </div>
    -->
        
    </div>
@endsection
