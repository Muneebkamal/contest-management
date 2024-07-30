@extends('layouts.app')

@section('styles')
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

        /* Logo styles */
        #logo-active {
            display: none;
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


        @media (max-width: 576px) {
                .participate-card {
                width: 100%;
                top: 1rem;
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
                min-height: 88vh;
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
        input[type="radio"]:focus {
            box-shadow: 0 0 0 4px #ff255f4b; /* Adjust the shadow color and size as needed */
            outline: none; /* Remove default outline if any */
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
@endsection

@section('content')

    <div class="container-fluid fixed-top p-2 d-lg-none w-100" style="background-color: #ff255e;">
        <a class="text-dark text-center text-decoration-none fw-bold" href="#">
            <h2 class="m-0">Participate</h2>
        </a>
    </div>

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
                                <button class="btn btn-light text-primary previous w-100">Modify</button>
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
                            <div class="gender-section" style="margin-bottom: 4rem;">
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
                            <div class="name-section d-none pb-2">
                                <h4 class="text-center">What's his firstname?</h4>
                                <div class="px-5">
                                    <input type="text" id="childName" class="custom-input form-control" placeholder="First name of your child" required>
                                </div>
                            </div>
                            <div class="img-section d-none">
                                <h3 class="text-center mb-5" style="margin: 0px; font-weight: 700; font-size: 1.3rem; line-height: 1.5;">Now upload fsfd's photo</h3>
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
                                <button type="button" class="btn btn-light text-primary fw-bold w-75 previous mt-2 d-none">Previous</button>
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

@endsection

@section('script')
<script>
    $(document).ready(function () {
    
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

                // Update the name section heading based on selected gender
                const selectedGender = $('input[name="gender"]:checked').next('label').text().trim(); // Added trim() to remove extra spaces
                console.log('Selected Gender:', selectedGender); // Debugging line
                const genderPronoun = selectedGender === 'boy' ? 'his' : 'her';
                $('.name-section h4').text(`What's ${genderPronoun} firstname?`);

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
                const gender = $('input[name="gender"]:checked').next('label').text().trim(); // Added trim() to remove extra spaces
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

                // Restore the correct heading based on the previously selected gender
                const selectedGender = $('input[name="gender"]:checked').next('label').text().trim(); // Added trim() to remove extra spaces
                console.log('Restoring Gender:', selectedGender); // Debugging line
                const genderPronoun = selectedGender === 'boy' ? 'his' : 'her';
                $('.name-section h4').text(`What's ${genderPronoun} firstname?`);
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
@endsection
