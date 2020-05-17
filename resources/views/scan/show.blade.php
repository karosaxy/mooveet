@extends('layouts.app')

@section('content')

<div class="container bg-light h-auto">
    <div class="header">
        <h3>
            Choose a Driver
        </h3>
        <hr>
    </div>
    @if (session()->has('message'))
    <div class="alert alert-primary" role="alert">
        {{--  --}}
        {{ session()->get('message') }}
    </div>
    @endif
    <div class="row">
        <div class="column card-deck">
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
                    <p>
                        Email : {{ $truck->user->email }}
                    </p>
                </div>
            </div>
    
            @endforeach
        </div>
    </div>

</div>

@endsection



