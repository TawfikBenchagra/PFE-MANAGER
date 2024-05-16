
@extends('layouts.app')
  
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
                <img src="{{asset('storage/' . Auth::guard('admin')->user()->image)}}"  style="border: 2px solid #ffffff; box-shadow: 0 1px 3px grey !important; width: 90px; height: 90px;" alt="">
                </div>
          
            </div>
             <hr style="margin-top: 0rem; margin-bottom: 1rem;">

            <div class="row justify-content-center" style=" margin-left: 1%; margin-right: 1%;">
                <div class="col-sm" id="abId0.7221393515779051">
                    <div class="form-group" id="abId0.5733707578557463">
                      <label for="sw-default-first-name">Nom :</label>
                      <input disabled="" type="text" id="sw-default-first-name" class="form-control" name="nom" value="{{Auth::guard('admin')->user()->nom}}" >
                    </div>
                </div> <!-- end col -->

                <div class="col-sm" id="abId0.7935250023663052">
                    <div class="form-group" id="abId0.0027941899141565862">
                      <label for="sw-default-first-name">Prénom :</label>
                        <input disabled="" type="text" id="sw-default-first-name" class="form-control cin" name="prenom" value="{{Auth::guard('admin')->user()->prenom}}" >
                    </div>
                </div> <!-- end col -->	
            </div> <!-- end row -->
                                                      
            <div class="row justify-content-center" style=" margin-left: 1%; margin-right: 1%;" >
                <div class="col-sm" id="abId0.7809979033818122">
                    <div class="form-group" id="abId0.30629259626265126">
                        <label for="sw-default-first-name">CIN :</label>
                        <input disabled="" type="text" id="sw-default-first-name" class="form-control"  value="{{Auth::guard('admin')->user()->cin}}">
                    </div>
                </div> <!-- end col -->
                <div class="col-sm" id="abId0.3351964705212973">
                    <div class="form-group" id="abId0.18859187953009915">
                        <label for="sw-default-first-name">Email :</label>
                        <input disabled="" type="text" class="form-control cin"  value="{{Auth::guard('admin')->user()->email}}" placeholder="">
                    </div>
                </div> <!-- end col -->	
            </div> <!-- end row -->			
        </div>
    </div>    
@endsection