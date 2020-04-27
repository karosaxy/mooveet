@extends('layouts.app')

@section('content')
<div class="form-group m-auto  col-md-4">

    <form class="border mt-5 border-light p-5" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="card-header text-center text-capitalize mb-4">{{ __('Register') }}</div>
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
        <div>
            <input id="phone" type="phone" class="form-control mb-4 @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus placeholder="Phone Number">

            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="input-group mb-4">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input id="passport" type="file" class="@error('passport') is-invalid @enderror" name="passport" value="{{ old('passport') }}" required autocomplete="passport" autofocus placeholder="Passport">

                @error('passport')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
                <label class="custom-file-label" for="passport">Passport</label>
            </div>
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
@endsection
