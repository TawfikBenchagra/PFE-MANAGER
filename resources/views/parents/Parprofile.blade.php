
@extends('layouts.PAR')
  
@section('contents')
   <h1 class="mb-0 text-dark">Profile</h1> 
    <hr />
    <div class="container d-flex ">
        <div class="card card-request shadow w-100 desktop-margin ">
              <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 text-center heading-text" style="margin-bottom: 0px !important;">
                        <h4 class="font-weight-bold text-dark bg-warning">Informations personnelles</h4>
                    </div>
              </div>
              <hr style="margin-top: 0.5rem; margin-bottom: 0rem;">
              <div class="row justify-content-center" style="padding-top: 0.5rem; padding-bottom: 0.5rem; background-color: #f8f9fa!important; margin-left: 0%; margin-right: 0%;">
            
                <div class="col-sm  text-center ">
                <img src="{{asset('storage/' . Auth::guard('pere')->user()->image)}}"  style="border: 2px solid #ffffff; box-shadow: 0 1px 3px grey !important; width: 90px; height: 90px;" alt="">
                </div>
          
            </div>
             <hr style="margin-top: 0rem; margin-bottom: 1rem;">

            <div class="row justify-content-center text-dark" style=" margin-left: 1%; margin-right: 1%;">
                <div class="col-sm" >
                    <div class="form-group" >
                      <label >Nom :</label>
                      <input disabled="" type="text"  class="form-control" value="{{Auth::guard('pere')->user()->nom}}" >
                    </div>
                </div> <!-- end col -->

                <div class="col-sm" >
                    <div class="form-group" >
                      <label>Prénom :</label>
                        <input disabled="" type="text" class="form-control "  value="{{Auth::guard('pere')->user()->prenom}}">
                    </div>
                </div> <!-- end col -->	
            </div> <!-- end row -->
                                                      
            <div class="row justify-content-center text-dark" style=" margin-left: 1%; margin-right: 1%;" >
                <div class="col-sm" >
                    <div class="form-group">
                        <label>Appoge Etudiant :</label>
                        <input disabled="" type="text"  class="form-control"  value="{{Auth::guard('pere')->user()->apogee_etd}}">
                    </div>
                </div> <!-- end col -->
                <div class="col-sm" >
                    <div class="form-group" >
                        <label for="sw-default-first-name">Email :</label>
                        <input disabled="" type="text" class="form-control "  value="{{Auth::guard('pere')->user()->email}}" >
                    </div>
                </div> <!-- end col -->	
            </div> <!-- end row -->	

            <div class="row justify-content-center text-dark" style=" margin-left: 1%; margin-right: 1%;" >
                <div class="col-sm" >
                    <div class="form-group" >
                        <label for="sw-default-first-name">CIN :</label>
                        <input disabled="" type="text" class="form-control" value="{{Auth::guard('pere')->user()->cin}}" >
                    </div>
                </div> <!-- end col -->   
            </div>	<!-- end row -->	
        </div>
    </div>    
@endsection