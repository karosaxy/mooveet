@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10 col-auto">
            <div class="card text-muted">
                <div class="card-header text-center"><strong>Users</strong></div>
                    <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    {{-- loop over users to display users info --}}
                    @foreach ($users as $user)
                      <tr>
                      <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>
                        <a class="text-reset" href="{{ route('admin.users.edit', $user->id) }}"><button type="button" class="btn btn-info float-left">Edit</button></a>
                            <a class="text-reset" href="{{ route('admin.users.destroy', $user->id) }}"><button type="button" class="btn btn-danger float-left">Delete</button></a>
                        </td>
                      </tr>
                    @endforeach
                      <tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
