@extends('layouts.app')

@section('styles')
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

    /* Logo styles */
    #logo-active {
        display: none;
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
    padding: 10px 16px !important;
    background-color: black;
    color: white;
    /* box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; */
    border-radius: 50%;
    }
</style>
@endsection

@section('content')
    <div class="container-fluid fixed-top bg-light shadow p-2 d-lg-none w-100">
        <a class="text-dark text-center text-decoration-none" href="#">
            <h2 class="m-0">Contest</h2>
        </a>
    </div>
    {{-- SECTION 1 --}}
    <section class="my-5 mt-5">
        <div class="container mt-4 pt-4">
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

@endsection

@section('script')
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
@endsection