@extends('layouts.master')

@section('content')

<div class="container align-middle" style="height: 100vh !important;">
    <div class="row h-100 justify-content-center align-items-center">
        <div class="col-md-6 whiteparch">
            <div class="row text-center img-bottom">
                <img src="{{asset('/img/Logo.png')}}" class="img-fluid rounded mx-auto d-block"  style="height:120px">
            </div>
            @if (session('status'))
                <div class="alert alert-danger text-center error-login">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf
                <div class="form-group row">
                    <div class="col">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="User" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"  name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-3">
                        <button type="submit" class="btn btn-primary col-12">
                            {{ __('Login') }}
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    </div>
                </div>
            </form>
        </div>
    <div>
</div>

@endsection
