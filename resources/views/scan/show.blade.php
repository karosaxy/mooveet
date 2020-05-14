@extends('layouts.app')

@section('content')

<div class="container">
    <div class="header">
        <h3>
            Choose a Driver
        </h3>
        <hr>
    </div>
    <div class="row">
        <div class="column">
            @foreach ($trucks as $truck)
                
            <div class="card shadow" style="width: 18rem;">
                <img src="{{ asset('/storage/images/'.$truck->user->avatar) }}" class="card-img-top" alt="">
                <div class="card-body">
                    <p class="card-text">
                        Name : {{ $truck->user->name }}
                    </p>
                    <p>
                        Phone : {{ $truck->user->phone }}
                    </p>
                </div>
            </div>

            @endforeach
        </div>
    </div>

</div>

@endsection



