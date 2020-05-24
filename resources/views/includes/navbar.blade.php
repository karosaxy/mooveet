<nav class="navbar navbar-expand-xl navbar-light fixed-top bg-dark col-md-10">
    <a class="navbar-brand text-white" href="{{ url('/') }}">
        <strong>{{ config('app.name', 'Mooveet') }}</strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
        <ul class="navbar-nav">
            <li class="nav-item pr-3">
                <a class="nav-link p-2" href="/about">About Us</a>
            </li>
            <li class="nav-item border-left border-white pl-3 pr-3">
                <a class="nav-link p-2" href="/contact">Contact Us</a>
            </li>
            <li class="nav-item pl-3 pr-3 border-left border-white ">
                <a class="nav-link p-2" href="#">Services</a>
            </li>
            <li class="nav-item pl-3 pr-3 border-left border-white ">
                <a class="nav-link p-2" href="#">Driver Scan</a>
            </li>
            <li class="nav-item pl-3 pr-3 border-left border-white ">
                <a class="nav-link p-2" href="#">FAQ</a>
            </li>
        </ul>

        <form class="form-inline ml-5 my-2 my-lg-0 justify-content-end">
            <input class="form-control mr-sm-2 text-white bg-transparent" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-sm btn-scan my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>

</nav>