@extends('layouts.app')

@section('content')
    {{--  Nav  --}}
    @include('nav')

    {{--  Search and breadcrumbs  --}}
    <section class="bg-bgdarker">
        <div class="w-3/5 mx-auto flex justify-between items-center py-10">
            <div class="main-text">
                <a href="#">Home</a> <strong> > </strong> Shop
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
                <img src="../images/products/laptop.jpg" alt="" class="">
            </div>
            <div class="flex">
                <img src="../images/products/laptop.jpg" alt="" class="product-small-image">
                <img src="../images/products/laptop.jpg" alt="" class="product-small-image">
                <img src="../images/products/laptop.jpg" alt="" class="product-small-image">
            </div>
        </div>
        <div class="w-1/2 pl-24 text-left">
            <h3 class="heading text-left mb-1">Laptop 1</h3>
            <div class="product-stats mb-2">15 inch, 3 TB SSD, 32GB RAM</div>
            <div class="stock-available">
                In Stock
            </div>
            <div class="heading text-left mb-6">$2,259.76</div>
            <div class="main-text mb-16">Lorem 1 ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!</div>
            <a href="#" class="button">Add to Cart</a>
        </div>
    </main>

    {{--  Recommended  --}}
    <section class="bg-bgdarker pb-16">
        <div class="w-3/5 mx-auto">
            <h4 class="mini-heading text-left pt-6 mb-6">You might also like...</h4>
            <div class="flex -mx-5">
                <div class="product-card-recommend">
                    <img src="../images/products/laptop.jpg" alt="" class="product-image">
                    <div class="product-name">Laptop 3</div>
                    <div class="product-price">$2523.99</div>
                </div>
                <div class="product-card-recommend">
                    <img src="../images/products/camera.jpg" alt="" class="product-image">
                    <div class="product-name">Camera 3</div>
                    <div class="product-price">$2523.99</div>
                </div>
                <div class="product-card-recommend">
                    <img src="../images/products/appliance.jpg" alt="" class="product-image">
                    <div class="product-name">Appliance 3</div>
                    <div class="product-price">$2523.99</div>
                </div>
                <div class="product-card-recommend">
                    <img src="../images/products/tv.jpg" alt="" class="product-image">
                    <div class="product-name">TV 3</div>
                    <div class="product-price">$2523.99</div>
                </div>
            </div>
        </div>
    </section>

@endsection
