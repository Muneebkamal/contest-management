@extends('layouts.auth')

@section('styles')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
<!-- Font Awesome for the star icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <!-- Owl Carousel CSS -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<style>
        .card-img-overlay {
            background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0));
            color: white;
        }
        .card-header-action a {
            display: flex;
            align-items: center;
        }
        .card-header-action .icon {
            margin-left: 0.5rem;
        }
        .rating {
            color: #ffc107;
        }
        .avatar img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
     .owl-nav {
            position: absolute;
            top: 50%;
            width: 100%;
            display: flex;
            justify-content: space-between;
            transform: translateY(-50%);
        }
        .owl-nav button {
            background-color: transparent;
            border: none;
            font-size: 2rem;
            color: #333;
        }


    /* Default navbar style */
    .navbar-custom {
        background-color: #ffffff; /* Default background color */
    }

    .navbar-custom .nav-link,
    .navbar-custom .navbar-brand {
        color: #000000; /* Default text color */
    }

    /* Active navbar style */
    .navbar-custom.active {
        background-color: #ff0048; /* Active background color */
    }

    .navbar-custom.active .nav-link,
    .navbar-custom.active .navbar-brand {
        color: #ffffff; /* Active text color */
    }

    /* Additional styles for buttons */
    .btn-custom {
        background-color: #ff0048;
        color: #ffffff;
    }

    .btn-custom-outline {
        border-color: #ffffff;
        color: #ffffff;
    }

    .btn-custom-outline:hover {
        background-color: #ffffff;
        color: #ff0048;
    }

    /* Logo styles */
    #logo-active {
        display: none;
    }

    .navbar-custom.active #logo-default {
        display: none;
    }

    .navbar-custom.active #logo-active {
        display: block;
    }
    .text-primary{
        color: #ff0048 !important;
    }
    .btn-home{
        padding-top
    }
    .home-text{
        font-weight: 700;
        font-size: 32px;
    }
    .home-text1{
        font-weight: 700;
    }
    .text-green{
        color: #00c292;
    }
</style>
@endsection

@section('auth-content')

<nav class="navbar navbar-expand-lg navbar-custom fixed-top px-3">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            {{-- <img id="logo-default" alt="Bidiboo Logo Default" 
                 src="https://cdn.playgrnd.media/v7/img/icons/babies/BUS/logo-desktop-app-bar.png?w=180">
            <img id="logo-active" alt="Bidiboo Logo Active" 
                 src="https://cdn.playgrnd.media/v7/img/icons/babies/BUS/logo-desktop-app-bar-active.png?w=180"> --}}
                 <h2>LOGO</h2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Contests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Participate</a>
                </li>
            </ul>
            <div class="search-input me-auto">
                <input class="custom-input form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </div>
            <form class="d-flex me-auto">
                <button class="btn btn-outline-dark me-2" type="button"><b>Sign in</b></button>
                <button class="btn btn-custom" type="button"><b>Sign up</b></button>
            </form>
        </div>
    </div>
</nav>


