@extends('layouts.auth')

@section('styles')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
<!-- Font Awesome for the star icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
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
        background-color: #6c757d;
        /* Bootstrap's bg-secondary color */
        color: #ffffff;
        /* Bootstrap's text-white color */
        z-index: 1;
        font-size: 14px;
    }

    .card-img-top {
        border-radius: 15px;
        height: 500px;
        /* Fixed height for equal image sizes */
        object-fit: cover;
        /* Ensure images cover the area without distortion */
        width: 100%;
        /* Ensure the image takes full width */
    }

    .card-body {
        flex: 1 1 auto;
        /* Allow card body to expand and push footer down */
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
        font-size: 12px;
        /* Adjust the size as needed */
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
        background-color: #ffffff;
        /* Default background color */
    }

    .navbar-custom .nav-link,
    .navbar-custom .navbar-brand {
        color: #000000;
        /* Default text color */
    }

    /* Active navbar style */
    .navbar-custom.active {
        background-color: var(--bs-primary);
        /* Active background color */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.308);
    }

    .navbar-custom.active .nav-link,
    .navbar-custom.active .navbar-brand {
        color: #ffffff;
        /* Active text color */
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
        border: .5px solid rgba(122, 122, 122, 0.192) !important;
        /* Custom border color */
        border-radius: 8px;
        /* Rounded corners */
        padding: 8px !important;
        /* Padding inside the input */
        width: 100% !important;
        /* Full width */
        box-sizing: border-box;
        /* Ensure padding and border are included in the element's total width and height */
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

    .text-primary {
        color: #ff255e !important;
    }

    .home-text {
        font-weight: 700;
        font-size: 32px;
    }

    .home-text1 {
        font-weight: 700;
    }

    .text-green {
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
        color: inherit;
        /* Ensures the text color inherits from the navbar's color */
    }

    .owl-nav {
        padding: 0 10px
    }

    .owl-carousel .owl-nav button.owl-next,
    .owl-carousel .owl-nav button.owl-prev {
        padding: 10px !important;
        background-color: #f7f7f7;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    .owl-stage-outer {
        padding: 0 0 0 3rem
    }

    @media (min-width: 768px) {
        .w-md-25 {
            width: 25% !important;
        }
    }

    .btn {
        border-radius: 16px !important;
    }

    .owl-carousel .owl-nav button.owl-next,
    .owl-carousel .owl-nav button.owl-prev {
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
<style>
    .layout{
        min-height: 100vh;
        background-color: #f7f7f7;
        position: relative;
    }
    .participate-card {
        width: 444px;
        top: 6rem;
        height: auto;
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        border-top-left-radius: 30px;
        background-color: #ffffff;
        border-top-right-radius: 30px;
    }
    .participate-card > .head {
        background-color: var(--bs-primary);
        padding: 5rem 2rem 4rem 2rem;
        color: #ffffff;
        border-top-right-radius: 30px;
        border-top-left-radius: 30px;
    }
    .participate-card > .head > h2 {
        font-weight: 700;
        font-size: 1.875rem
    }
    .participate-card > .divider {
        background-image: linear-gradient(to bottom,var(--bs-primary) 95%,white 5%);
        color: #ffffff;
        transform: translateY(-1px);
    }
    .participate-card > .body{
        height: 10rem;
        position: relative;
    }
    .participate-card > .body > .logo{
        width: 114px;
        height: 114px;
        border: 6px solid white;
        background-color: var(--bs-primary);
        border-radius: 50%;
        position: absolute;
        top: -70px;
        left: 50%;
        padding: 1rem;
        transform: translateX(-50%)
    }
    .text-black {
        color: #000000
    }
</style>

<section class="layout">
    <div class="participate-card">
        <div class="head">
            <h2>Register now  <span class="text-black">for free</span> for the biggest baby photo contest</h2>
        </div>
        <svg class="divider" focusable="false" aria-hidden="true" viewBox="0 0 320 34.6" fill="currentcolor"><path d="M0,0C160,60,320,0,320,0V34.6H0Z"></path></svg>
        <div class="body">
            <div class="logo"></div>

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
                    <path
                        d="M5 3h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2m13 2h-2.5A3.5 3.5 0 0 0 12 8.5V11h-2v3h2v7h3v-7h3v-3h-3V9a1 1 0 0 1 1-1h2V5z" />
                </svg>
            </a>
            <a class="text-dark" href="#" rel="nofollow" target="_blank">
                <svg class="bi bi-instagram" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M7.8 2h8.4C19.4 2 22 4.6 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8C4.6 22 2 19.4 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2m-.2 2A3.6 3.6 0 0 0 4 7.6v8.8C4 18.39 5.61 20 7.6 20h8.8a3.6 3.6 0 0 0 3.6-3.6V7.6C20 5.61 18.39 4 16.4 4H7.6m9.65 1.5a1.25 1.25 0 0 1 1.25 1.25A1.25 1.25 0 0 1 17.25 8 1.25 1.25 0 0 1 16 6.75a1.25 1.25 0 0 1 1.25-1.25M12 7a5 5 0 0 1 5 5 5 5 0 0 1-5 5 5 5 0 0 1-5-5 5 5 0 0 1 5-5m0 2a3 3 0 0 0-3 3 3 3 0 0 0 3 3 3 3 0 0 0 3-3 3 3 0 0 0-3-3z" />
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
        <small class="text-muted">Do you love your child so much that you'd like to show him off to the entire world?
            Then come and join Bidiboo, the largest photo contest in the US & UK for babies and children up to 12 years
            old! With thousands of winners already, your cute child could be next. All you have to do is sign up for
            free, upload their photo and vote for them. The participants with the most votes will be rewarded with money
            and a certificate for the cutest baby of the month! Reach the top of the leaderboard by asking loved ones to
            vote, and you could claim the Jackpot! Bidiboo is more than just a place to compete. It's also a place to
            connect and create memories with other parents. Register today and you might see your baby be crowned the
            cutest of the month and become a baby model!</small>
    </div>

    <!-- Additional Contests -->
    <div class="col-md-12">
        <div class="d-flex justify-content-center">
            <div class="text-center">
                <a class="text-decoration-none text-dark me-2 text-center" href="#"><span class="me-2">Check out more
                        contests: </sapn> KingPet: Dog and Cat Photo Contest</a>
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

    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            dots: false,
            < !--Disable pagination dots-- >
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
