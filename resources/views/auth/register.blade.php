@extends('layouts.app')

@section('content')
    {{--  Nav  --}}
    @include('nav')

    <main class="w-3/5 mx-auto pt-20 pb-64 main-text flex">
        <div class="w-1/2 pr-20 border-r border-dark-lightest">
            <h4 class="mini-heading text-left mb-8">Create Account</h4>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <input id="name" type="text" class="input w-full mb-6 @error('name') is-invalid @enderror"
                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                placeholder="Name">

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

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

                <input id="password-confirm" type="password"
                       class="input w-full mb-6 @error('password') is-invalid @enderror" name="password_confirmation"
                       required autocomplete="current-password"
                       placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <div class="flex justify-between items-center mb-6">
                    <button type="submit" class="button-black">
                        Register
                    </button>

                    <div class="text-right">
                        <div>
                            <strong>Already have an account?</strong>
                        </div>
                        <div>
                            <a href="/login" class="hover:text-light-darker">Login</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
        <div class="w-1/2 pl-20">
            <h4 class="mini-heading mb-8">New Customer</h4>
            <div class="mb-20">
                <div><strong>Save time now.</strong></div>
                <div class="mb-6">Creating an account will allow you to checkout faster in the future, have easy access to order history and customize your experience to suit your preferences.</div>
            </div>
            <div class="mb-20">
                <div><strong>Loyalty Program</strong></div>
                <div class="mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt debitis, amet magnam accusamus nisi distinctio eveniet ullam. Facere, cumque architecto.</div>
            </div>

        </div>
    </main>

@endsection