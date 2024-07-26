@extends('admin.layouts.app')

@section('content')
    <div class="row mt-2">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <h4 class="header-title mt-1">Add Categories</h4>                
                        <a href="{{ route('categories.create') }}" class="btn btn-primary">Add Categories</a>
                    </div>
                    <table id="basic-datatable" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Created by</th>
                                <th>Updated by</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->created_by }}</td>
                                <td>{{ $category->updated_by }}</td>
                                <td>

                                    <div class="d-flex justify-content-end">
                                        <button
                                            data-bs-toggle="tooltip"
                                            title="Edit"
                                            href="{{ route('categories.edit', $category->id) }}"
                                            class="btn btn-primary p-1 py-0 me-2"
                                        >
                                            <i class="uil-pen"></i>
                                        </button>
                                        <form action="{{ url('/categories-delete',$category->id) }}" method="post">
                                            @csrf
                                            <button
                                                data-bs-toggle="tooltip"
                                                title="Edit"
                                                class="btn btn-danger p-1 py-0"
                                            >
                                                <i class="uil-trash" data-bs-toggle="tooltip" title="Delete"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> <!-- end preview-->
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div> 
    <!-- end row-->



@endsection