<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PFEMANAGER | Inscrire Administrateur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/notre_projet.css">
    
</head>
<body>

    @include('parties.Header')
<div class="container">
        <div class="row">
            <div class="col-12 col-sm-9 col-md-6 m-auto mt-2 mb-2 rounded-1">
                <div class="card border-0">
                    <div class="card-body">
                        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-person-circle my-3" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                        </svg>
        
                        <form action="{{route('storeAdm')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="text" class="form-control my-3 py-2 rounded-5 shadow-lg p-3" name="nom" placeholder="Nom" value="{{old('nom')}}" required>
                            <input type="text" class="form-control my-3 py-2 rounded-5 shadow-lg p-3" name="prenom" value="{{old('prenom')}}" placeholder="Prénom" required>
                            <input type="text" class="form-control my-3 py-2 rounded-5 shadow-lg p-3" name="cin" value="{{old('cin')}}" placeholder="CIN" required>
                            <input type="email" name="email" class="form-control my-3 py-2 rounded-5 shadow-lg p-3" placeholder="Email" value="{{old('email')}}" required>
                            @error('email')
                                <div class="alert alert-danger" role="alert">{{$message}}</div>
                            @enderror
                            <input type="password" name="password" class="form-control my-3 py-2 rounded-5 shadow-lg p-3" placeholder="Mot de passe" required>
                            <input type="password" name="password_confirmation" class="form-control my-3 py-2 rounded-5 shadow-lg p-3" placeholder="Confirmer le mot de passe" required>
                            @error('password')
                                <div class="alert alert-danger" role="alert">{{$message}}</div>
                            @enderror
                            <label for="image" class="ms-2">Insèrer votre image : </label>
                            <input type="file" class="form-control my-3 py-2 rounded-5 shadow-lg p-3" name="photo" id="">
                            <div class="text-center mt-4">
                                <button class="btn text-light rounded-1 " style="width: 140px; background-color: #4e57d4;">S'inscrire</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

