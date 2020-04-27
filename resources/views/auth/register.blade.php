@extends('layouts.app')

@section('content')
<div class="container">
<h2 class="navbar pb-0 text-muted">{{__("Driver's Registration")}}</h2>
<hr>
<div class="row">
    <div class="form-group m-auto  col-md-8">

        <form class="border mt-5 border-light shadow p-5" method="POST" action="{{ route('register') }}">
            @csrf
    
            <div class="card-header text-center mb-0 border">{{ __('Sign-Up') }}</div>
    <div>
    
    
            <div>
                <input id="firstname" type="text" class="form-control mb-4 @error('firstname') is-invalid @enderror" name="firstname" value="{{ old('firstname') }}" required autocomplete="firstname" autofocus placeholder="Firstname">
    
                @error('firstname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
    
            <div>
                <input id="lastname" type="text" class="form-control mb-4 @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="lastname" autofocus placeholder="Lastname">
    
                @error('lastname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
    
            <div>
                <input id="email" type="email" class="form-control mb-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
    
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div>
                <input id="phone" type="text" class="form-control mb-4 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Phone Number">
    
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
    
    
            <div>
                <input id="password" type="password" class="form-control mb-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
    
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
    
            <div>
                <input id="password-confirm" type="password" class="form-control mb-4" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
            </div>

            <hr>
            <button class="btn btn-info my-4 btn-block" type="submit">Sign up</button>
    
            <div class="text-center">
                <p>By clicking
                    <em>Sign up</em> you agree to our
                    <a href="" target="_blank">terms of service</a> and
                    <a href="" target="_blank">terms of service</a>.
                </p>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
@endsection
