@extends('admin.layouts.app')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="bg-light rounded h-100 p-4">
                <h6 class="mb-4">Add Contest</h6>
                <form action="{{ route('contest.update',$user->id) }}"  method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Name" value="{{ $user->name }}">
                                <label for="floatingInput">Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <select name="categories" class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example">
                                    <option selected>Open this select menu</option>
                                    <option value="1" @if ($user->categories == 1) selected @endif>One</option>
                                    <option value="2" @if ($user->categories == 2) selected @endif>Two</option>
                                    <option value="3" @if ($user->categories == 3) selected @endif>Three</option>
                                </select>
                                <label for="floatingSelect">Categories</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" name="start_date" value="{{ $user->start_date }}">
                                <label for="floatingInput">Start Date</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating mb-3">
                                <input type="date" class="form-control" id="floatingInput" name="end_date" value="{{ $user->end_date }}" >
                                <label for="floatingInput">End Date</label>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="floatingPassword"
                            placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div> --}}
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="description" id="floatingTextarea" name="description" style="height: 100px;">{{ $user->description }}</textarea>
                        <label for="floatingTextarea">Description</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>

@endsection