@extends('admin.layouts.app')

@section('content')

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li> --}}
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Categories</a></li>
                        <li class="breadcrumb-item active">Edit Categories</li>
                    </ol>
                </div>
                <h4 class="page-title">Edit Categories</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('categories.update', $category->id) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="mb-3">
                            <label for="categories" class="form-label">Text</label>
                            <input type="text" value="{{ $category->name }}" id="categories" name="name" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                    
                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div>
    </div> 
    <!-- end row-->



@endsection