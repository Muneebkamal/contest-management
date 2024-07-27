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
        @yield('styles')
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
</head>
<body>
    <div class="container-fluid ps-0">
        @yield('auth-content')
    </div>


    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
    @yield('script')
</body>
</html>