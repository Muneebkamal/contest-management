@extends('layouts.auth')

@section('styles')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
<!-- Font Awesome for the star icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
<style>
        .avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }
            .avatar-overlay {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            /* position: absolute;
            top: 0;
            right: 0; */
            background-color: #6c757d; /* Bootstrap's bg-secondary color */
            color: #ffffff; /* Bootstrap's text-white color */
            z-index: 1;
            font-size: 14px;
        }
        .card-img-top {
            border-radius: 15px;
            height: 500px; /* Fixed height for equal image sizes */
            object-fit: cover; /* Ensure images cover the area without distortion */
            width: 100%; /* Ensure the image takes full width */
        }
        .card-body {
            flex: 1 1 auto; /* Allow card body to expand and push footer down */
        }
        .card-body {
            padding: 1rem;
        }
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
        .rating .fa-star {
            font-size: 12px; /* Adjust the size as needed */
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
        background-color: var(--bs-primary); /* Active background color */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.308);
    }

    .navbar-custom.active .nav-link,
    .navbar-custom.active .navbar-brand {
        color: #ffffff; /* Active text color */
    }

    /* Additional styles for buttons */
    .btn-custom {
        background-color: #ff255e;
        color: #ffffff;
    }

    .btn-custom-outline {
        border-color: #ffffff;
        color: #ffffff;
    }

    .btn-custom-outline:hover {
        background-color: #ffffff;
        color: #ff255e;
    }

    /* Logo styles */
    #logo-active {
        display: none;
    }

    .custom-input {
        background-color: transparent;
        border: .5px solid rgba(122, 122, 122, 0.192) !important; /* Custom border color */
        border-radius: 8px; /* Rounded corners */
        padding: 8px !important; /* Padding inside the input */
        width: 100% !important; /* Full width */
        box-sizing: border-box; /* Ensure padding and border are included in the element's total width and height */
    }
    .custom-input:focus {
        /* border-color: var(--bs-primary) !important;  */
        background-color: var(--bs-priamry);
        outline: none;
        box-shadow: none
    }
    .navbar-custom.active #logo-default {
        display: none;
    }

    .navbar-custom.active #logo-active {
        display: block;
    }
    .text-primary{
        color: #ff255e !important;
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

    .navbar-custom {
        background-color: white;
        transition: background-color 0.3s;
    }

    .navbar-custom.active {
        background-color: #ff255e;
    }

    .navbar-brand h2 {
        color: inherit; /* Ensures the text color inherits from the navbar's color */
    }
    .owl-nav {
        padding: 0 10px
    }
    .owl-carousel .owl-nav button.owl-next,.owl-carousel .owl-nav button.owl-prev {
        padding: 10px !important;
        background-color: #f7f7f7;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    .owl-stage-outer{
        padding: 0 0 0 3rem
    }
    @media (min-width: 768px) {
        .w-md-25 {
            width: 25% !important;
        }
    }
    .btn{
        border-radius: 16px !important;
    }
    
    .owl-carousel .owl-nav button.owl-next, .owl-carousel .owl-nav button.owl-prev {
    padding: 10px !important;
    background-color: black;
    color: white;
    /* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; */
    border-radius: 50%;
    }
</style>
@endsection

@section('auth-content')

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
                        <a class="btn-r nav-link btn btn-light px-3 fw-bold" href="#">Contests</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn-r nav-link btn btn-light px-3 fw-bold" href="#">Participate</a>
                    </li>
                </ul>
                <div class="search-input me-5 w-25">
                    <input class="custom-input form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </div>
                <form class="d-flex me-5">
                    <button class="btn btn-light me-2" type="button"><b>Sign in</b></button>
                    <button class="btn-a btn btn-custom text-white" type="button"><b>Sign up</b></button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Bottom navigation for mobile and tablet views -->
    <div class="container-fluid fixed-top bg-light shadow p-2 d-lg-none w-100">
        <a class="text-dark text-center text-decoration-none" href="#">
            <h2 class="m-0">LOGO</h2>
        </a>
    </div>
    <div class="container-fluid fixed-bottom bg-light shadow p-2 d-lg-none">
        <div class="row text-center mx-3">
            <div class="col">
                <a class="text-dark" href="/">
                    <i class="bi bi-house bottom-nav-icon"></i>
                </a>
            </div>
            <div class="col">
                <a class="text-dark" href="/search">
                    <i class="bi bi-search bottom-nav-icon"></i>
                </a>
            </div>
            <div class="col">
                <a class="text-dark" href="/participate">
                    <i class="bi bi-plus-circle bottom-nav-icon"></i>
                </a>
            </div>
            <div class="col">
                <a class="text-dark" href="/contests">
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


    {{-- HOME SECTION --}}

    <section class="home-section">
        <div class="">
            <div class="row mt-5 pt-2">
                <div class="col-md-7 mt-5">
                        <img alt="Bidiboo" style="width:100%; height:auto;" src="https://cdn.playgrnd.media/v7/img/icons/babies/header-large.jpg?q=45">
                </div>
                <div class="col-md-5 mt-5 position-relative">
                    <div class="content" style="position: relative;top: 50%;left: 50%;transform: translate(-50%,-50%)"> 
                        <h4 class="text-center home-text py-2" style="font-size: 30px">Participate in the biggest
                            <br><span class="text-primary">baby photo contest</span></h4>
                        <h5 class="text-center text-green home-text1 pb-2"><span>$100,000</span> of prizes to be won every month!</h5>
                        <div class="text-center mt-3">
                            <a href="/participate" class="btn btn-primary w-50">Participate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 2 --}}
    <section class="pb-5" style="background: #f7f7f7;">
        <div class="mx-3 mt-2 d-flex justify-content-between align-items-center">
            <h3 class="mb-0">They won!</h3>
            <div class="btn-more">
                <a class="btn btn-link text-decoration-none text-primary p-0" href="/testimonials">More
                    <i class="fas fa-plus icon"></i>
                </a>
            </div>
        </div>

        <div class="owl-carousel owl-theme">
            <div class="item">
                <div class="card p-3 mt-4" style="border: none; border-radius: 20px; overflow: hidden;">
                    <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                            <a href="#" class="w-100">
                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                            </a>
                        </div>
                        <div class="w-75">
                            <div class="d-flex justify-content-between">
                                <a href="#" class="text-decoration-none text-dark fw-bold">Mel K.</a>
                                <div>
                                    <span class="badge bg-success">$150</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            
                        </div>
                    </div>
                    <div class="mt-3">
                        Happy with the competition so Easy and quick payment 😀
                    </div>
                    <small class="text-muted ">93rd · Boy Contest · 14 days ago</small>
                </div>
            </div>
            <div class="item">
                <div class="card p-3 mt-4" style="border: none; border-radius: 20px; overflow: hidden;">
                    <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                            <a href="#" class="w-100">
                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                            </a>
                        </div>
                        <div class="w-75">
                            <div class="d-flex justify-content-between">
                                <a href="#" class="text-decoration-none text-dark fw-bold">Mel K.</a>
                                <div>
                                    <span class="badge bg-success">$150</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            
                        </div>
                    </div>
                    <div class="mt-3">
                        Happy with the competition so Easy and quick payment 😀
                    </div>
                    <small class="text-muted ">93rd · Boy Contest · 14 days ago</small>
                </div>
            </div>
            <div class="item">
                <div class="card p-3 mt-4" style="border: none; border-radius: 20px; overflow: hidden;">
                    <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                            <a href="#" class="w-100">
                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                            </a>
                        </div>
                        <div class="w-75">
                            <div class="d-flex justify-content-between">
                                <a href="#" class="text-decoration-none text-dark fw-bold">Mel K.</a>
                                <div>
                                    <span class="badge bg-success">$150</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            
                        </div>
                    </div>
                    <div class="mt-3">
                        Happy with the competition so Easy and quick payment 😀
                    </div>
                    <small class="text-muted ">93rd · Boy Contest · 14 days ago</small>
                </div>
            </div>
            <div class="item">
                <div class="card p-3 mt-4" style="border: none; border-radius: 20px; overflow: hidden;">
                    <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                            <a href="#" class="w-100">
                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                            </a>
                        </div>
                        <div class="w-75">
                            <div class="d-flex justify-content-between">
                                <a href="#" class="text-decoration-none text-dark fw-bold">Mel K.</a>
                                <div>
                                    <span class="badge bg-success">$150</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            
                        </div>
                    </div>
                    <div class="mt-3">
                        Happy with the competition so Easy and quick payment 😀
                    </div>
                    <small class="text-muted ">93rd · Boy Contest · 14 days ago</small>
                </div>
            </div>
            <div class="item">
                <div class="card p-3 mt-4" style="border: none; border-radius: 20px; overflow: hidden;">
                    <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                            <a href="#" class="w-100">
                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                            </a>
                        </div>
                        <div class="w-75">
                            <div class="d-flex justify-content-between">
                                <a href="#" class="text-decoration-none text-dark fw-bold">Mel K.</a>
                                <div>
                                    <span class="badge bg-success">$150</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            
                        </div>
                    </div>
                    <div class="mt-3">
                        Happy with the competition so Easy and quick payment 😀
                    </div>
                    <small class="text-muted ">93rd · Boy Contest · 14 days ago</small>
                </div>
            </div>
            <div class="item">
                <div class="card p-3 mt-4" style="border: none; border-radius: 20px; overflow: hidden;">
                    <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                            <a href="#" class="w-100">
                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                            </a>
                        </div>
                        <div class="w-75">
                            <div class="d-flex justify-content-between">
                                <a href="#" class="text-decoration-none text-dark fw-bold">Mel K.</a>
                                <div>
                                    <span class="badge bg-success">$150</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            
                        </div>
                    </div>
                    <div class="mt-3">
                        Happy with the competition so Easy and quick payment 😀
                    </div>
                    <small class="text-muted ">93rd · Boy Contest · 14 days ago</small>
                </div>
            </div>
            <div class="item">
                <div class="card p-3 mt-4" style="border: none; border-radius: 20px; overflow: hidden;">
                    <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                            <a href="#" class="w-100">
                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                            </a>
                        </div>
                        <div class="w-75">
                            <div class="d-flex justify-content-between">
                                <a href="#" class="text-decoration-none text-dark fw-bold">Mel K.</a>
                                <div>
                                    <span class="badge bg-success">$150</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            
                        </div>
                    </div>
                    <div class="mt-3">
                        Happy with the competition so Easy and quick payment 😀
                    </div>
                    <small class="text-muted ">93rd · Boy Contest · 14 days ago</small>
                </div>
            </div>
            <div class="item">
                <div class="card p-3 mt-4" style="border: none; border-radius: 20px; overflow: hidden;">
                    <div class="d-flex align-items-center">
                        <div class="avatar me-3">
                            <a href="#" class="w-100">
                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg" srcset="https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=40&amp;h=40&amp;fm=jpg 1x, https://cdn.playgrnd.media/v7/img/ph/usr_28b5b6f6-8f90-467c-8975-3c763be26229/ph_ee540cfd-4823-414b-b90d-a1ce3ecbf840.jpg?w=80&amp;h=80&amp;fm=jpg 2x" sizes="40" alt="Mel K.">
                            </a>
                        </div>
                        <div class="w-75">
                            <div class="d-flex justify-content-between">
                                <a href="#" class="text-decoration-none text-dark fw-bold">Mel K.</a>
                                <div>
                                    <span class="badge bg-success">$150</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            
                        </div>
                    </div>
                    <div class="mt-3">
                        Happy with the competition so Easy and quick payment 😀
                    </div>
                    <small class="text-muted ">93rd · Boy Contest · 14 days ago</small>
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
    <section class="my-5">
        <div class="text-row my-3">
            <h2 class="text-center">Help them get their first votes!</h2>
            <h3 class="text-center text-primary">Start voting right now:</h3>
        </div>

        <div class="container mt-4">
            <div class="row">
                <!-- First Card -->
                <div class="col-xs-12 col-sm-6 mb-4">
                    <div class="card d-flex flex-column" style="border: none; box-shadow: none;">
                        <a href="/vote/delilah5489" class="text-decoration-none">
                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_44c0c8ff-09eb-43ab-a683-a1a39aca2a0c/chd_70dbd7e6-ed52-41e1-b80b-4c6a74042e44/ph_b32c1945-5d96-4520-bb33-66c7261f275d.jpg?w=3840&amp;h=3840&amp;q=45" 
                                 alt="Delilah" 
                                 class="card-img-top">
                                <div class="card-body d-flex flex-column text-dark">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h5 class="card-title text-dark mb-2">Nova</h5>
                                        <div>
                                            <i class="bi bi-trophy-fill"></i>1019<sup>th</sup>
                                        </div>
                                        <span>42 votes</span>
                                    </div>
                                    <p class="card-text text-dark mb-2">This is Nova! She is a year old and has the biggest personality! She loves to steal everyone’s food and knows how to high-five and give fist bumps!</p>
                                </div>
                        </a>
                    </div>
                </div>
        
                <!-- Second Card -->
                <div class="col-xs-12 col-sm-6 mb-4">
                    <div class="card d-flex flex-column" style="border: none; box-shadow: none;">
                        <a href="/vote/nova12257" class="text-decoration-none">
                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_2883bdfb-adfa-4e20-9956-50766c6d0168/chd_f1bd7a19-ca78-402c-aa4d-d9b170be92f8/ph_e96d3233-9849-440b-9d90-02ee1f33edc9.jpg?w=3840&amp;h=3840&amp;q=45" 
                                 alt="Nova" 
                                 class="card-img-top">
                            <div class="card-body d-flex flex-column text-dark">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h5 class="card-title text-dark mb-2">Nova</h5>
                                    <div>
                                        <i class="bi bi-trophy-fill"></i>1019<sup>th</sup>
                                    </div>
                                    <span>42 votes</span>
                                </div>
                                <p class="card-text text-dark mb-2">This is Nova! She is a year old and has the biggest personality! She loves to steal everyone’s food and knows how to high-five and give fist bumps!</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 6 --}}
    <section style="background-color: #f7f7f7;">
        <div class="container">
            <div class="row p-md-5">
                <div class="col-md-6 h-100">
                    <div class="container mt-5">
                        <div class="d-flex justify-content-center">
                            <div class="card position-relative p-4 w-100" style="border: none; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                                <h3 class="mt-2">Recent votes</h3>
                                <div class="list">
                                    <div class="list-item mt-2">
                                        <a href="/vote/noah8025" class="d-flex align-items-center text-decoration-none">
                                            <div class="me-3">
                                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_437231d2-10cf-44d3-9d5c-30949eee5785/chd_ea8af10c-8d17-469c-b684-1d2ffe6f7990/ph_f1addb5b-0c7f-403b-9cc3-023d80e16d4d.jpg?w=40&amp;h=40&amp;fm=jpg" 
                                                     sizes="40" class="rounded-circle" alt="Alexandra V.">
                                            </div>
                                            <div class="d-flex">
                                                <div class="fw-bold me-1 text-dark">Alexandra V.</div>
                                                <div class="fw-bold me-1 text-dark">voted for</div>
                                                <div class="fw-bold text-primary">Noah</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-item mt-2">
                                        <a href="/vote/noah8025" class="d-flex align-items-center text-decoration-none">
                                            <div class="me-3">
                                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_437231d2-10cf-44d3-9d5c-30949eee5785/chd_ea8af10c-8d17-469c-b684-1d2ffe6f7990/ph_f1addb5b-0c7f-403b-9cc3-023d80e16d4d.jpg?w=40&amp;h=40&amp;fm=jpg" 
                                                     sizes="40" class="rounded-circle" alt="Alexandra V.">
                                            </div>
                                            <div class="d-flex">
                                                <div class="fw-bold me-1 text-dark">Alexandra V.</div>
                                                <div class="fw-bold me-1 text-dark">voted for</div>
                                                <div class="fw-bold text-primary">Noah</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-item mt-2">
                                        <a href="/vote/noah8025" class="d-flex align-items-center text-decoration-none">
                                            <div class="me-3">
                                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_437231d2-10cf-44d3-9d5c-30949eee5785/chd_ea8af10c-8d17-469c-b684-1d2ffe6f7990/ph_f1addb5b-0c7f-403b-9cc3-023d80e16d4d.jpg?w=40&amp;h=40&amp;fm=jpg" 
                                                     sizes="40" class="rounded-circle" alt="Alexandra V.">
                                            </div>
                                            <div class="d-flex">
                                                <div class="fw-bold me-1 text-dark">Alexandra V.</div>
                                                <div class="fw-bold me-1 text-dark">voted for</div>
                                                <div class="fw-bold text-primary">Noah</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-item mt-2">
                                        <a href="/vote/noah8025" class="d-flex align-items-center text-decoration-none">
                                            <div class="me-3">
                                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_437231d2-10cf-44d3-9d5c-30949eee5785/chd_ea8af10c-8d17-469c-b684-1d2ffe6f7990/ph_f1addb5b-0c7f-403b-9cc3-023d80e16d4d.jpg?w=40&amp;h=40&amp;fm=jpg" 
                                                     sizes="40" class="rounded-circle" alt="Alexandra V.">
                                            </div>
                                            <div class="d-flex">
                                                <div class="fw-bold me-1 text-dark">Alexandra V.</div>
                                                <div class="fw-bold me-1 text-dark">voted for</div>
                                                <div class="fw-bold text-primary">Noah</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-item mt-2">
                                        <a href="/vote/noah8025" class="d-flex align-items-center text-decoration-none">
                                            <div class="me-3">
                                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_437231d2-10cf-44d3-9d5c-30949eee5785/chd_ea8af10c-8d17-469c-b684-1d2ffe6f7990/ph_f1addb5b-0c7f-403b-9cc3-023d80e16d4d.jpg?w=40&amp;h=40&amp;fm=jpg" 
                                                     sizes="40" class="rounded-circle" alt="Alexandra V.">
                                            </div>
                                            <div class="d-flex">
                                                <div class="fw-bold me-1 text-dark">Alexandra V.</div>
                                                <div class="fw-bold me-1 text-dark">voted for</div>
                                                <div class="fw-bold text-primary">Noah</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-item mt-2">
                                        <a href="/vote/noah8025" class="d-flex align-items-center text-decoration-none">
                                            <div class="me-3">
                                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_437231d2-10cf-44d3-9d5c-30949eee5785/chd_ea8af10c-8d17-469c-b684-1d2ffe6f7990/ph_f1addb5b-0c7f-403b-9cc3-023d80e16d4d.jpg?w=40&amp;h=40&amp;fm=jpg" 
                                                     sizes="40" class="rounded-circle" alt="Alexandra V.">
                                            </div>
                                            <div class="d-flex">
                                                <div class="fw-bold me-1 text-dark">Alexandra V.</div>
                                                <div class="fw-bold me-1 text-dark">voted for</div>
                                                <div class="fw-bold text-primary">Noah</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-item mt-2">
                                        <a href="/vote/noah8025" class="d-flex align-items-center text-decoration-none">
                                            <div class="me-3">
                                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_437231d2-10cf-44d3-9d5c-30949eee5785/chd_ea8af10c-8d17-469c-b684-1d2ffe6f7990/ph_f1addb5b-0c7f-403b-9cc3-023d80e16d4d.jpg?w=40&amp;h=40&amp;fm=jpg" 
                                                     sizes="40" class="rounded-circle" alt="Alexandra V.">
                                            </div>
                                            <div class="d-flex">
                                                <div class="fw-bold me-1 text-dark">Alexandra V.</div>
                                                <div class="fw-bold me-1 text-dark">voted for</div>
                                                <div class="fw-bold text-primary">Noah</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-item mt-2">
                                        <a href="/vote/noah8025" class="d-flex align-items-center text-decoration-none">
                                            <div class="me-3">
                                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_437231d2-10cf-44d3-9d5c-30949eee5785/chd_ea8af10c-8d17-469c-b684-1d2ffe6f7990/ph_f1addb5b-0c7f-403b-9cc3-023d80e16d4d.jpg?w=40&amp;h=40&amp;fm=jpg" 
                                                     sizes="40" class="rounded-circle" alt="Alexandra V.">
                                            </div>
                                            <div class="d-flex">
                                                <div class="fw-bold me-1 text-dark">Alexandra V.</div>
                                                <div class="fw-bold me-1 text-dark">voted for</div>
                                                <div class="fw-bold text-primary">Noah</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-item mt-2">
                                        <a href="/vote/noah8025" class="d-flex align-items-center text-decoration-none">
                                            <div class="me-3">
                                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_437231d2-10cf-44d3-9d5c-30949eee5785/chd_ea8af10c-8d17-469c-b684-1d2ffe6f7990/ph_f1addb5b-0c7f-403b-9cc3-023d80e16d4d.jpg?w=40&amp;h=40&amp;fm=jpg" 
                                                     sizes="40" class="rounded-circle" alt="Alexandra V.">
                                            </div>
                                            <div class="d-flex">
                                                <div class="fw-bold me-1 text-dark">Alexandra V.</div>
                                                <div class="fw-bold me-1 text-dark">voted for</div>
                                                <div class="fw-bold text-primary">Noah</div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="list-item mt-2">
                                        <a href="/vote/noah8025" class="d-flex align-items-center text-decoration-none">
                                            <div class="me-3">
                                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_437231d2-10cf-44d3-9d5c-30949eee5785/chd_ea8af10c-8d17-469c-b684-1d2ffe6f7990/ph_f1addb5b-0c7f-403b-9cc3-023d80e16d4d.jpg?w=40&amp;h=40&amp;fm=jpg" 
                                                     sizes="40" class="rounded-circle" alt="Alexandra V.">
                                            </div>
                                            <div class="d-flex">
                                                <div class="fw-bold me-1 text-dark">Alexandra V.</div>
                                                <div class="fw-bold me-1 text-dark">voted for</div>
                                                <div class="fw-bold text-primary">Noah</div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 h-100">
                    <div class="container mt-5">
                        <div class="d-flex justify-content-center">
                            <div class="card position-relative" style="border: none; border-radius: 20px; overflow: hidden;">
                                <img src="https://cdn.playgrnd.media/v7/img/ph/usr_54f3a947-8f69-4c23-b09f-6a11e70cd4cb/chd_32c12051-d23c-48e9-87d3-9a3913fe5e4a/ph_4a55bd23-53d7-4d56-97db-d4806cda4e15.jpg?w=3840&amp;h=7680&amp;q=45" class="w-100 h-100" alt="Luke" style="object-fit: cover;">
                                <div class="card-img-overlay d-flex flex-column justify-content-end p-0">
                                    <div class="text-center bg-white py-3 w-100">
                                        <h5 class="card-title text-dark mb-0"><strong style="font-size: 1.2rem;">Add your photo for free and win up to <span class="text-green">$5,000</span></strong></h5>
                                        <button class="btn btn-primary mt-2">Participate</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 7 --}}
    <section class="pb-5 mt-5" style="background-color: #ff255e;">
        <div class="row py-5">
            <div class="col-md-6">
                <div class="container d-flex justify-content-center h-100">
                    <div class="text-center">
                        <h3 class="mb-4 text-white">Is your <span>child</span> the cutest? Join <br> for free and win up to <span>$5,000</span>!</h3>
                        <div class="position-relative" style="padding-top: 100%;">
                            <img src="https://cdn.playgrnd.media/v7/img/icons/babies/participate.png?fm=png&q=70&w=3840&h=3840&q=45" 
                                 alt="Is your child the cutest? Join for free and win up to $5,000!" 
                                 loading="lazy" 
                                 decoding="async" 
                                 class="position-absolute img-fluid top-0 start-0 w-100 pb-3" 
                                 style="object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="container h-100">
                    <div class="d-flex justify-content-center">
                        <div class="card position-relative p-4 w-100" style="border: none; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <h4>Latest Winners</h4>
                            <div class="list">
                                <div class="list-item mt-2">
                                    <a class="d-flex align-items-center text-decoration-none" href="/vote/levi5577">
                                        <div class="me-3">
                                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_a0581709-95ed-44c4-935f-d80eafe6df56/chd_9e9003a6-9cab-4b1e-ab07-376237232500/ph_097b8a2b-26be-4578-8f78-7a52839d0a60.jpg?w=40&h=40&fm=jpg" 
                                                 alt="Avatar" 
                                                 class="rounded-circle" 
                                                 style="width: 40px; height: 40px;">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="bi bi-trophy-fill text-warning"></i>
                                                </div>
                                                <div class="text-dark fw-bold"><strong class="text-green">$500 </strong>won for <strong class="text-primary">Levi</strong></div>
                                            </div>
                                            <div>
                                                <span class="badge bg-success ms-2">PAID</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-item mt-2">
                                    <a class="d-flex align-items-center text-decoration-none" href="/vote/levi5577">
                                        <div class="me-3">
                                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_a0581709-95ed-44c4-935f-d80eafe6df56/chd_9e9003a6-9cab-4b1e-ab07-376237232500/ph_097b8a2b-26be-4578-8f78-7a52839d0a60.jpg?w=40&h=40&fm=jpg" 
                                                 alt="Avatar" 
                                                 class="rounded-circle" 
                                                 style="width: 40px; height: 40px;">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="bi bi-trophy-fill text-warning"></i>
                                                </div>
                                                <div class="text-dark fw-bold"><strong class="text-green">$500 </strong>won for <strong class="text-primary">Levi</strong></div>
                                            </div>
                                            <div>
                                                <span class="badge bg-success ms-2">PAID</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-item mt-2">
                                    <a class="d-flex align-items-center text-decoration-none" href="/vote/levi5577">
                                        <div class="me-3">
                                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_a0581709-95ed-44c4-935f-d80eafe6df56/chd_9e9003a6-9cab-4b1e-ab07-376237232500/ph_097b8a2b-26be-4578-8f78-7a52839d0a60.jpg?w=40&h=40&fm=jpg" 
                                                 alt="Avatar" 
                                                 class="rounded-circle" 
                                                 style="width: 40px; height: 40px;">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="bi bi-trophy-fill text-warning"></i>
                                                </div>
                                                <div class="text-dark fw-bold"><strong class="text-green">$500 </strong>won for <strong class="text-primary">Levi</strong></div>
                                            </div>
                                            <div>
                                                <span class="badge bg-success ms-2">PAID</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-item mt-2">
                                    <a class="d-flex align-items-center text-decoration-none" href="/vote/levi5577">
                                        <div class="me-3">
                                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_a0581709-95ed-44c4-935f-d80eafe6df56/chd_9e9003a6-9cab-4b1e-ab07-376237232500/ph_097b8a2b-26be-4578-8f78-7a52839d0a60.jpg?w=40&h=40&fm=jpg" 
                                                 alt="Avatar" 
                                                 class="rounded-circle" 
                                                 style="width: 40px; height: 40px;">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="bi bi-trophy-fill text-warning"></i>
                                                </div>
                                                <div class="text-dark fw-bold"><strong class="text-green">$500 </strong>won for <strong class="text-primary">Levi</strong></div>
                                            </div>
                                            <div>
                                                <span class="badge bg-success ms-2">PAID</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-item mt-2">
                                    <a class="d-flex align-items-center text-decoration-none" href="/vote/levi5577">
                                        <div class="me-3">
                                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_a0581709-95ed-44c4-935f-d80eafe6df56/chd_9e9003a6-9cab-4b1e-ab07-376237232500/ph_097b8a2b-26be-4578-8f78-7a52839d0a60.jpg?w=40&h=40&fm=jpg" 
                                                 alt="Avatar" 
                                                 class="rounded-circle" 
                                                 style="width: 40px; height: 40px;">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="bi bi-trophy-fill text-warning"></i>
                                                </div>
                                                <div class="text-dark fw-bold"><strong class="text-green">$500 </strong>won for <strong class="text-primary">Levi</strong></div>
                                            </div>
                                            <div>
                                                <span class="badge bg-success ms-2">PAID</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-item mt-2">
                                    <a class="d-flex align-items-center text-decoration-none" href="/vote/levi5577">
                                        <div class="me-3">
                                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_a0581709-95ed-44c4-935f-d80eafe6df56/chd_9e9003a6-9cab-4b1e-ab07-376237232500/ph_097b8a2b-26be-4578-8f78-7a52839d0a60.jpg?w=40&h=40&fm=jpg" 
                                                 alt="Avatar" 
                                                 class="rounded-circle" 
                                                 style="width: 40px; height: 40px;">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="bi bi-trophy-fill text-warning"></i>
                                                </div>
                                                <div class="text-dark fw-bold"><strong class="text-green">$500 </strong>won for <strong class="text-primary">Levi</strong></div>
                                            </div>
                                            <div>
                                                <span class="badge bg-success ms-2">PAID</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-item mt-2">
                                    <a class="d-flex align-items-center text-decoration-none" href="/vote/levi5577">
                                        <div class="me-3">
                                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_a0581709-95ed-44c4-935f-d80eafe6df56/chd_9e9003a6-9cab-4b1e-ab07-376237232500/ph_097b8a2b-26be-4578-8f78-7a52839d0a60.jpg?w=40&h=40&fm=jpg" 
                                                 alt="Avatar" 
                                                 class="rounded-circle" 
                                                 style="width: 40px; height: 40px;">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="bi bi-trophy-fill text-warning"></i>
                                                </div>
                                                <div class="text-dark fw-bold"><strong class="text-green">$500 </strong>won for <strong class="text-primary">Levi</strong></div>
                                            </div>
                                            <div>
                                                <span class="badge bg-success ms-2">PAID</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="list-item mt-2">
                                    <a class="d-flex align-items-center text-decoration-none" href="/vote/levi5577">
                                        <div class="me-3">
                                            <img src="https://cdn.playgrnd.media/v7/img/ph/usr_a0581709-95ed-44c4-935f-d80eafe6df56/chd_9e9003a6-9cab-4b1e-ab07-376237232500/ph_097b8a2b-26be-4578-8f78-7a52839d0a60.jpg?w=40&h=40&fm=jpg" 
                                                 alt="Avatar" 
                                                 class="rounded-circle" 
                                                 style="width: 40px; height: 40px;">
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <div class="me-2">
                                                    <i class="bi bi-trophy-fill text-warning"></i>
                                                </div>
                                                <div class="text-dark fw-bold"><strong class="text-green">$500 </strong>won for <strong class="text-primary">Levi</strong></div>
                                            </div>
                                            <div>
                                                <span class="badge bg-success ms-2">PAID</span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-center">
                    <a class="btn btn-outline-light btn-lg me-2 w-md-25" href="#">Participate</a>
                    <a class="btn btn-light btn-lg w-md-25" href="#">Participate</a>
                </div>
            </div>
        </div>
    </section>

    {{-- SECTION 8 --}}
    <section class="py-5" style="background-color: #f7f7f7;">
        <div class="row">
            <div class="col-md-6 h-100">
                <div class="container mt-5">
                    <div class="d-flex justify-content-center">
                        <div class="card position-relative p-4 w-100" style="border: none; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                            <h4 class="mt-2">Water Park 🌊</h4>
                            <h6 class="text-primary">Featured photos</h6>
                            
                            <div class="images-group">
                                <div class="row g-1"> <!-- Set gap between columns -->
                                    <div class="col-md-6">
                                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways MuiImageListItem-root MuiImageListItem-quilted mui-166el4d" 
                                           style="height:186px;grid-column-end:span 2;grid-row-end:span 2" 
                                           href="/vote/poppy520">
                                            <img class="MuiBox-root mui-usogvi rounded w-100 h-100" 
                                                 alt="amusement_park, baby_float, child, day, fun, games, girl, infant, inflatable, joy, leisure, person, pink, play, playground, pool, recreation, summer, swimming_pool, toddler" 
                                                 sizes="182px" 
                                                 loading="lazy" 
                                                 src="https://cdn.playgrnd.media/v7/img/ph/usr_bb699adf-ff00-41f8-af29-bcac7fc9cafc/chd_e9ef1600-0a00-48fc-9b6d-288481d1d0f4/ph_7c16468a-0df9-46b4-b5e3-db9e41ef723d.jpg?align=45,29&amp;w=182&amp;h=182&amp;fm=jpg">
                                        </a>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row g-1"> <!-- Set gap between columns -->
                                            <div class="col-md-6 mb-1">
                                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways MuiImageListItem-root MuiImageListItem-quilted mui-166el4d" 
                                                   style="height:91px;grid-column-end:span 1;grid-row-end:span 1" 
                                                   href="/vote/kaylee420">
                                                    <img class="MuiBox-root mui-usogvi rounded w-100" 
                                                         alt="amusement_park, child, fun, girl, joy, leisure, park, person, play, recreation, smile, summer, swimming_pool, swimwear, toddler, vacation, water, water_park" 
                                                         sizes="91px" 
                                                         loading="lazy" 
                                                         src="https://cdn.playgrnd.media/v7/img/ph/usr_49c3e563-b84c-4d46-b1f0-fe568f5070f7/chd_43e05e32-e1f0-480e-8545-870c19590fb7/ph_c27961f3-3e42-4353-b783-32beeaa5cc88.jpg?align=45,39&amp;w=91&amp;h=91&amp;fm=jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways MuiImageListItem-root MuiImageListItem-quilted mui-166el4d" 
                                                   style="height:91px;grid-column-end:span 1;grid-row-end:span 1" 
                                                   href="/vote/jake562">
                                                    <img class="MuiBox-root mui-usogvi rounded w-100" 
                                                         alt="amusement_park, child, fun, girl, inflatable, joy, leisure, person, personal_protective_equipment, play, pool, product, recreation, summer, swimming, swimming_pool, swimwear, toddler, vacation, water" 
                                                         sizes="91px" 
                                                         loading="lazy" 
                                                         src="https://cdn.playgrnd.media/v7/img/ph/usr_6ae03b11-147f-46f5-a743-550ae03ff7d8/chd_311a4579-5e54-4e20-b47a-2c095c0bbe23/ph_63fbc656-e610-4b45-8637-44447d5d6a5f.jpg?align=102,54&amp;w=91&amp;h=91&amp;fm=jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-12">
                                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways MuiImageListItem-root MuiImageListItem-quilted mui-166el4d" 
                                                   style="height:89px;grid-column-end:span 2;grid-row-end:span 1" 
                                                   href="/vote/jamie325">
                                                    <img class="MuiBox-root mui-usogvi rounded w-100" 
                                                         alt="bathing, blue, child, fun, girl, joy, leisure, person, play, recreation, smile, summer, swimming, swimming_pool, toddler, vacation, vertebrate, water, water_park" 
                                                         sizes="182px" 
                                                         loading="lazy" 
                                                         src="https://cdn.playgrnd.media/v7/img/ph/usr_e7843282-ec08-4352-8a24-0838e4707014/chd_feb85da4-cb05-42a5-94ff-73e88c0c8eed/ph_ddfd1bf9-45e0-4ec4-914e-8cbbaea25fa4.jpg?align=41,29&amp;w=182&amp;h=91&amp;fm=jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-1 mt-1"> <!-- Set gap between columns -->
                                    <div class="col-md-6">
                                        <div class="row g-1"> <!-- Set gap between columns -->
                                            <div class="col-md-6 mb-1">
                                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways MuiImageListItem-root MuiImageListItem-quilted mui-166el4d" 
                                                   style="height:91px;grid-column-end:span 1;grid-row-end:span 1" 
                                                   href="/vote/kaylee420">
                                                    <img class="MuiBox-root mui-usogvi rounded w-100" 
                                                         alt="amusement_park, child, fun, girl, joy, leisure, park, person, play, recreation, smile, summer, swimming_pool, swimwear, toddler, vacation, water, water_park" 
                                                         sizes="91px" 
                                                         loading="lazy" 
                                                         src="https://cdn.playgrnd.media/v7/img/ph/usr_49c3e563-b84c-4d46-b1f0-fe568f5070f7/chd_43e05e32-e1f0-480e-8545-870c19590fb7/ph_c27961f3-3e42-4353-b783-32beeaa5cc88.jpg?align=45,39&amp;w=91&amp;h=91&amp;fm=jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-6 mb-1">
                                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways MuiImageListItem-root MuiImageListItem-quilted mui-166el4d" 
                                                   style="height:91px;grid-column-end:span 1;grid-row-end:span 1" 
                                                   href="/vote/jake562">
                                                    <img class="MuiBox-root mui-usogvi rounded w-100" 
                                                         alt="amusement_park, child, fun, girl, inflatable, joy, leisure, person, personal_protective_equipment, play, pool, product, recreation, summer, swimming, swimming_pool, swimwear, toddler, vacation, water" 
                                                         sizes="91px" 
                                                         loading="lazy" 
                                                         src="https://cdn.playgrnd.media/v7/img/ph/usr_6ae03b11-147f-46f5-a743-550ae03ff7d8/chd_311a4579-5e54-4e20-b47a-2c095c0bbe23/ph_63fbc656-e610-4b45-8637-44447d5d6a5f.jpg?align=102,54&amp;w=91&amp;h=91&amp;fm=jpg">
                                                </a>
                                            </div>
                                            <div class="col-md-12">
                                                <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways MuiImageListItem-root MuiImageListItem-quilted mui-166el4d" 
                                                   style="height:89px;grid-column-end:span 2;grid-row-end:span 1" 
                                                   href="/vote/jamie325">
                                                    <img class="MuiBox-root mui-usogvi rounded w-100" 
                                                         alt="bathing, blue, child, fun, girl, joy, leisure, person, play, recreation, smile, summer, swimming, swimming_pool, toddler, vacation, vertebrate, water, water_park" 
                                                         sizes="182px" 
                                                         loading="lazy" 
                                                         src="https://cdn.playgrnd.media/v7/img/ph/usr_e7843282-ec08-4352-8a24-0838e4707014/chd_feb85da4-cb05-42a5-94ff-73e88c0c8eed/ph_ddfd1bf9-45e0-4ec4-914e-8cbbaea25fa4.jpg?align=41,29&amp;w=182&amp;h=91&amp;fm=jpg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <a class="MuiTypography-root MuiTypography-inherit MuiLink-root MuiLink-underlineAlways MuiImageListItem-root MuiImageListItem-quilted mui-166el4d" 
                                           style="height:186px;grid-column-end:span 2;grid-row-end:span 2" 
                                           href="/vote/poppy520">
                                            <img class="MuiBox-root mui-usogvi rounded w-100 h-100" 
                                                 alt="amusement_park, baby_float, child, day, fun, games, girl, infant, inflatable, joy, leisure, person, pink, play, playground, pool, recreation, summer, swimming_pool, toddler" 
                                                 sizes="182px" 
                                                 loading="lazy" 
                                                 src="https://cdn.playgrnd.media/v7/img/ph/usr_bb699adf-ff00-41f8-af29-bcac7fc9cafc/chd_e9ef1600-0a00-48fc-9b6d-288481d1d0f4/ph_7c16468a-0df9-46b4-b5e3-db9e41ef723d.jpg?align=45,29&amp;w=182&amp;h=182&amp;fm=jpg">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 h-100">
                <div class="container mt-5">
                    <div class="d-flex justify-content-center">
                        <div class="card p-4 w-100" style="border: none; border-radius: 20px; overflow: hidden; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                          <div class="content">
                            <h3 class="text-center">Joshua</h3>
                            <h5 class="text-primary text-center">Featured baby name</h5>

                            <div class="container my-3">
                                <div class="position-relative">
                                  <div class="d-flex align-items-center justify-content-center">
                                    <!-- Additional Avatars -->
                                    <div class="col-auto">
                                      <a href="/vote/joshua3765">
                                        <img src="https://cdn.playgrnd.media/v7/img/ph/usr_5a6ff1cc-cc87-4834-b878-40829f63ab94/chd_4a065181-37ff-4a03-ad2f-248b6d4d18c6/ph_039f9b94-f20e-4cac-9aec-15d6f32b6a2a.jpg?w=40&h=40&fm=jpg"
                                             class="avatar"
                                             alt="User Image">
                                      </a>
                                    </div>
                                    <div class="col-auto">
                                      <a href="/vote/joshua3766">
                                        <img src="https://cdn.playgrnd.media/v7/img/ph/usr_e3d38ba2-2069-4563-8af8-ba05d9fe70fd/chd_cde409d9-662c-45bb-9e2e-139e757626be/ph_bb47e451-1ec3-4afa-a89a-fe88c5cd45b8.jpg?w=40&h=40&fm=jpg"
                                             class="avatar"
                                             alt="User Image">
                                      </a>
                                    </div>
                                    <div class="col-auto">
                                      <a href="/vote/joshua3767">
                                        <img src="https://cdn.playgrnd.media/v7/img/ph/usr_91e3b64e-c49b-4748-bdce-a4f06fd47c93/chd_ebc8e07f-5814-4ffd-9f3b-48a483b2be46/ph_f434d9ad-25d4-463b-b209-16f6c7bc0205.jpg?w=40&h=40&fm=jpg"
                                             class="avatar"
                                             alt="User Image">
                                      </a>
                                    </div>
                                    <div class="col-auto">
                                      <a href="/vote/joshua3769">
                                        <img src="https://cdn.playgrnd.media/v7/img/ph/usr_fded2c53-6cf1-4849-821f-24fb9ed39d41/chd_a9c927d6-d502-4f74-bcd2-90c6dc39f9b6/ph_d3f5c8b5-1115-4169-812e-73fbd1dff364.png?w=40&h=40&fm=jpg"
                                             class="avatar"
                                             alt="User Image">
                                      </a>
                                    </div>
                                    <div class="col-auto">
                                      <a href="/vote/joshua3770">
                                        <img src="https://cdn.playgrnd.media/v7/img/ph/usr_b00c4055-b5f5-423b-b6f0-a443382f7346/chd_1f2fc212-11ba-4312-92f0-c3bf136cb87e/ph_30a7a34f-43d3-45d3-afcd-3347a675d3eb.jpg?w=40&h=40&fm=jpg"
                                             class="avatar"
                                             alt="User Image">
                                      </a>
                                    </div>
                                    <div class="col-auto">
                                      <a href="/vote/joshua3771">
                                        <img src="https://cdn.playgrnd.media/v7/img/ph/usr_b30c62fe-8ac9-4c44-9dee-626772c75845/chd_ef58f655-3c81-4f26-8d31-16e945b7c68a/ph_1b2149cd-7ff3-4dde-a94c-645f5b6deeb2.jpg?w=40&h=40&fm=jpg"
                                             class="avatar"
                                             alt="User Image">
                                      </a>
                                    </div>
                                    <!-- Overlay Avatar -->
                                    <div class="col-auto">
                                        <div class="d-flex align-items-center justify-content-center avatar-overlay">
                                        +2
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <p>The name Joshua is often associated with creativity and a love for adventure. Many with this name are said to have a deep appreciation for the arts and are driven by a desire to explore the unknown.</p>
                            <div class="text-center">
                                <button class="btn btn-primary w-50">Read more</button>
                            </div>
                            <h6 class="mt-4 fw-bold text-center">Popular baby names 2024</h6>
                            <div class="name-list">
                                <ul class="list-unstyled">
                                    <li class="mt-1">
                                        <a class="text-decoration-none d-flex justify-content-center align-items-center" href="#">
                                            <span class="text-primary fw-bold me-2">Carter</span>
                                            <span class="text-secondary fw-bold">4,900+</span>
                                        </a>
                                    </li>
                                    <li class="mt-1">
                                        <a class="text-decoration-none d-flex justify-content-center align-items-center" href="#">
                                            <span class="text-primary fw-bold me-2">Hudson</span>
                                            <span class="text-secondary fw-bold">2,400+</span>
                                        </a>
                                    </li>
                                    <li class="mt-1">
                                        <a class="text-decoration-none d-flex justify-content-center align-items-center" href="#">
                                            <span class="text-primary fw-bold me-2">Elijah</span>
                                            <span class="text-secondary fw-bold">6,000+</span>
                                        </a>
                                    </li>
                                    <li class="mt-1">
                                        <a class="text-decoration-none d-flex justify-content-center align-items-center" href="#">
                                            <span class="text-primary fw-bold me-2">Harper</span>
                                            <span class="text-secondary fw-bold">4,100+</span>
                                        </a>
                                    </li>
                                    <li class="mt-1">
                                        <a class="text-decoration-none d-flex justify-content-center align-items-center" href="#">
                                            <span class="text-primary fw-bold me-2">Nevaeh</span>
                                            <span class="text-secondary fw-bold">3,400+</span>
                                        </a>
                                    </li>
                                    <li class="mt-1">
                                        <a class="text-decoration-none d-flex justify-content-center align-items-center" href="#">
                                            <span class="text-primary fw-bold me-2">Ellie</span>
                                            <span class="text-secondary fw-bold">2,400+</span>
                                        </a>
                                    </li>
                                    <li class="mt-1">
                                        <a class="text-decoration-none d-flex justify-content-center align-items-center" href="#">
                                            <span class="text-primary fw-bold me-2">Jayden</span>
                                            <span class="text-secondary fw-bold">4,200+</span>
                                        </a>
                                    </li>
                                    <li class="mt-1">
                                        <a class="text-decoration-none d-flex justify-content-center align-items-center" href="#">
                                            <span class="text-primary fw-bold me-2">Charlie</span>
                                            <span class="text-secondary fw-bold">3,700+</span>
                                        </a>
                                    </li>
                                    <li class="mt-1">
                                        <a class="text-decoration-none d-flex justify-content-center align-items-center" href="#">
                                            <span class="text-primary fw-bold me-2">Lily</span>
                                            <span class="text-secondary fw-bold">3,200+</span>
                                        </a>
                                    </li>
                                    <li class="mt-1">
                                        <a class="text-decoration-none d-flex justify-content-center align-items-center" href="#">
                                            <span class="text-primary fw-bold me-2">Emily</span>
                                            <span class="text-secondary fw-bold">2,700+</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="text-center mt-4">
                                    <button class="btn btn-outline-dark w-50">View all names</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer content -->
  <div class="row m-4 px-md-5">
    <!-- Social Media Links -->
    <div class="col-md-12 d-flex align-items-center justify-content-center mb-3">
      <p class="mb-1 text-dark fw-bold me-2">Follow us:</p>
      <div class="d-flex ">
        <a class="text-dark me-2" href="#" rel="nofollow" target="_blank">
          <svg class="bi bi-facebook" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
            <path d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2m13 2h-2.5A3.5 3.5 0 0 0 12 8.5V11h-2v3h2v7h3v-7h3v-3h-3V9a1 1 0 0 1 1-1h2V5z"/>
          </svg>
        </a>
        <a class="text-dark" href="#" rel="nofollow" target="_blank">
          <svg class="bi bi-instagram" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
            <path d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z"/>
          </svg>
        </a>
      </div>
    </div>

    <!-- Navigation Links -->
    <div class="col-md-12 mb-3">
        <div class="d-flex flex-wrap justify-content-center">
        <a class="text-decoration-none text-dark fw-bold me-2" href="#">Bidiboo</a>
        <span class="text-dark fw-bold me-2">|</span>
        <a class="text-decoration-none text-dark fw-bold me-2" href="#">Baby Photo Contest</a>
        <span class="text-dark fw-bold me-2">|</span>
        <a class="text-decoration-none text-dark fw-bold me-2" href="#">Winners</a>
        <span class="text-dark fw-bold me-2">|</span>
        <a class="text-decoration-none text-dark fw-bold me-2" href="#">Help</a>
        <span class="text-dark fw-bold me-2">|</span>
        <a class="text-decoration-none text-dark fw-bold me-2" href="#">Contact</a>
        <span class="text-dark fw-bold me-2">|</span>
        <a class="text-decoration-none text-dark fw-bold me-2" href="#">Baby names</a>
        <span class="text-dark fw-bold me-2">|</span>
        <a class="text-decoration-none text-dark fw-bold me-2" href="#">Terms & Conditions</a>
        <span class="text-dark fw-bold me-2">|</span>
        <a class="text-decoration-none text-dark fw-bold me-2" href="#">Is Bidiboo a scam?</a>
        <span class="text-dark fw-bold me-2">|</span>
        <a class="text-decoration-none text-dark fw-bold" target="_blank" href="#">About us</a>
        </div>
    </div>

        <!-- Copyright and Description -->
        <div class="col-md-12 mb-3 text-center">
        <small>&copy; 2009-2024 Playground USA Inc. All rights reserved.</small><br>
        <small class="text-muted">Do you love your child so much that you'd like to show him off to the entire world? Then come and join Bidiboo, the largest photo contest in the US & UK for babies and children up to 12 years old! With thousands of winners already, your cute child could be next. All you have to do is sign up for free, upload their photo and vote for them. The participants with the most votes will be rewarded with money and a certificate for the cutest baby of the month! Reach the top of the leaderboard by asking loved ones to vote, and you could claim the Jackpot! Bidiboo is more than just a place to compete. It's also a place to connect and create memories with other parents. Register today and you might see your baby be crowned the cutest of the month and become a baby model!</small>
        </div>

        <!-- Additional Contests -->
        <div class="col-md-12">
            <div class="d-flex justify-content-center">
                <div class="text-center">
                    <a class="text-decoration-none text-dark me-2 text-center" href="#"><span class="me-2">Check out more contests: </sapn> KingPet: Dog and Cat Photo Contest</a>
                    <span class="text-dark fw-bold me-2">|</span>
                    <a class="text-decoration-none text-dark me-2" href="#">Little Miss Beauty: Child Beauty Pageant</a>
                    <span class="text-dark fw-bold me-2">|</span>
                    <a class="text-decoration-none text-dark me-2" href="#">LullaPanda: Child Photo Contest</a>
                    <span class="text-dark fw-bold me-2">|</span>
                    <a class="text-decoration-none text-dark" href="#">Pageant Dog: Dog Photo Contest</a>
                </div>
            </div>
        </div>
    </div>
    </div>


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
         $(document).ready(function () {
            var navbar = $('.navbar-custom');
            $(window).on('scroll', function () {
                if ($(window).scrollTop() > 50) {
                    navbar.addClass('active');
                    $('.btn-r').removeClass('btn-light').addClass('btn-primary');
                    $('.btn-a').removeClass('btn-custom').addClass('btn-outline-light');
                } else {
                    navbar.removeClass('active');
                    $('.btn-r').removeClass('btn-primary').addClass('btn-light');
                    $('.btn-a').removeClass('btn-outline-light').addClass('btn-custom');
                }
            });
        });

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