{{-- HOME SECTION --}}

    <section>
        <div class="container">
            <div class="row mt-5 pt-5">
                <div class="col-md-7">
                        <img alt="Bidiboo" style="width:100%; height:auto;" src="https://cdn.playgrnd.media/v7/img/icons/babies/header-large.jpg?q=45">
                </div>
                <div class="col-md-5 d-flex flex-column justify-content-center">
                    <div class="d-flex justify-content">
                        <div class="content">
                            <h4 class="text-center home-text">Participate in the biggest</h4>
                            <h4 class="text-primary text-center home-text">baby photo contest</h4>
                            <h5 class="text-center text-green home-text1"><span>$100,000</span> of prizes to be won every month!</h5>
                            <div class="text-center mt-3">
                                <a href="/participate" class="btn btn-primary btn-block w-75 py-2">Participate</a>
                            </div>
                            {{-- <div class="text-center mt-3">
                                <img class="mr-2" height="30" src="https://cdn.playgrnd.media/v7/img/icons/misc/trustpilot-stars-4-5.svg" alt="Trustpilot"><br>
                                <span>4.6 / 5 on Trustpilot</span>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- SECTION 2 --}}
    <section>
        <div class="mx-3 d-flex justify-content-between align-items-center">
            <h3 class="mb-0">They won!</h3>
            <div class="btn-more">
                <a class="btn btn-link text-decoration-none text-primary p-0" href="/testimonials">More
                    <i class="fas fa-plus icon"></i>
                </a>
            </div>
        </div>

        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="container mt-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                            <a href="/member/melk">
                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                            </a>
                        </div>
                        <div>
                            <div>
                                <a href="/testimonials/tsl_690f7f55-0f17-4440-9e3d-c9e5618910bf_16015">Mel K.</a>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div>
                                <span class="badge bg-secondary">$150</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        Happy with the competition so Easy and quick payment 😀
                    </div>
                    <div class="text-muted">93rd · Boy Contest · 14 days ago</div>
                </div>
            </div>
            <div class="item">
                <div class="container mt-4">
                <div class="d-flex align-items-center">
                    <div class="avatar me-3">
                        <a href="/member/melk">
                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                        </a>
                    </div>
                    <div>
                        <div>
                            <a href="/testimonials/tsl_690f7f55-0f17-4440-9e3d-c9e5618910bf_16015">Mel K.</a>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div>
                            <span class="badge bg-secondary">$150</span>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    Happy with the competition so Easy and quick payment 😀
                </div>
                <div class="text-muted">93rd · Boy Contest · 14 days ago</div>
                </div>
            </div>
            <div class="item">
                <div class="container mt-4">
                <div class="d-flex align-items-center">
                    <div class="avatar me-3">
                        <a href="/member/melk">
                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                        </a>
                    </div>
                    <div>
                        <div>
                            <a href="/testimonials/tsl_690f7f55-0f17-4440-9e3d-c9e5618910bf_16015">Mel K.</a>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div>
                            <span class="badge bg-secondary">$150</span>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    Happy with the competition so Easy and quick payment 😀
                </div>
                <div class="text-muted">93rd · Boy Contest · 14 days ago</div>
                </div>
            </div>
            <div class="item">
                <div class="container mt-4">
                <div class="d-flex align-items-center">
                    <div class="avatar me-3">
                        <a href="/member/melk">
                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                        </a>
                    </div>
                    <div>
                        <div>
                            <a href="/testimonials/tsl_690f7f55-0f17-4440-9e3d-c9e5618910bf_16015">Mel K.</a>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div>
                            <span class="badge bg-secondary">$150</span>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    Happy with the competition so Easy and quick payment 😀
                </div>
                <div class="text-muted">93rd · Boy Contest · 14 days ago</div>
                </div>
            </div>
            <div class="item">
                <div class="container mt-4">
                <div class="d-flex align-items-center">
                    <div class="avatar me-3">
                        <a href="/member/melk">
                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                        </a>
                    </div>
                    <div>
                        <div>
                            <a href="/testimonials/tsl_690f7f55-0f17-4440-9e3d-c9e5618910bf_16015">Mel K.</a>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div>
                            <span class="badge bg-secondary">$150</span>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    Happy with the competition so Easy and quick payment 😀
                </div>
                <div class="text-muted">93rd · Boy Contest · 14 days ago</div>
                </div>
            </div>
            <div class="item">
                <div class="container mt-4">
                <div class="d-flex align-items-center">
                    <div class="avatar me-3">
                        <a href="/member/melk">
                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                        </a>
                    </div>
                    <div>
                        <div>
                            <a href="/testimonials/tsl_690f7f55-0f17-4440-9e3d-c9e5618910bf_16015">Mel K.</a>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div>
                            <span class="badge bg-secondary">$150</span>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    Happy with the competition so Easy and quick payment 😀
                </div>
                <div class="text-muted">93rd · Boy Contest · 14 days ago</div>
                </div>
            </div>
            <div class="item">
                <div class="container mt-4">
                <div class="d-flex align-items-center">
                    <div class="avatar me-3">
                        <a href="/member/melk">
                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                        </a>
                    </div>
                    <div>
                        <div>
                            <a href="/testimonials/tsl_690f7f55-0f17-4440-9e3d-c9e5618910bf_16015">Mel K.</a>
                        </div>
                        <div class="rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <div>
                            <span class="badge bg-secondary">$150</span>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    Happy with the competition so Easy and quick payment 😀
                </div>
                <div class="text-muted">93rd · Boy Contest · 14 days ago</div>
                </div>
            </div>
            <div class="item">
                <div class="container mt-4">
                    <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                            <a href="/member/melk">
                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                            </a>
                        </div>
                        <div>
                            <div>
                                <a href="/testimonials/tsl_690f7f55-0f17-4440-9e3d-c9e5618910bf_16015">Mel K.</a>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <div>
                                <span class="badge bg-secondary">$150</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        Happy with the competition so Easy and quick payment 😀
                    </div>
                    <div class="text-muted">93rd · Boy Contest · 14 days ago</div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 3 --}}
    <section>
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 class="text-center">Every month, more than 500 babies giggle their way to prizes!</h2>
                <div class="d-flex justify-content-center my-3">
                    <div class="sart-text d-flex align-items-center">
                        <div class="rating-icons d-flex align-items-center" aria-label="5 Stars">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <div class="ml-3">Trusted by 17 million users</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 4 --}}
    <section>
        <div class="owl-carousel owl-theme">
            <div class="item"><div class="d-flex justify-content-center mt-5">
                <div class="card position-relative" style="width: 18rem; border: none; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <img src="https://cdn.playgrnd.media/v7/img/ph/usr_54f3a947-8f69-4c23-b09f-6a11e70cd4cb/chd_32c12051-d23c-48e9-87d3-9a3913fe5e4a/ph_4a55bd23-53d7-4d56-97db-d4806cda4e15.jpg?w=3840&amp;h=7680&amp;q=45" class="w-100 h-100" alt="Luke" style="object-fit: cover;">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <div class="text-center">
                            <h5 class="card-title mb-0"><strong style="font-size: 1.2rem;">Luke</strong></h5>
                            <p class="votes mb-0">600<sup>th</sup> • 26 votes</p>
                        </div>
                    </div>
                </div>
            </div></div>
            <div class="item"><div class="d-flex justify-content-center mt-5">
                <div class="card position-relative" style="width: 18rem; border: none; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <img src="https://cdn.playgrnd.media/v7/img/ph/usr_54f3a947-8f69-4c23-b09f-6a11e70cd4cb/chd_32c12051-d23c-48e9-87d3-9a3913fe5e4a/ph_4a55bd23-53d7-4d56-97db-d4806cda4e15.jpg?w=3840&amp;h=7680&amp;q=45" class="w-100 h-100" alt="Luke" style="object-fit: cover;">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <div class="text-center">
                            <h5 class="card-title mb-0"><strong style="font-size: 1.2rem;">Luke</strong></h5>
                            <p class="votes mb-0">600<sup>th</sup> • 26 votes</p>
                        </div>
                    </div>
                </div>
            </div></div>
            <div class="item"><div class="d-flex justify-content-center mt-5">
                <div class="card position-relative" style="width: 18rem; border: none; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <img src="https://cdn.playgrnd.media/v7/img/ph/usr_54f3a947-8f69-4c23-b09f-6a11e70cd4cb/chd_32c12051-d23c-48e9-87d3-9a3913fe5e4a/ph_4a55bd23-53d7-4d56-97db-d4806cda4e15.jpg?w=3840&amp;h=7680&amp;q=45" class="w-100 h-100" alt="Luke" style="object-fit: cover;">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <div class="text-center">
                            <h5 class="card-title mb-0"><strong style="font-size: 1.2rem;">Luke</strong></h5>
                            <p class="votes mb-0">600<sup>th</sup> • 26 votes</p>
                        </div>
                    </div>
                </div>
            </div></div>
            <div class="item"><div class="d-flex justify-content-center mt-5">
                <div class="card position-relative" style="width: 18rem; border: none; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <img src="https://cdn.playgrnd.media/v7/img/ph/usr_54f3a947-8f69-4c23-b09f-6a11e70cd4cb/chd_32c12051-d23c-48e9-87d3-9a3913fe5e4a/ph_4a55bd23-53d7-4d56-97db-d4806cda4e15.jpg?w=3840&amp;h=7680&amp;q=45" class="w-100 h-100" alt="Luke" style="object-fit: cover;">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <div class="text-center">
                            <h5 class="card-title mb-0"><strong style="font-size: 1.2rem;">Luke</strong></h5>
                            <p class="votes mb-0">600<sup>th</sup> • 26 votes</p>
                        </div>
                    </div>
                </div>
            </div></div>
            <div class="item"><div class="d-flex justify-content-center mt-5">
                <div class="card position-relative" style="width: 18rem; border: none; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <img src="https://cdn.playgrnd.media/v7/img/ph/usr_54f3a947-8f69-4c23-b09f-6a11e70cd4cb/chd_32c12051-d23c-48e9-87d3-9a3913fe5e4a/ph_4a55bd23-53d7-4d56-97db-d4806cda4e15.jpg?w=3840&amp;h=7680&amp;q=45" class="w-100 h-100" alt="Luke" style="object-fit: cover;">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <div class="text-center">
                            <h5 class="card-title mb-0"><strong style="font-size: 1.2rem;">Luke</strong></h5>
                            <p class="votes mb-0">600<sup>th</sup> • 26 votes</p>
                        </div>
                    </div>
                </div>
            </div></div>
            <div class="item"><div class="d-flex justify-content-center mt-5">
                <div class="card position-relative" style="width: 18rem; border: none; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                    <img src="https://cdn.playgrnd.media/v7/img/ph/usr_54f3a947-8f69-4c23-b09f-6a11e70cd4cb/chd_32c12051-d23c-48e9-87d3-9a3913fe5e4a/ph_4a55bd23-53d7-4d56-97db-d4806cda4e15.jpg?w=3840&amp;h=7680&amp;q=45" class="w-100 h-100" alt="Luke" style="object-fit: cover;">
                    <div class="card-img-overlay d-flex flex-column justify-content-end">
                        <div class="text-center">
                            <h5 class="card-title mb-0"><strong style="font-size: 1.2rem;">Luke</strong></h5>
                            <p class="votes mb-0">600<sup>th</sup> • 26 votes</p>
                        </div>
                    </div>
                </div>
            </div></div>
        </div>
    </section>


    {{-- SECTION 5 --}}
    <section>
        <div class="text-row my-3">
            <h2 class="text-center">Help them get their first votes!</h2>
            <h3 class="text-center text-primary">Start voting right now:</h3>
        </div>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <img src="https://cdn.playgrnd.media/v7/img/ph/usr_54f3a947-8f69-4c23-b09f-6a11e70cd4cb/chd_32c12051-d23c-48e9-87d3-9a3913fe5e4a/ph_4a55bd23-53d7-4d56-97db-d4806cda4e15.jpg?w=3840&amp;h=7680&amp;q=45" class="card-img-top" alt="Everleigh">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title mb-0">Everleigh</h5>
                                <span class="badge bg-primary">New participant</span>
                            </div>
                            <p class="card-text">
                                <span class="d-block"><svg class="bi bi-trophy" width="1em" height="1em" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M3 0a.5.5 0 0 1 .5.5V1H4a1 1 0 0 1 1 1v1H2V2a1 1 0 0 1 1-1h.5V.5A.5.5 0 0 1 3 0zm10 0a.5.5 0 0 1 .5.5V1H13a1 1 0 0 1 1 1v1h-3V2a1 1 0 0 1 1-1h.5V.5a.5.5 0 0 1 .5-.5zM1 3v1a3 3 0 0 0 5.765 1.518c.272.185.573.357.885.518A5.775 5.775 0 0 1 8 7.5c.62 0 1.213-.083 1.787-.239.312-.161.613-.333.885-.518A3 3 0 0 0 15 4V3h-1v1a2 2 0 1 1-4 0V3H6v1a2 2 0 1 1-4 0V3H1z"/><path d="M5 8c-.271.183-.551.346-.845.488A5.776 5.776 0 0 1 8 9.5a5.776 5.776 0 0 1 3.845-1.012c-.294-.142-.574-.305-.845-.488A6.784 6.784 0 0 1 8 7.5c-1.385 0-2.692.364-3.805.988zM4.115 10.463C5.284 10.169 6.622 10 8 10s2.716.169 3.885.463C12.575 10.796 13.322 11 14 11v1c0 1.239-2.015 2-5 2s-5-.761-5-2v-1c.678 0 1.425-.204 2.115-.537zM14.5 13a.5.5 0 0 1 0 1c-2.076 0-3.612.38-4.5 1-.888-.62-2.424-1-4.5-1a.5.5 0 0 1 0-1h9z"/></svg> 1061<sup>st</sup></span>
                                <span>30 votes</span>
                            </p>
                            <p class="card-text">Sweet girl is obsessed with her baby dolls and is always smiling!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <img src="https://cdn.playgrnd.media/v7/img/ph/usr_807a7253-…-d819-42c6-b6b4-c77d25aab9fb.jpg?w=640&h=640&q=55" class="card-img-top" alt="Other">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="card-title mb-0">Other</h5>
                                <span class="badge bg-primary">New participant</span>
                            </div>
                            <p class="card-text">
                                <span class="d-block"><svg class="bi bi-trophy" width="1em" height="1em" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16"><path d="M3 0a.5.5 0 0 1 .5.5V1H4a1 1 0 0 1 1 1v1H2V2a1 1 0 0 1 1-1h.5V.5A.5.5 0 0 1 3 0zm10 0a.5.5 0 0 1 .5.5V1H13a1 1 0 0 1 1 1v1h-3V2a1 1 0 0 1 1-1h.5V.5a.5.5 0 0 1 .5-.5zM1 3v1a3 3 0 0 0 5.765 1.518c.272.185.573.357.885.518A5.775 5.775 0 0 1 8 7.5c.62 0 1.213-.083 1.787-.239.312-.161.613-.333.885-.518A3 3 0 0 0 15 4V3h-1v1a2 2 0 1 1-4 0V3H6v1a2 2 0 1 1-4 0V3H1z"/><path d="M5 8c-.271.183-.551.346-.845.488A5.776 5.776 0 0 1 8 9.5a5.776 5.776 0 0 1 3.845-1.012c-.294-.142-.574-.305-.845-.488A6.784 6.784 0 0 1 8 7.5c-1.385 0-2.692.364-3.805.988zM4.115 10.463C5.284 10.169 6.622 10 8 10s2.716.169 3.885.463C12.575 10.796 13.322 11 14 11v1c0 1.239-2.015 2-5 2s-5-.761-5-2v-1c.678 0 1.425-.204 2.115-.537zM14.5 13a.5.5 0 0 1 0 1c-2.076 0-3.612.38-4.5 1-.888-.62-2.424-1-4.5-1a.5.5 0 0 1 0-1h9z"/></svg> 1062<sup>nd</sup></span>
                                <span>20 votes</span>
                            </p>
                            <p class="card-text">Another description for another participant.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('script')
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- jQuery -->
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Initialize Owl Carousel -->
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                nav: true,
                dots: false,  <!-- Disable pagination dots -->
                navText: [
                    '<i class="fas fa-chevron-left"></i>',
                    '<i class="fas fa-chevron-right"></i>'
                ],
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            });
        });
    </script>
    <!-- Font Awesome for the nav icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection