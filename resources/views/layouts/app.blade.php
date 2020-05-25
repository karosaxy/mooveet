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
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('./css/css/bootstrap.min.css')}}"> --}}
    <link rel="stylesheet" href="{{ asset('./css/style.css')}}">
    
</head>

<body>
    @include('includes.navbar')
    <header>
        <!--Navbar-->
        
        @include('includes.homepage')
    </header>
    
   
    <main>
       
        
        @yield('content')
    </main>

    <!--Start of Footer -->
<footer class="mt-5 page-footer font-small indigo">

    <!-- Footer Links -->
    <div class="container">

        <!-- Grid row-->
        <div class="row text-center text-white d-flex justify-content-center pt-5 mb-3">

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase text-white font-weight-bold">
                    <a href="/about" class="text-decoration-none text-reset">About us</a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase text-white font-weight-bold">
                    <a href="#!" class="text-decoration-none text-reset">Services</a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase text-white font-weight-bold">
                    <a href="#!" class="text-decoration-none text-reset">Awards</a>
                </h6>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-2 mb-3">
                <h6 class="text-uppercase text-white font-weight-bold">
                    <a href="/contact" class="text-decoration-none text-reset">Contact</a>
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
        <a href="mooveet.test/" class="text-decoration-none text-reset"> mooveet.test</a>
    </div>
    <!-- Copyright -->

</footer>
<!--End of Footer -->

    <!-- script -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script>

   
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 200);
        });
    </script>
</body>

</html>