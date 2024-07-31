<!-- Navbar for large screens -->
<nav class="navbar navbar-expand-lg navbar-custom fixed-top px-3 d-none d-lg-block">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <h2>LOGO</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="ms-3 collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item mx-3">
                    <a class="btn-r nav-link btn btn-light px-3 fw-bold" id="contestLink" href="{{ url('/contest-front') }}">Contests</a>
                </li>
                <li class="nav-item">
                    <a class="btn-r nav-link btn btn-light px-3 fw-bold" id="participateLink" href="{{ url('/participate') }}">Participate</a>
                </li>
            </ul>
            <div class="search-input me-5 w-25">
                <input class="custom-input-nav form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </div>
            @auth
                <div class="profile">
                    <a href="{{ route('member',auth()->user()->name) }}" class="text-decoration-none d-flex align-items-center">
                        <i class="bi bi-person-circle" style="font-size: 2rem; color: #333;"></i>
                    </a>
                </div>
            @else
                <form class="d-flex me-5">
                    <a href="{{ route('login') }}" class="btn btn-light me-2" type="button"><b>Sign in</b></a>
                    <a href="{{ route('register') }}" class="btn-a btn btn-custom" type="button"><b>Sign up</b></a>
                </form>
            @endauth
        </div>
    </div>
</nav>

<!-- Bottom navigation for mobile and tablet views -->
<div class="container-fluid fixed-bottom bg-light shadow p-2 d-lg-none">
    <div class="row text-center mx-3">
        <div class="col">
            <a class="text-dark" href="{{ url('/') }}">
                <i class="bi bi-house bottom-nav-icon"></i>
            </a>
        </div>
        <div class="col">
            <a class="text-dark" href="#">
                <i class="bi bi-search bottom-nav-icon"></i>
            </a>
        </div>
        <div class="col">
            <a class="text-dark" href="{{ url('/participate') }}">
                <i class="bi bi-plus-circle bottom-nav-icon"></i>
            </a>
        </div>
        <div class="col">
            <a class="text-dark" href="{{ url('/contest-front') }}">
                <i class="bi bi-trophy bottom-nav-icon"></i>
            </a>
        </div>
        <div class="col">
            <a class="text-decoration-none text-dark" href="#">
                <i class="bi bi-person-circle bottom-nav-icon"></i>
            </a>
        </div>
    </div>
</div>