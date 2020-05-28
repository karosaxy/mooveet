<nav class="navbar navbar-expand-xl navbar-light fixed-top bg-dark col-md-12" style="z-index: 2">
    <h5>
        <a class="navbar-brand text-white" href="{{ url('/') }}">
            <strong>{{ config('app.name', 'Mooveet') }}</strong>
        </a>
    </h5>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
        <ul class="navbar-nav">
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

        <form class="form-inline ml-5 my-2 my-lg-0 justify-content-end">
            <input class="form-control mr-sm-2 text-white bg-transparent" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-sm btn-scan my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>

</nav>