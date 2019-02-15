@extends('main')
@section('content')

<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <p align="center">Already have an account, then please
            <a class="red" href="{{ route('login') }}">login </a>
        </p>

    <form action="{{ route('register') }}" method="post">
    @csrf

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">First Name</label>

    <div class="col-md-6">
        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
        name="name" value="{{ old('name') }}" placeholder="Firstname" required autofocus>

        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Last Name</label>

    <div class="col-md-6">
        <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" 
        name="lastname" value="{{ old('lastname') }}" placeholder="Lastname">

        @if ($errors->has('lastname'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('lastname') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="email" class="col-md-4 col-form-label text-md-right">Email Address</label>

    <div class="col-md-6">
        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
        name="email" value="{{ old('email') }}" placeholder="Email Address" required>

        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

    <div class="col-md-6">
        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
        name="password" placeholder="Password" required>

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>

    <div class="col-md-6">
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
        placeholder="Confirm Password" required>
    </div>
</div>

<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-danger marginLeft">
            Sign Up
        </button>
    </div>
</div>

    </form>
    </div>

</div>

@endsection