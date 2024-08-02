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
    <div class="col-md-6">
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
                        <div class="color-box mb-3 d-none d-md-block">
                            <img  class="img-fluid p-2" src="https://cdn.playgrnd.media/v7/img/icons/babies/icon-transparent.png?sharp=0&sat=100&w=240&h=240" alt="">
                        </div>
                    </div>
                    <h3 class="text-center">Create an account</h3>
                    <div class="d-flex mb-3 text-center px-5">
                        <h5 class="">Already a member?</h5>&nbsp
                        <a href="{{ route('login') }}" class="text-danger text-decoration-none"><h5>Sign in</h5></a>
                    </div>
                    

                    <div class="login-form d-flex justify-content-center w-100">
                        <form class="w-100" method="POST" action="{{ route('register') }}">
                            @csrf
                            

                            <div class="row mb-2">
    
                                <div class="col-md-12">
                                    <input id="name" type="text" class="custom-input form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-2">
    
                                <div class="col-md-12">
                                    <input id="email" type="email" class="custom-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email address">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-2">
    
                                <div class="col-md-12">
                                    <input id="password" type="password" class="custom-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-2">
    
                                <div class="col-md-12">
                                    <input id="custom-input password-confirm" type="password" class="custom-input form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>
                            </div>
    



                            {{-- <div class="mb-3">
                                <input id="email" placeholder="Email address" type="email" class="custom-input form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}

                            {{-- <div class="mb-3">
                                <input id="password" placeholder="Password" type="password" class="custom-input form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div> --}}
                        
                            <div class="mb-3">
                                <button type="submit" class="btn btn-primary py-2 w-100">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
