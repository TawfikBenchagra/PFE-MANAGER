
<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="css/style.css">
    <title>PFEMANAGER | @yield('title')</title>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    @include('parties.Header')

    <main>
        @if(session()->has('success'))
            <div class="container">
                <div class="alert alert-success my-3" role="alert"> {{session('success')}} </div>
            </div>
        @endif
        @yield('main')
    </main>

    @include('parties.footer')
</body>
</html>
