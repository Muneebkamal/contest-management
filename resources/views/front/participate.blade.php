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

    .custom-input-nav {
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

    .custom-input-nav:focus {
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
                    <a class="btn-r nav-link btn btn-light px-3 fw-bold" href="{{ url('/contest-front') }}">Contests</a>
                </li>
                <li class="nav-item">
                    <a class="btn-r nav-link btn btn-light px-3 fw-bold" href="{{ url('/participate') }}">Participate</a>
                </li>
            </ul>
            <div class="search-input me-5 w-25">
                <input class="custom-input-nav form-control me-2" type="search" placeholder="Search" aria-label="Search">
            </div>
            <form class="d-flex me-5">
                <button class="btn btn-light me-2" type="button"><b>Sign in</b></button>
                <button class="btn-a btn btn-custom" type="button"><b>Sign up</b></button>
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
    @media (max-width: 576px) {
            .participate-card {
            width: 330px;
            top: 6rem;
            height: auto;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            border-top-left-radius: 30px;
            background-color: #ffffff;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
            border-bottom-left-radius: 30px;
        }
            .layout{
            min-height: 120vh;
            background-color: #f7f7f7;
            position: relative;
        }
            .confirm-card{
            width: 330px;
            top: 6rem;
            border-radius: 15px;
            border: none;
        }
    }

    /* Styles for large screens (desktops) */
    @media (min-width: 992px) {
            .participate-card {
            width: 434px;
            top: 6rem;
            height: auto;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
            border-top-left-radius: 30px;
            background-color: #ffffff;
            border-top-right-radius: 30px;
            border-bottom-right-radius: 30px;
            border-bottom-left-radius: 30px;
        }
            .layout{
            min-height: 125vh;
            background-color: #f7f7f7;
            position: relative;
        }
        .confirm-card{
        width: 480px;
        top: 6rem;
        border-radius: 15px;
        border: none;
    }
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
        /* height: 10rem; */
        position: relative;
    }
    .participate-card > .body > .logo{
        width: 114px;
        height: 114px;
        border: 6px solid white;
        background-color: var(--bs-primary);
        border-radius: 50%;
        position: absolute;
        top: -100px;
        left: 50%;
        padding: 1rem;
        transform: translateX(-50%)
    }
    .text-black {
        color: #000000
    }
    input[type="radio"]:checked {
        background-color: #ff255e;
        border-color: #ff255e;
    }

    .icon-img {
      cursor: pointer; /* Makes it clear that the div is clickable */
    }
    .icon-img img {
      max-width: 100px;
      max-height: 100px;
      border-radius: 50%; /* Ensures the image fits the circle */
    }
    input[type="checkbox"]:checked {
        background-color: #ff255e;
        color: white;
        border-color: #ff255e;
    }
    
</style>

<section class="layout">
    <div class="confirm-section d-flex justify-content-center d-none">
        <div class="card confirm-card">
            <div class="card-body">
                <h5 class="text-center card-title my-3">All good Here? 😇</h5>
                <p class="text-center">Please carefully check the information below, as you will <strong>NOT BE ABLE TO CHANGE IT</strong> once your child's profile is created!</p>
                <div class="row d-flex justify-content-center mb-3">
                    <div class="col-md-8">
                        <div class="row mt-3 shadow">
                            <div class="col-md-12 my-2">
                                <div class="d-flex justify-content-between">
                                    <h5>First name</h5>
                                    <h5 class="text-green" id="confirmName"></h5>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="col-md-12 my-2">
                                <div class="d-flex justify-content-between">
                                    <h5>Gender</h5>
                                    <h5 class="text-green" id="confirmGender"></h5>
                                </div>
                            </div>
                            <hr class="m-0">
                            <div class="col-md-12 my-2">
                                <div class="d-flex justify-content-between">
                                    <h5>Date of birth</h5>
                                    <h5 class="text-green" id="confirmDob"></h5>
                                </div>
                            </div>
                            <hr class="m-0">
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <input type="checkbox" class="form-check-input">
                    <p class="ms-2">I confirm that I am the parent or legal guardian and that I accept the Trems and Conditions.</p>
                </div>
                <div class="buttons mb-3">
                    <div class="row">
                        <div class="col-md-6">
                            <button class="btn btn-outline-light text-dark previous w-100">Modify</button>
                        </div>
                        <div class="col-md-6">
                            <button class="btn btn-primary w-100">Let's Go!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="participate-card">
        <div class="head">
            <h2>Register now  <span class="text-black">for free</span> for the biggest baby photo contest</h2>
        </div>
        <svg class="divider" focusable="false" aria-hidden="true" viewBox="0 0 320 34.6" fill="currentcolor"><path d="M0,0C160,60,320,0,320,0V34.6H0Z"></path></svg>
        <div class="body">
            <div class="logo d-flex justify-content-center align-items-center">
                <img alt="Bidiboo Baby Photo Contest" src="https://cdn.playgrnd.media/v7/img/icons/babies/icon-transparent.png?sharp=0&amp;sat=100&amp;w=240&amp;h=240" class="img-fluid img-icon">
                <!-- Button Container -->
                <div class="d-flex align-items-center justify-content-center position-relative icon-img d-none" style="width: 100px; height: 100px;">
                    <!-- Dashed Circle -->
                    <div class="d-flex align-items-center justify-content-center" style="width: 100px; height: 100px;">
                        <!-- Dashed Circle with White Background and Gray Border -->
                        <div class="d-flex align-items-center justify-content-center" style="width: 100px; height: 100px; border: 2px dashed gray; background-color: white; border-radius: 50%; position: relative;">
                          <!-- Camera Icon Positioned in the Center -->
                          <i class="fas fa-camera text-gray camera-icon" style="font-size: 36px;"></i>
                          <!-- Image Preview -->
                          <img id="imagePreview" src="" alt="Image Preview" class="d-none img-fluid" style="width: 100px; height: 100px;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-md-12 mt-3">
                    <form action="" enctype="multipart/form-data">
                        @csrf
                        <div class="gender-section">
                            <h4 class="text-center">Is it a boy or a girl?</h4>
                            <div class="d-flex justify-content-center my-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="girl">
                                    <label class="form-check-label me-4" for="girl">
                                        girl
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="boy">
                                    <label class="form-check-label" for="boy">
                                        boy
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="name-section d-none">
                            <h4 class="text-center">What's his firstname?</h4>
                            <div class="px-5">
                                <input type="text" id="childName" class="custom-input form-control" placeholder="First name of your child" required>
                            </div>
                        </div>
                        <div class="img-section d-none">
                            <h3 class="text-center mb-5">Now upload fsfd's photo</h3>
                            <div class="px-5">
                                <input type="file" id="fileInput" accept="image/*" class="d-none r-file" required>
                            </div>
                        </div>
                        <div class="age-section d-none">
                            <div class="row px-5">
                                <h3 class="text-center mb-3">What's his date of birth?</h3>
                              <div class="col-md-4">
                                <!-- Year Dropdown -->
                                <select id="yearSelect" class="form-select" aria-label="Select Year">
                                  <option selected disabled>Year</option>
                                </select>
                              </div>
                              <div class="col-md-4">
                                <!-- Month Dropdown -->
                                <select id="monthSelect" class="form-select" aria-label="Select Month">
                                  <option selected disabled>Month</option>
                                </select>
                              </div>
                              <div class="col-md-4">
                                <!-- Date Dropdown -->
                                <select id="dateSelect" class="form-select" aria-label="Select Date">
                                  <option selected disabled>Date</option>
                                </select>
                              </div>
                            </div>
                        </div>
                        <div class="cp-btn text-center mt-3">
                            <button type="button" class="btn btn-primary w-75 continue">Continue</button>
                            <button type="button" class="btn btn-outline-dark w-75 previous mt-2 d-none">Previous</button>
                        </div>
                        <small class="d-flex justify-content-center mt-2 px-3">
                            <i class="bi bi-lock"></i>We do not resell your photos or personal data.
                        </small>
                    </form>
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



        let currentSection = 'gender'; // Start with the gender section

        $('.continue').click(function() {
            if (currentSection === 'gender') {
                if ($('input[name="gender"]:checked').length === 0) {
                    alert("Please select a gender");
                    return;
                }
                $('.gender-section').addClass('d-none');
                $('.name-section').removeClass('d-none');
                $('.previous').removeClass('d-none');
                currentSection = 'name';
            } else if (currentSection === 'name') {
                const name = $('#childName').val();
                if (!name || name.length < 3 || !/^[a-zA-Z]+$/.test(name)) {
                    alert('Please enter a valid name with at least 3 characters and only alphabetic characters.');
                    return;
                }
                $('.name-section').addClass('d-none');
                $('.img-section').removeClass('d-none');
                $('.img-icon').addClass('d-none');
                $('.icon-img').removeClass('d-none');
                $('.logo').css('background-color', 'transparent');
                currentSection = 'img';
            } else if (currentSection === 'img') {
                if ($('#fileInput').val() === '') {
                    alert("Please upload an image");
                    return;
                }
                $('.img-section').addClass('d-none');
                $('.age-section').removeClass('d-none');
                $('.r-file').removeAttr('id', 'fileInput');
                currentSection = 'age';
            } else if (currentSection === 'age') {
                if ($('#yearSelect').val() === null || $('#monthSelect').val() === null || $('#dateSelect').val() === null) {
                    alert("Please select a date of birth");
                    return;
                }
                const name = $('#childName').val();
                const gender = $('input[name="gender"]:checked').next('label').text();
                const dob = $('#monthSelect').val() + '/' + $('#dateSelect').val() + '/' + $('#yearSelect').val();

                $('#confirmName').text(name);
                $('#confirmGender').text(gender);
                $('#confirmDob').text(dob);

                $('.confirm-section').removeClass('d-none');
                $('.participate-card').addClass('d-none');
                $('.cp-btn').addClass('d-none');
                currentSection = 'confirm';
            }
        });

        $('.previous').click(function() {
            if (currentSection === 'name') {
                $('.name-section').addClass('d-none');
                $('.gender-section').removeClass('d-none');
                $('.previous').addClass('d-none');
                currentSection = 'gender';
            } else if (currentSection === 'img') {
                $('.img-section').addClass('d-none');
                $('.name-section').removeClass('d-none');
                $('.img-icon').removeClass('d-none');
                $('.icon-img').addClass('d-none');
                $('.logo').css('background-color', '#ff255e');
                currentSection = 'name';
            } else if (currentSection === 'age') {
                $('.img-section').removeClass('d-none');
                $('.age-section').addClass('d-none');
                $('.r-file').attr('id', 'fileInput');
                currentSection = 'img';
            } else if (currentSection === 'confirm') {
                $('.confirm-section').addClass('d-none');
                $('.participate-card').removeClass('d-none');
                $('.cp-btn').removeClass('d-none');
                currentSection = 'age';
            }
        });


        // Trigger file input click when icon-img is clicked
        $('.icon-img').on('click', function() {
        $('#fileInput').click();
        });

        // Handle file input change event
        $('#fileInput').on('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
            $('#imagePreview').attr('src', e.target.result).removeClass('d-none');
            $('.camera-icon').addClass('d-none');
            }
            reader.readAsDataURL(file);
        }
        });

        // for date of birth
        const currentYear = new Date().getFullYear();
        const startYear = currentYear - 100;
        const endYear = currentYear + 10;
        
        // Populate Year Dropdown
        for (let year = startYear; year <= endYear; year++) {
            $('#yearSelect').append(`<option value="${year}">${year}</option>`);
        }

        // Populate Month Dropdown
        const months = [
            'January', 'February', 'March', 'April', 'May', 'June',
            'July', 'August', 'September', 'October', 'November', 'December'
        ];
        months.forEach((month, index) => {
            $('#monthSelect').append(`<option value="${index + 1}">${month}</option>`);
        });

        // Update Date Dropdown based on Year and Month
        $('#yearSelect, #monthSelect').on('change', function() {
            const year = $('#yearSelect').val();
            const month = $('#monthSelect').val();
            let daysInMonth = 31;

            if (month == 2) {
            // Check for leap year
            daysInMonth = (year % 4 === 0 && (year % 100 !== 0 || year % 400 === 0)) ? 29 : 28;
            } else if ([4, 6, 9, 11].includes(parseInt(month))) {
            daysInMonth = 30;
            }

            $('#dateSelect').empty().append('<option selected disabled>Date</option>');
            for (let date = 1; date <= daysInMonth; date++) {
            $('#dateSelect').append(`<option value="${date}">${date}</option>`);
            }
        });

    });

</script>
<!-- Font Awesome for the nav icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
@endsection
