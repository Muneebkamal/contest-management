@extends('layouts.auth')

{{-- @section('styles')
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
            padding: 15px; /* Padding inside the input */
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
@endsection --}}

@section('auth-content')

    <div class="row">
        <div class="col-md-6 h-100">
            <div class="side-img mob-img">
                {{-- <img class="img-fluid" src="https://cdn.playgrnd.media/v7/img/icons/babies/auth-bg.jpg?w=960&h=1280&q=60" alt=""> --}}
            </div>
            <div class="brand-2 d-flex justify-content-center d-md-none">
                <div class="color-box mb-4">
                    <img  class="img-fluid p-2" src="https://cdn.playgrnd.media/v7/img/icons/babies/icon-transparent.png?sharp=0&sat=100&w=240&h=240" alt="" style="border: 2px solid #fff; border-radius: 50%;">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 d-flex justify-content-center">
                    <div class="content mt-4">
                        <div class="brand d-flex justify-content-center">
                            <div class="color-box mb-4 d-none d-md-block">
                                <img  class="img-fluid p-2" src="https://cdn.playgrnd.media/v7/img/icons/babies/icon-transparent.png?sharp=0&sat=100&w=240&h=240" alt="">
                            </div>
                        </div>
                        <h3 class="text-center">Welcome to Bidiboo</h3>
                        <div class="d-flex mb-5 text-center">
                            <h5 class="">New to Bidiboo?</h5>&nbsp
                            <a href="{{ route('register') }}" class="text-danger text-decoration-none"><h5>Create an account</h5></a>
                        </div>
                        

                        <div class="login-form d-flex justify-content-center">
                            <form class="w-100" method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="mb-3">
                                    <input id="email" placeholder="Email address" type="email" class="custom-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <input id="password" placeholder="Password" type="password" class="custom-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary py-2 w-100">Sign in</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection













{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

     
</head>
<body>
    <div class="container-fluid ps-0">
        
    </div>


    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js"></script>
</body>
</html> --}}



















{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
