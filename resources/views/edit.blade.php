@extends('layouts.app2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-muted">
            <div class="card-header text-center"><strong>Edit User {{ $user->name }}</strong></div>
                <div class="card-body">
                    
                <form action="{{ route('update', $user) }}" method="post"></form>
                    @csrf
                    {{ method_field('put') }}
                    @foreach ($roles as $role)
                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
