@extends('layouts.app')

@section('content')
    {{--  Nav  --}}
    @include('nav')

    <main class="w-3/5 mx-auto py-20 main-text flex">
        <div class="w-1/2 pr-20 border-r border-dark-lightest">
            <h4 class="mini-heading text-left mb-8">Returning Customer</h4>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <input id="email" type="email"
                       class="input w-full mb-6 @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Email">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

                    <input id="password" type="password"
                           class="input w-full mb-6 @error('password') is-invalid @enderror" name="password"
                           required autocomplete="current-password"
                            placeholder="Password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                <div class="flex justify-between items-center mb-6">
                    <button type="submit" class="button-black">
                        Login
                    </button>

                    <div>
                        <input class="" type="checkbox" name="remember"
                               id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="" for="remember">
                            Remember Me
                        </label>
                    </div>
                </div>

                @if (Route::has('password.request'))
                    <a class="hover:text-dark-lighter" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                @endif
            </form>
        </div>
        <div class="w-1/2 pl-20">
            <h4 class="mini-heading mb-8">New Customer</h4>
            <div class="mb-20">
                <div><strong>Save time now.</strong></div>
                <div class="mb-6">You don't need an account to checkout.</div>
                <a href="#" class="button">Continue as Guest</a>
            </div>
            <div class="mb-20">
                <div><strong>Save time later.</strong></div>
                <div class="mb-6">Create an account for fast checkout and easy access to order history.</div>
                <a href="#" class="button">Create Account</a>
            </div>

        </div>
    </main>

@endsection
