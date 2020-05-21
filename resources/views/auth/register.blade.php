@extends('layouts.app2')

@section('content')
<div class="container mb-4 pb-3">
    <h2 class="navbar p-3 text-muted">{{__("Driver's Registration")}}</h2>
    <hr>
    <div class="row">
        <div class="m-auto  col-md-8">

            <form class="border mt-2 mb-5 border-light shadow p-5" method="post" action="{{ route('register') }}">
                @csrf
        
                <div class="card-header text-center mb-0 border">{{ __('Sign-Up') }}</div>
                <input id="name" type="text" class="form-control mb-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="name">
                
                <div class="form-group">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        
        
                <input id="email" type="email" class="form-control mb-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">
                
                <div class="form-group">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <input id="phone" type="text" class="form-control mb-4 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Phone Number">
                
                <div class="form-group">
                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        
                <div class="form-group">
                    <input id="address" type="text" class="form-control mb-4 @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus placeholder="Address">
        
                    @error('address ')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        
                <div class="form-group">
                    <input id="password" type="password" class="form-control mb-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
        
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        
                <div class="form-group">
                    <input id="password-confirm" type="password" class="form-control mb-4" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                </div>

                <hr>
                <button class="btn btn-info my-4 btn-block" type="submit" name="register"> {{ __('Register') }}</button>
        
                <div class="text-center">
                    <p>By clicking
                        <em>Sign up</em> you agree to our
                        <a href="" target="_blank">terms of service</a>
                    </p>
                </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
