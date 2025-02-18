@extends('layouts.default_with_menu')

@section('content')
<h1>{{ session('user')->name}}</h1>
<div class="row">
    <div class="col-md-12">
        <div class="card mb-12">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 40px">#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th style="width: 240px"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $index => $user)
                        <tr class="align-middle">
                            <td>{{ $index+1 }}.</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <a href="{{ url('/user/'.$user->id) }}">
                                    <button class="btn btn-warning">Edit</button>
                                </a>
                                <form action="{{ url('/user') }}" method="post" style="display: inline" class="delete-form">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{ $user->id }}">
                                    <button type="button" class="btn btn-danger" onclick="confirm_delete(this)">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-end">
                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function confirm_delete(button) {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#d33",
            cancelButtonColor: "#3085d6",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                button.closest('form').submit();
            }
        });
    }
</script>
@endsection
