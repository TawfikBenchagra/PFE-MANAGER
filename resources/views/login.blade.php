

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="{{asset('css')}}/style.css">
  <title>PFEMANAGER | Se Connecter</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">
@include('parties.Header')

@if(session()->has('success'))
  <div class="container mt-1">
      <div class="alert alert-success my-3" role="alert"> {{session('success')}} </div>
  </div>
@endif

        <div class="container">
            <p class="text text-center fw-bold text-secondary fs-1">Choisir un compte</p>
        </div>
    
<div class="row mx-auto" style="flex-wrap: nowrap;">
  <div class="col-sm-3 d-flex align-items-stretch ms-3">
    <div class="card" style="width: 18rem; height: 6cm;">
      <img src="{{asset('images')}}/profesor.jpg" class="rounded float-start ">
      <div class="card-body mt-4">
        <h5 class="card-title" style="margin-top:17px">Enseignant</h5>
        <p class="card-text">Pour accèder à votre compte et lancé des réunions.</p>
        <a href="showEns" class="btn btn-primary">Connecter</a>
      </div>
    </div>
  </div>
  <div class="col-sm-3 d-flex align-items-stretch">
    <div class="card" style="width: 18rem; height: 6cm;">
      <img src="{{asset('images')}}/student.png" class="rounded float-center " >
      <div class="card-body mt-5">
        <h5 class="card-title" style="margin-top:14px">Etudiant</h5>
        <p class="card-text">Pour les étudiants, accèder à les cours.</p>
        <a href="showconnect" class="btn btn-primary">Connecter</a>
      </div>
    </div>
  </div>

  <div class="col-sm-3 d-flex align-items-stretch">
    <div class="card" style="width: 18rem; height: 6cm;">
      <img src="{{asset('images')}}/admn copy.jpg" class="rounded">
      <div class="card-body" >
        <h5 class="card-title">Administrateur</h5>
        <p class="card-text">Se connecter en tant d'administrateur</p>
        <a href="showAdm" class="btn btn-primary">Connecter</a>
      </div>
    </div>
  </div>
<!-- 
  <div class="col-sm-3 d-flex align-items-stretch me-5 mb-5">
    <div class="card" style="width: 18rem; height: 6cm;">
      <img src="{{asset('images')}}/parent1.png " class="rounded float-end">
      <div class="card-body mt-4">
        <h5 class="card-title" style="margin-top:14px">Parent</h5>
        <p class="card-text">Pour les parents, suivre l'état de vos enfants.</p>
        <a href="showPar" class="btn btn-primary">Connecter</a>
      </div>
    </div>
  </div> -->
</div>


</body>

