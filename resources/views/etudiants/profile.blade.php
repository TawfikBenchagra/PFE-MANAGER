
@extends('layouts.ETD')
  
@section('contents')
   <h1 class="mb-0 text-dark">Profile</h1> 
    <hr />
    <div class="container d-flex">
        <div class="card card-request shadow w-100 desktop-margin">
              <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 text-center heading-text" style="margin-bottom: 0px !important;">
                        <h4 class="font-weight-bold text-green">Informations personnelles</h4>
                    </div>
              </div>
              <hr style="margin-top: 0.5rem; margin-bottom: 0rem;">
              <div class="row justify-content-center" style="padding-top: 0.5rem; padding-bottom: 0.5rem; background-color: #f8f9fa!important; margin-left: 0%; margin-right: 0%;">
            
                <div class="col-sm  text-center">
                <img src="{{asset('storage/' . Auth::guard('etudiant')->user()->image)}}"  style="border: 2px solid #ffffff; box-shadow: 0 1px 3px grey !important; width: 90px; height: 90px;" alt="">
                </div>
          
            </div>
             <hr style="margin-top: 0rem; margin-bottom: 1rem;">

            <div class="row justify-content-center" style=" margin-left: 1%; margin-right: 1%;">
                <div class="col-sm" >
                    <div class="form-group" >
                      <label >Nom :</label>
                      <input disabled="" type="text"  class="form-control" value="{{Auth::guard('etudiant')->user()->nom}}" >
                    </div>
                </div> <!-- end col -->

                <div class="col-sm" >
                    <div class="form-group" >
                      <label>Prénom :</label>
                        <input disabled="" type="text" class="form-control "  value="{{Auth::guard('etudiant')->user()->prenom}}">
                    </div>
                </div> <!-- end col -->	
            </div> <!-- end row -->
                                                      
            <div class="row justify-content-center" style=" margin-left: 1%; margin-right: 1%;" >
                <div class="col-sm" >
                    <div class="form-group">
                        <label>Code Appoge :</label>
                        <input disabled="" type="text"  class="form-control"  value="{{Auth::guard('etudiant')->user()->apogee}}">
                    </div>
                </div> <!-- end col -->
                <div class="col-sm" >
                    <div class="form-group" >
                        <label for="sw-default-first-name">Email :</label>
                        <input disabled="" type="text" class="form-control "  value="{{Auth::guard('etudiant')->user()->email}}" >
                    </div>
                </div> <!-- end col -->	
                <div class="col-sm" >
                    <div class="form-group" >
                        <label for="sw-default-first-name">SEXE :</label>
                        <input disabled="" type="text" class="form-control" value="{{Auth::guard('etudiant')->user()->sexe}}" >
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->	

            <div class="row justify-content-center" style=" margin-left: 1%; margin-right: 1%;">
                <div class="col-sm" >
                    <div class="form-group" >
                        <label>Date de naissance :</label>
                        <input disabled="" type="text" class="form-control "  value="{{Auth::guard('etudiant')->user()->date_naissance}}" >
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->		

            <div class="row justify-content-center" style=" margin-left: 1%; margin-right: 1%;">
                <div class="col-sm" >
                    <div class="form-group" >
                        <label>Filière :</label>
                        <input disabled="" type="text"  class="form-control" value="{{Auth::guard('etudiant')->user()->filiere}}" >
                    </div>
                </div> <!-- end col -->
                <div class="col-sm" >
                    <div class="form-group arabica" >
                        <label> Semestre :</label>
                        <input disabled="" type="text"  class="form-control"  value="{{Auth::guard('etudiant')->user()->semestre}} ">
                    </div>
                </div> <!-- end col -->                                  
            </div> <!-- end row -->		
        </div>
    </div>    
@endsection