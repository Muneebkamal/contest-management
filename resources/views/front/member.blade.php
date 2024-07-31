@extends('layouts.app')

@section('styles')
<style>
    @media (max-width: 576px) {
            .layout{
                min-height: 88vh;
                background-color: #f7f7f7;
                position: relative;
            }
        }
        /* Styles for large screens (desktops) */
        @media (min-width: 992px) {
                .layout{
                min-height: 105vh;
                background-color: #f7f7f7;
                position: relative;
            }
        }
        .profile-section {
            position: absolute;
            width: 444px;
            top: 6rem;
            height: auto;
            left: 50%;
            transform: translateX(-50%);
        }
        .profile-card{
            border-radius: 30px;
            border: transparent;
        }
        .profile-img{
            height: 100px;
            width: 100px;
            border-radius: 50%;
            box-shadow: box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }
        .profile-dev {
            position: relative;
        }

        .profile-img {
            cursor: pointer;
            border-radius: 50%;
            border: 2px dashed #ccc;
            width: 150px; /* Adjust as needed */
            height: 150px; /* Adjust as needed */
            object-fit: cover;
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
        <div class="profile-section d-flex justify-content-center">
            <div class="card profile-card w-100">
                <div class="card-body">
                    <h5 class="text-center card-title my-3">{{ $user->name }}</h5>
                    <div class="d-flex justify-content-center">
                        <div class="profile-dev">
                            <img src="{{ $user->image ? asset('storage/' . $user->image) : 'https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png' }}" alt="Image" class="img-fluid profile-img" id="profileImage">
                            <form id="profileForm" action="{{ route('add.profile') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <input type="file" class="d-none" id="getProfile" name="profile_image">
                                <input type="hidden" name="user_id" value="{{ $user->id }}">
                            </form>
                        </div>
                    </div>
                    <h5 class="me-2">Children</h5>
                    <div class="profile-images">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="https://www.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" alt="" class="img-fluid rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
    $(document).ready(function(){
    // Click event on the image
        $('#profileImage').on('click', function() {
            $('#getProfile').click();
        });

        // Change event on the file input
        $('#getProfile').on('change', function() {
        let formData = new FormData($('#profileForm')[0]);

        $.ajax({
        url: $('#profileForm').attr('action'), // URL to send the form data
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(response) {
            // Handle success response
            console.log('File uploaded successfully');
            // $('.profile-img').css("border", "none");
            window.location.reload();
        },
        error: function(xhr, status, error) {
            // Handle error response
            console.error('File upload failed');
            console.error('Status:', status);
            console.error('Error:', error);
            console.error('Response:', xhr.responseText); // Log the response text to debug the issue
                }
            });
        });
    });


</script>
@endsection