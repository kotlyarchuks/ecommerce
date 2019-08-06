@extends('layouts.app')

@section('content')
    {{--  Nav  --}}
    @include('nav')

    {{--  Search and breadcrumbs  --}}
    <section class="bg-bgdarker">
        <div class="w-3/5 mx-auto flex justify-between items-center py-10">
            <div class="main-text">
                <a href="{{ route('home') }}" class="hover:text-dark-lighter">Home</a>
                <strong> > </strong>
                <a href="{{ route('products.index') }}" class="hover:text-dark-lighter">Shop</a>
                <strong> > </strong>
                {{ $product->name }}
            </div>
            <div class="w-1/4">
                <input type="text" class="search w-full input" placeholder="Search for product"/>
            </div>
        </div>
    </section>

    {{--  Main  --}}
    <main class="w-3/5 mx-auto pt-20 pb-20 flex main-text">
        <div class="w-1/2">
            <div class="product-main-image mb-5">
                <img src="{{ asset('images/products') . '/' . $product->slug . '.jpg' }}" alt="" class="">
            </div>
{{--            <div class="flex">--}}
{{--                <img src="../images/products/laptop.jpg" alt="" class="product-small-image">--}}
{{--                <img src="../images/products/laptop.jpg" alt="" class="product-small-image">--}}
{{--                <img src="../images/products/laptop.jpg" alt="" class="product-small-image">--}}
{{--            </div>--}}
        </div>
        <div class="w-1/2 pl-24 text-left">
            <h3 class="heading text-left mb-1">{{ $product->name }}</h3>
            <div class="product-stats mb-2">{{ $product->details }}</div>
            <div class="stock-available">
                In Stock
            </div>
            <div class="heading text-left mb-6">{{ $product->presentPrice() }}</div>
            <div class="main-text mb-16">{{ $product->description }}</div>
            <form action="{{route('cart.store')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$product->id}}">
                <input type="hidden" name="name" value="{{$product->name}}">
                <input type="hidden" name="price" value="{{$product->price}}">
                <button type='submit' class="button">Add to Cart</button>
            </form>
        </div>
    </main>

    @include('recommended')

@endsection
