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
        <div class="w-1/4 main-text pt-6">
            <ul class="categories-list">
                <li class="list-header">By Category</li>
                <li><a href="#">Laptops</a></li>
                <li><a href="#">Desktops</a></li>
                <li><a href="#">Mobile Phones</a></li>
                <li><a href="#">Tablets</a></li>
                <li><a href="#">TVs</a></li>
                <li><a href="#">Digital Cameras</a></li>
                <li><a href="#">Appliances</a></li>
            </ul>
        </div>
        <div class="w-3/4">
            <div class="flex justify-between items-baseline mb-16">
                <h3 class="heading">Featured</h3>
                <div>
                    <span class="font-bold">Price:</span>
                    <a href="#">Low to High</a>
                    |
                    <a href="#">High to Low</a>
                </div>
            </div>
            <div class="products-grid flex flex-wrap -mx-2 mb-16">
                <div class="product-card-wider">
                    <img src="../images/products/laptop.jpg" alt="" class="product-image">
                    <div class="product-name">Laptop 3</div>
                    <div class="product-price">$2523.99</div>
                </div>
                <div class="product-card-wider">
                    <img src="../images/products/appliance.jpg" alt="" class="product-image">
                    <div class="product-name">Appliance 1</div>
                    <div class="product-price">$1321.73</div>
                </div>
                <div class="product-card-wider">
                    <img src="../images/products/camera.jpg" alt="" class="product-image">
                    <div class="product-name">Camera 1</div>
                    <div class="product-price">$1459.90</div>
                </div>
                <div class="product-card-wider">
                    <img src="../images/products/laptop.jpg" alt="" class="product-image">
                    <div class="product-name">Laptop 1</div>
                    <div class="product-price">$1776.85</div>
                </div>
                <div class="product-card-wider">
                    <img src="../images/products/phone.jpg" alt="" class="product-image">
                    <div class="product-name">Phone 1</div>
                    <div class="product-price">$947.57</div>
                </div>
                <div class="product-card-wider">
                    <img src="../images/products/laptop.jpg" alt="" class="product-image">
                    <div class="product-name">Laptop 2</div>
                    <div class="product-price">$1431.73</div>
                </div>
                <div class="product-card-wider">
                    <img src="../images/products/tablet.jpg" alt="" class="product-image">
                    <div class="product-name">Tablet 1</div>
                    <div class="product-price">$743.09</div>
                </div>
                <div class="product-card-wider">
                    <img src="../images/products/tv.jpg" alt="" class="product-image">
                    <div class="product-name">TV 1</div>
                    <div class="product-price">$1321.73</div>
                </div>
            </div>
        </div>
    </main>

@endsection
