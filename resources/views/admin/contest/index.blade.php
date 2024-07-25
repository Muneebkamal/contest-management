@extends('admin.layouts.app')

@section('content')
<div class="row mt-2">
    <div class="col-12">
        <div class="card">

            <div class="card-body">
                <div class="d-flex justify-content-between mb-3">
                    <h4 class="header-title mt-1">Contests</h4>                                                  
                    <button onclick="window.location.href = '{{ route('contest.add') }}'" class="btn btn-success btn-sm">Add New Contest</button>
                </div>
                <table id="contests-datatable" class="table dt-responsive nowrap w-100">
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
                                <div class="d-flex justify-content-end">
                                    <button
                                        data-bs-toggle="tooltip"
                                        title="Edit"
                                        href="{{ url('/contest-show',$contest->id) }}"
                                        class="btn btn-primary p-1 py-0 me-2"
                                    >
                                        <i class="uil-pen"></i>
                                    </button>
                                    <form action="{{ url('/contest-delete',$contest->id) }}" method="post">
                                        @csrf
                                        <button
                                            data-bs-toggle="tooltip"
                                            title="Edit"
                                            href="{{ url('/contest-show',$contest->id) }}"
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
                </table>           
            </div> <!-- end card body-->
        </div> <!-- end card -->
    </div><!-- end col-->
</div>
@endsection


@section('scripts')
<script>
    $('#contests-datatable').DataTable()
</script>
@endsection