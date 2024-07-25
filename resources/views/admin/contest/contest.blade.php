@extends('admin.layouts.app')

@section('content')

    <div class="container-fluid pt-4 px-4">
        <div class="row g-4">
            <div class="col-md-12">
                <div class="bg-light rounded h-100 p-4">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-4">Contest Table</h6>
                        <a href="{{ url('contest-add') }}" type="button" class="btn btn-primary">Add Contest</a>
                    </div>
                    
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Categories</th>
                                <th scope="col">Start Date</th>
                                <th scope="col">End Date</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contests as $contest)
                            <tr>
                                <th scope="row">{{ $contest->id }}</th>
                                <th>{{ $contest->name }}</th>
                                <td>{{ $contest->categories }}</td>
                                <td>{{ $contest->start_date }}</td>
                                <td>{{ $contest->end_date }}</td>
                                <td>{{ $contest->description }}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href="{{ url('/contest-show',$contest->id) }}" class="btn btn-primary me-2">Edit</a>
                                    <form action="{{ url('/contest-delete',$contest->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection