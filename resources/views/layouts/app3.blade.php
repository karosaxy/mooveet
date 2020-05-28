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
    <script src="{{ asset('js/app.js') }}"></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
   

    <!-- Styles -->
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('./css/style.css')}}">


    
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-blue shadow-sm">
       
        <div class="container">
            <a class="navbar-brand text-white mr-5" href="{{ url('/') }}">
                {{ config('app.name', 'Mooveet') }}
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-5">
                    <li class="nav-item">
                        <a class="nav-link p-2" href="/about">About Us</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link p-2" href="/contact">Contact Us</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link p-2" href="/services">Services</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link p-2" href="{{ route('scan.create') }}">Driver Scan</a>
                    </li>
                    <li class="nav-item px-3">
                        <a class="nav-link p-2" href="/faq">FAQ</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="{{ route('admin.users.index') }}" class="dropdown-item">
                            
                                    {{ __('User Management') }}
                                </a> 
                                <a class="dropdown-item" id="navbarDropdown" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                               
                              
                              
                           

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>


@yield('content')

    <!--Start of Footer -->
    <footer class="mt-5  page-footer font-small indigo" style="position: absolute;">

        <!-- Footer Links -->
        <div class="container">
    
            <!-- Grid row-->
            <div class="row text-center text-white d-flex justify-content-center pt-5 mb-3">
    
                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase text-white font-weight-bold">
                        <a href="/about">About us</a>
                    </h6>
                </div>
                <!-- Grid column -->
    
                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase text-white font-weight-bold">
                        <a href="/services">Services</a>
                    </h6>
                </div>
                <!-- Grid column -->
    
                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase text-white font-weight-bold">
                        <a href="/award">Awards</a>
                    </h6>
                </div>
                <!-- Grid column -->
    
                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase text-white font-weight-bold">
                        <a href="/contact">Contact</a>
                    </h6>
                </div>
                <!-- Grid column -->
    
            </div>
            <!-- Grid row-->
            <hr class="rgba-white-light" style="margin: 0 15%;">
            <!-- Grid row-->
            <div class="row pt-2 pb-2">
    
                <!-- Grid column -->
                <div class="col-sm-12 text-center">
    
                    <div class="mb-2 flex-center">
    
                        <div class="mb-5 flex-center">

                            <!-- Facebook -->
                            <a href="https://github.com/karosaxy" class="fb-ic">
                                <i class="fab fa-facebook-f text-white mr-4"></i>
                            </a>
                            <!-- Twitter -->
                            <a href="https://twitter.com/AraromiRichard" class="tw-ic">
                                <i class="fab fa-twitter fa-lg text-white mr-4"> </i>
                            </a>
                            <!-- Google +-->
                            <a href="https://github.com/karosaxy" class="gplus-ic">
                                <i class="fab fa-google-plus-g fa-lg text-white mr-4"> </i>
                            </a>
                            <!--Linkedin -->
                            <a href="https://www.linkedin.com/in/richard-araromi-06685ab7/" class="li-ic">
                                <i class="fab fa-linkedin-in fa-lg text-white mr-4"> </i>
                            </a>
                            <!--Instagram-->
                            <a href="https://github.com/karosaxy" class="ins-ic">
                                <i class="fab fa-instagram fa-lg text-white mr-4"> </i>
                            </a>
                            <!--Pinterest-->
                            <a href="https://github.com/karosaxy" class="pin-ic">
                                <i class="fab fa-pinterest fa-lg text-white"> </i>
                            </a>
        
                        </div>
    
                </div>
                <!-- Grid column -->
    
            </div>
            <!-- Grid row-->
    
        </div>
        <!-- Footer Links -->
    
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="mooveet.test/"> mooveet.test</a>
        </div>
        <!-- Copyright -->
    
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>

</body>

</html>