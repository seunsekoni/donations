@extends('main')
@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <p align="center" style="font-size: 24px;">Login</p>
            <p align="center" class="red">Please Sign up if you don't have an account</p>
            <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                <label class="form-check-label" for="remember">Remember Me </label>
                                    <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <button type="submit" class="btn btn-danger">Submit </button>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">

                                @if (Route::has('password.request'))
                                    Forgot your password? <a style="color: blue; font-size: 18px;" href="{{ route('password.request') }}">Click Here</a>
                                @endif
                                <a class="btn btn-xs" style="background-color:red; font-size: 18px; color: white;" href="{{ route('register') }}">Sign up</a>
                                
                            </div>
                        </div>
                    </form>


        </div>
    </div>
    

@endsection