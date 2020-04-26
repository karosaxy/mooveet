<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Mooveet') }}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('./css/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('./css/css/all.min.css')}}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('./css/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('./css/style.css')}}">
</head>

<body>

    <header>
        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top bg-dark navbar-collapse">
            <a class="navbar-brand text-white" href="{{ url('/') }}">
                <strong>{{ config('app.name', 'Mooveet') }}</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link pr-3" href="#">About Us</a>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link border-left border-white pl-3" href="#">Contact Us</a>
                    </li>
                    <li class="nav-item border-left border-white pl-3">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item border-left border-white pl-3">
                        <a class="nav-link" href="#">Driver Scan</a>
                    </li>
                    <li class="nav-item border-left border-white pl-3">
                        <a class="nav-link" href="#">FAQ</a>
                    </li>
                </ul>
            </div>
            <form class="form-inline justify-content-end ">
                <div class="">
                    <input class="form-control mr-sm-2 text-white bg-transparent" type="text" placeholder="Search" aria-label="Search">
                </div>
            </form>
        </nav>

        <!-- Main navigation -->

        <!-- Full Page Intro -->
        <div class="view" style="background-image: url('img/first.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
                <!-- Content -->
                <div class="container">
                    <!--Grid row-->
                    <div class="row">
                        <!--Grid column-->
                        <div class="col-md-6 col-sm-12 text-white text-center text-md-left mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                            <h1 class="h1-responsive font-weight-bold mt-sm-5">Make your World go round</h1>
                            <hr class="hr-light">
                            <h6 class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea dolor molestiae iste.
                            </h6>
                            <a class="btn btn-light" type="button">Register</a>
                            <a class="btn btn-outline-light btn-scan" type="button">Scan For A Driver</a>
                            <a class="btn btn-light" type="button">Login</a>
                        </div>
                        <!--Grid column-->
                        <!--Grid column-->
                        <div class="col-md-6 col-sm-12 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                            <img src="img/lorry-tracker.png" alt="" class="img-fluid animated slideInRight">
                        </div>
                        <!--Grid column-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
    </header>
    
    
    <main>
        @yield('content')
    </main>


    <!-- script -->

    <!-- JQuery -->
    <script src="{{ url('css/js/jquery-3.5.0.min.js') }}"></script>
    <!-- popper -->
    <script src="{{ url('css/js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ url('css/js/bootstrap.min.js') }}"></script>
    <script>
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 200);
        });
    </script>
</body>

</html>