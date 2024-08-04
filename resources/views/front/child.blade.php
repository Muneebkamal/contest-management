@extends('layouts.app')

@section('styles')
<style>
    @media (max-width: 576px) {
        .layout {
            min-height: 75vh;
            background-color: #f7f7f7;
            position: relative;
        }
        .profile-section {
            position: absolute;
            width: 100%;
            height: auto;
            left: 50%;
            transform: translateX(-50%);
        }
    }

    @media (min-width: 992px) {
        .layout {
            min-height: 135vh;
            background-color: #f7f7f7;
            position: relative;
        }
        .profile-section {
            position: absolute;
            width: 544px;
            top: 5rem;
            height: auto;
            left: 50%;
            transform: translateX(-50%);
        }
    }

    .profile-card {
        border-radius: 30px;
        border: transparent;
        position: relative;
        top: -2rem;
        display: flex;
        justify-content: center;
    }

    .profile-img {
        height: 100px;
        width: 100px;
        border-radius: 50%;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
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

    .dashed-border {
        border: 2px dashed purple;
        border-radius: 40%;
    }

    textarea.input-textarea:focus {
        outline: none !important;
        box-shadow: none;
    }

    textarea.input-textarea::placeholder {
        color: purple;
        font-size: 14px;
        font-weight: 300;
    }

    .input-textarea {
        border: 1px dashed purple !important;
        border-radius: 5px;
        padding: 10px;
        width: 100%;
        box-sizing: border-box;
    }

    .input-textarea.focused {
        border: 1px solid #ff5733 !important; /* Solid border */
    }

    .save-button {
        display: block;
    }

    .input-textarea.focused ~ .save-button {
        display: block;
    }

    textarea.input-textarea:focus::placeholder {
        color: transparent;
    }

    .error-message {
        color: red;
        font-size: 12px;
        display: none; /* Hidden by default */
    }
</style>
@endsection

@section('content')
<section class="layout">
    <div class="profile-section">
        <div class="img-card">
            <div class="d-flex justify-content-center h-100">
                @if($child->image)
                    <img src="{{ asset('storage/' . $child->image) }}" alt="Child Image" class="img-fluid h-100 w-100" style="border-top-left-radius: 30px; border-top-right-radius: 30px;">
                @endif
            </div>
        </div>
        <div class="card profile-card">
            <div class="card-body">
                <div class="d-flex justify-content-center mt-1">
                    <button class="btn btn-primary w-100">Vote</button>
                </div>
                <div class="row mt-3 d-flex align-items-center">
                    <div class="col-md-3">
                        <div class="text-center">
                            <span class="fw-bolder">{{ \Carbon\Carbon::parse($child->birthdate)->year }}</span><br>
                            <small>{{ ucfirst($child->gender) }}</small>
                        </div>
                    </div>
                    <div class="col-md-6 text-center">
                        <small class="dashed-border p-2">Join Regional Ranking</small>
                    </div>
                    <div class="col-md-3">
                        <div class="text-center">
                            <span class="fw-bolder">{{ $child->votes }}</span><br>
                            <small>Votes</small>
                        </div>
                    </div>
                    <div class="col-md-12 my-4">
                        <div class="text-center">
                            <span>🔥How to earn your first votes?</span>
                            <button class="btn btn-primary ms-1">Let's go!</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <form id="form" method="POST" action="{{ route('children.update', $child->id) }}">
                            @csrf
                            @method('PUT')
                            <textarea class="form-control input-textarea" name="description" id="description" cols="10" rows="2" placeholder="Tell us about {{ $child->name }}: share an anecdote: what he likes, and why we should vote for him" minlength="20" required>{{ $child->description }}</textarea>
                            <div class="save-button">
                                <p class="w-100" style="color: #ff5733;">Minimum 20 characters</p>
                                <p class="error-message">Please enter at least 20 characters.</p>
                                <div class="d-flex justify-content-center align-items-center mt-2 w-100">
                                    <button type="button" class="btn btn-outline-dark w-50 back-button" style="border-radius: 20px">Back</button>
                                    <button type="submit" class="btn btn-primary ms-2 w-50">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Handle focus event
        // $('.input-textarea').on('focus', function() {
        //     $(this).addClass('focused');
        //     $('.save-button').show(); // Show the save button when focused
        // });

        // // Handle blur event to remove focus
        // $('.input-textarea').on('blur', function() {
        //     $(this).removeClass('focused');
        //     if ($(this).val().length >= 20) {
        //         $('.error-message').hide(); // Hide error message when the textarea is valid
        //     }
        // });

        // Handle click event on the back button to remove focus from textarea
        $('.back-button').on('click', function() {
            $('.input-textarea').blur(); // Remove focus from the textarea
        });

        // Handle form submission
        $('#form').on('submit', function(event) {
            var textarea = $('#description');
            if (textarea.val().length < 20) {
                event.preventDefault(); // Prevent form submission
                $('.error-message').show(); // Show error message
            } else {
                $('.error-message').hide(); // Hide error message
                
                // Use a slight delay to ensure blur effect is applied
                setTimeout(function() {
                    textarea.blur(); // Ensure the textarea loses focus
                }, 100); // Use a delay to ensure smooth transition
            }
        });
    });
</script>
@endsection
