<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/custom-bootstrap.css') }}">
    <!-- Font Awesome for the star icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.5.0/font/bootstrap-icons.min.css" rel="stylesheet">
    
    <style>
        .color-box{
            background-color: var(--bs-primary);
            border-radius: 50%;
            height: 100px;
            width: 100px;
        }
        .side-img{
            background-image: url('https://cdn.playgrnd.media/v7/img/icons/babies/auth-bg.jpg?w=960&h=1280&q=60');
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 100vh;
        }
        .custom-input {
            border: 2px solid black; /* Custom border color */
            border-radius: 8px; /* Rounded corners */
            padding: 13px; /* Padding inside the input */
            width: 100%; /* Full width */
            box-sizing: border-box; /* Ensure padding and border are included in the element's total width and height */
        }
        
        .custom-input:focus {
            border-color: var(--bs-primary); /* Border color when input is focused */
            outline: none;
            box-shadow: none
        }
        
        .btn-primary{
            background-color: var(--bs-primary);
            border: none;
            text-transform: none;
            box-shadow: none;
            font-weight: 600;
            font-size: 18px;
            border-radius: 16px;
        }
        .btn-primary:active,.btn-primary:focus{ 
            background-color: var(--bs-primary);

        }
        .btn-primary:focus{
            box-shadow: none
        }
        .btn-primary:hover{
            background-color: var(--bs-primary);
            text-transform: none;
            box-shadow: none;
            font-weight: 600;
            font-size: 18px;
            border-radius: 16px;
        }
    </style>
    {{-- navbar style --}}
    <style>
            /* Default navbar style */
        .navbar-custom {
            background-color: transparent;
            transition: background-color 0.3s;
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
        .navbar-custom.active #logo-default {
            display: none;
        }

        .navbar-custom.active #logo-active {
            display: block;
        }
        .navbar-custom {
            background-color: white;
            transition: background-color 0.3s;
        }

        .navbar-custom.active {
            background-color: #ff255e;
        }
        .custom-input-nav {
            background-color: transparent !important;
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
        /* Additional styles for buttons */
        .btn-custom {
            background-color: #ff255e;
            color: #ffffff;
        }

        .btn-light{
            background-color: #ffffff !important;
            color: #000000 !important;
            border: none;
        }
        .btn-active{
            background-color: #ff255e;
            color: #ffffff !important;
        }

        .btn-custom-outline {
            border-color: #ffffff;
            color: #ffffff;
        }

        .btn-custom-outline:hover {
            background-color: #ffffff;
            color: #ff255e;
        }
    </style>
    @yield('styles')
</head>
<body>
    <div class="container-fluid px-0" style="overflow: hidden;">
        @include('layouts.navbar')

        @yield('content')

        @include('layouts.footer')
    </div>


    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <!-- Owl Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <!-- Initialize Owl Carousel -->
    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Font Awesome for the nav icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    
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

            var path = window.location.pathname;

            if (path.includes('/contest-front')) {
                $('#contestLink').addClass('btn-active').removeClass('btn-light');
            } else if (path.includes('/participate')) {
                $('#participateLink').addClass('btn-active').removeClass('btn-light');
            }
        });
    </script>
    @yield('script')
</body>
</html>