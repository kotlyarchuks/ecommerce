@extends('layouts.app')

@section('content')
    {{--  Nav  --}}
    @include('nav')

    {{--  Main  --}}
    <main class="w-3/5 mx-auto py-20 main-text h-screen flex justify-center items-center">
        <div class="text-center">
            <h2 class="heading mb-6">{{ session('message') }}</h2>
            <div class="text-center">
                <a href="{{ route('home') }}" class="button text-center">Home page</a>
            </div>
        </div>
    </main>
@endsection

