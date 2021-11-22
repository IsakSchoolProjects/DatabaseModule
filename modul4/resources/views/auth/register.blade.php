@extends('layouts.app')

@section('content')

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="my-8 flex flex-col">
            <div class="bg-gray-700 p-6 w-80 m-auto rounded-3xl">
                @error('name')
                    <span class="invalid-feedback text-yellow-400" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                @error('email')
                    <span class="invalid-feedback text-yellow-400" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                @error('password')
                    <span class="invalid-feedback text-yellow-400" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <div class="text-gray-300 font-bold border-b w-24 mb-4 border-gray-300">Register</div>
                <input placeholder="Name" id="name" type="text"
                    class="mt-4 text-white bg-transparent border-b border-gray-600 form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                {{-- <input required placeholder="Last name" class="mt-4 text-white bg-transparent border-b border-gray-600" /> --}}
                {{-- <input required placeholder="Username" class="mt-4 text-white bg-transparent border-b border-gray-600" /> --}}
                {{-- <input required placeholder="Email" class="mt-4 text-white bg-transparent border-b border-gray-600" /> --}}
                <input placeholder="Email" id="email" type="email"
                    class="mt-4 text-white bg-transparent border-b border-gray-600 form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">
                {{-- <input required placeholder="Password" type="password" class="mt-4 text-white bg-transparent border-b border-gray-600" /> --}}
                <input placeholder="Password" id="password" type="password"
                    class="mt-4 text-white bg-transparent border-b border-gray-600 form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">
                {{-- <input required placeholder="Confirm password" type="password" class="mt-4 text-white bg-transparent border-b border-gray-600" /> --}}
                <input placeholder="Confirm password" id="password-confirm" type="password"
                    class="mt-4 text-white bg-transparent border-b border-gray-600 form-control" name="password_confirmation"
                    required autocomplete="new-password">
                <div class="mt-6">
                    {{-- <button class="bg-blue-400 p-1 rounded-lg w-24">Log in</button> --}}
                    <button type="submit"
                        class="bg-blue-400 p-1 rounded-lg w-24 hover:bg-gr">{{ __('Register') }}</button>
                </div>
            </div>
        </div>

    </form>

    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div> --}}

    {{-- <div class="card-body"> --}}
    {{-- <form method="POST" action="{{ route('register') }}">
                        @csrf --}}

    {{-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

    {{-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

    {{-- <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> --}}

    {{-- <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div> --}}
    {{-- <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
