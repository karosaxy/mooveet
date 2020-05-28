<div class="view" style="background-image: url('img/first.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <!-- Mask & flexbox options-->
    <div class="mask rgba-gradient d-flex align-items-center">
        <!-- Content -->
        <div class="container">
            <!--Grid row-->
            <div class="row max-vh-100">
                <!--Grid column-->
                <div class="col-md-6 col-sm-12 text-white text-center text-md-left my-3 wow fadeInLeft" data-wow-delay="0.3s">
                    <h1 class="h1-responsive font-weight-bold mt-sm-5">Make your World go round</h1>
                    <hr class="hr-light my-0">
                    <h6 class="mb-4">We are Technology based solution  platform that connects a Cargo owner with a truck owner with the help of  the Mooveet web app!

                        We know how hard it is to get a good truck and move large properties to your desired location. Are you worried and don't know a reliable truck-man to handle your properties with care? Don't worry, you dont have to miss that deadline anymore we have got you covered! We will just Mooveet! 
                    </h6>
                   <div class="d-inline-block">
                    <a class="btn btn-light" type="button" href="{{ route('register') }}">{{ __('Register') }}</a>
                    <a class="btn btn-outline-light btn-scan" type="button" href="{{ route('scan.create') }}">{{ __('Scan For A Driver') }}</a>
                    <a class="btn btn-light" type="button" href="{{ route('login') }}">{{ __('Login') }}</a>
                   </div>
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-6 col-xl-5 mt-xl-5 m-sm-auto wow fadeInRight d-none d-md-block d-lg-block" data-wow-delay="0.3s">
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