@extends('layouts.app3')

@section('content')

<div class="container bg-light h-auto">
    <div class="header">
        <h3>
            Choose a Driver
        </h3>
        <hr>
    </div>
    @if (session()->has('message'))
    <div class="alert alert-primary" role="alert" style="font-size: 2rem">
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
                    <p>
                        Truck Type : {{ $truck->truck_type }}
                    </p>
                </div>
            </div>
    
            @endforeach
        </div>
    </div>

</div>

@endsection



