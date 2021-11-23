<?php

$_SITE_TITLE = 'Module_4_Database';

?>

@extends('layouts/app')

@section('content')

    <br><br><br>
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div> --}}

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="my-20 flex flex-col">
            <div class="bg-gray-700 p-6 w-80 m-auto rounded-3xl">
                @error('email')
                    <span class="invalid-feedback text-yellow-400" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                @error('password')
                    <span class="invalid-feedback text-yellow-300" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="text-gray-300 font-bold border-b w-24 mb-4 border-gray-300">{{ __('Login') }}</div>
                <input placeholder="Email" id="email" type="email"
                    class="text-white bg-transparent border-b border-gray-600 form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                {{-- <input placeholder="Password" type="password" class="mt-4 text-white bg-transparent border-b border-gray-600" /> --}}
                <input placeholder="Password" id="password" type="password"
                    class="mt-4 text-white bg-transparent border-b border-gray-600 form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password">
                <div class="mt-6">
                    <button type="submit" class="bg-blue-400 p-1 rounded-lg w-24">{{ __('Login') }}</button>
                    <button class="bg-gray-400 p-1 rounded-lg w-24"><a href="/register">Register</a></button>
                </div>
            </div>
        </div>
    </form>

    {{-- <div class="card-body"> --}}
    {{-- <form method="POST" action="{{ route('login') }}"> --}}


    {{-- <div class="form-group row"> --}}
    {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

    {{-- <div class="col-md-6"> --}}
    {{-- <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus> --}}

    {{-- @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror --}}
    {{-- </div>
                        </div> --}}

    {{-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

    {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

    {{-- <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button> --}}
    {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
    <br><br><br><br><br><br><br><br><br>
@endsection
