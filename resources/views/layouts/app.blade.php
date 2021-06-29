<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ asset('public/frontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/baguetteBox.min.css') }}">
    <link rel="shortcut icon" href="{{ asset('public/frontend/media/Header-Logo.png') }}" type="image/x-icon">
    <!-- All CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script> --}}

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>

<body class="body">
    <header>
        <!-- Navbar -->
        <section class="Nav-Bar  sticky-top nav-bg">
            <nav class="navbar navbar-expand-lg navbar-light container">
                <div class="container-fluid">
                    <a href="{{ URL::to('/') }}">
                        <img src="{{ asset('public/frontend/media/logo.jpg') }}" style="width: 100px; height: 80px;" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ml-auto">
                            <a class="nav-link active text-danger" aria-current="page" href="{{ URL::to('/') }}">Home</a>
                            <a class="nav-link ms-lg-5 text-danger" href="{{ route('about') }}">About Us</a>
                            <a class="nav-link ms-lg-5 text-danger" href="{{ URL::to('/') }}#services">Services</a>
                            <a class="nav-link ms-lg-5 text-danger" href="{{ route('teams') }}">Meet The Team</a>
                            <a class="nav-link ms-lg-5 text-danger" href="{{ URL::to('/') }}#portfolio">Portfolio</a>
                            <a class="nav-link ms-lg-5 text-danger" href="{{ route('photos') }}">Gallery</a>
                            <a class="nav-link ms-lg-5 text-danger" href="{{ URL::to('/') }}#news">News & Event</a>
                            <a class="nav-link ms-lg-5 text-danger" href="{{ URL::to('/') }}#contact">Contact</a>
                            <!-- <a class="nav-link ms-lg-5 text-danger" href="" tabindex="-1" aria-disabled="true">Contact
                                Us</a> -->
                        </div>
                    </div>
                </div>
            </nav>
        </section>

        @section('frontend-content')
            
        @show
    </header>
    
    <footer>Copyright ©2021 Prionty Edit & Effects. All Rights Reserved. Developed By ICT BANGLA</footer>

    <script src="{{ asset('public/frontend/script/app.js') }}"></script>
    <script src="{{ asset('public/frontend/script/baguetteBox.min.js') }}"></script>

    @section('footer')
        
    @show
</body>

</html>