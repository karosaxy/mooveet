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