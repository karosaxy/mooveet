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
   

    <!-- Styles -->
    
   
    {{-- <link rel="stylesheet" href="{{ asset('./css/css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('./css/style.css')}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-blue shadow-sm">
       
        <div class="container">
            <a class="navbar-brand text-white mr-5" href="{{ url('/') }}">
                {{ config('app.name', 'Mooveet') }}
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse justify-content-center navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav ml-5">
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
    <footer class="mt-5 page-footer font-small indigo">

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
                        <a href="#!">Services</a>
                    </h6>
                </div>
                <!-- Grid column -->
    
                <!-- Grid column -->
                <div class="col-md-2 mb-3">
                    <h6 class="text-uppercase text-white font-weight-bold">
                        <a href="#!">Awards</a>
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
            <div class="row d-flex text-center justify-content-center mb-md-0 mb-4">
    
                <!-- Grid column -->
                <div class="col-md-8 col-12 mt-5">
                    <p style="line-height: 1.7rem">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem
                        quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur.</p>
                </div>
                <!-- Grid column -->
    
            </div>
            <!-- Grid row-->
            <hr class="rgba-white-light" style="margin: 0 15%;">
    
            <!-- Grid row-->
            <div class="row pt-4 pb-3">
    
                <!-- Grid column -->
                <div class="col-sm-12 text-center">
    
                    <div class="mb-5 flex-center">
    
                        <!-- Facebook -->
                        <a href="#" class="fb-ic">
                            <i class="fab fa-facebook-f text-white mr-4"></i>
                        </a>
                        <!-- Twitter -->
                        <a href="#" class="tw-ic">
                            <i class="fab fa-twitter fa-lg text-white mr-4"> </i>
                        </a>
                        <!-- Google +-->
                        <a href="#" class="gplus-ic">
                            <i class="fab fa-google-plus-g fa-lg text-white mr-4"> </i>
                        </a>
                        <!--Linkedin -->
                        <a href="#" class="li-ic">
                            <i class="fab fa-linkedin-in fa-lg text-white mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a href="#" class="ins-ic">
                            <i class="fab fa-instagram fa-lg text-white mr-4"> </i>
                        </a>
                        <!--Pinterest-->
                        <a href="#" class="pin-ic">
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
    <!--End of Footer -->

    <!-- script -->
    <!-- JQuery -->
    {{-- <script src="{{ url('css/js/jquery-3.5.0.min.js') }}"></script>
    <!-- popper -->
    <script src="{{ url('css/js/popper.min.js') }}"></script>
    <!-- Bootstrap core JavaScript -->
    <script src="{{ url('css/js/bootstrap.min.js') }}"></script> --}}
   
</body>

</html>