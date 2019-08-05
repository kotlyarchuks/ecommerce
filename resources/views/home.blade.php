@extends('layouts.app')

@section('content')
    {{--  Header  --}}
    <header class="header pb-20 text-white mb-16">
        <div class="w-3/5 mx-auto">
            <nav class="flex justify-between py-10 items-baseline mb-5">
                <div class="left-side flex items-baseline">
                    <div class="logo mr-12">
                        <h1 class="text-3xl font-bold tracking-wider text-light">
                            <a href="#">Ecommerce</a>
                        </h1>
                    </div>
                    <div class="menu">
                        <ul class="menu-list">
                            <li><a href="#">Shop</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="right-side">
                    <ul class="menu-list">
                        <li><a href="/register">Sign Up</a></li>
                        <li><a href="/login">Login</a></li>
                        <li class="relative">
                            <a href="#">Cart</a>
                            @if (2==3)
                                <div class="absolute cart-counter">0</div>
                            @endif
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="hero flex">
                <div class="hero-left w-1/2 mr-20 text-light">
                    <h2 class="mt-16 mb-10 hero-header">Laravel Ecommerce Demo</h2>
                    <div class="text-lg font-thin mb-12">Includes multiple products, categories, a shopping cart and a
                        checkout system with Stripe
                        integration.
                    </div>
                    <div>
                        <a href="#" class="button-reverse mr-5">Screencasts</a>
                        <a href="#" class="button-reverse">GitHub</a>
                    </div>
                </div>
                <div class="hero-right w-1/2">
                    <img src="/images/laptop.png" alt="">
                </div>
            </div>
        </div>
    </header>

    {{--  Main  --}}
    <main class="w-3/5 mx-auto pb-20">
        <h3 class="heading text-center mb-16">Laravel Ecommerce</h3>

        <div class="text-lg font-light w-3/4 mx-auto mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt officia est
            reprehenderit sunt aliquid possimus temporibus enim eum hic lorem.
        </div>
        <div class="text-center mb-20">
            <a href="#" class="button mr-5">Featured</a>
            <a href="#" class="button">On Sale</a>
        </div>

        <div class="products-grid flex flex-wrap -mx-2 mb-16">
            <div class="product-card">
                <img src="../images/products/appliance.jpg" alt="" class="product-image">
                <div class="product-name">Appliance 1</div>
                <div class="product-price">$1321.73</div>
            </div>
            <div class="product-card">
                <img src="../images/products/camera.jpg" alt="" class="product-image">
                <div class="product-name">Camera 1</div>
                <div class="product-price">$1459.90</div>
            </div>
            <div class="product-card">
                <img src="../images/products/laptop.jpg" alt="" class="product-image">
                <div class="product-name">Laptop 1</div>
                <div class="product-price">$1776.85</div>
            </div>
            <div class="product-card">
                <img src="../images/products/phone.jpg" alt="" class="product-image">
                <div class="product-name">Phone 1</div>
                <div class="product-price">$947.57</div>
            </div>
            <div class="product-card">
                <img src="../images/products/tablet.jpg" alt="" class="product-image">
                <div class="product-name">Tablet 1</div>
                <div class="product-price">$743.09</div>
            </div>
            <div class="product-card">
                <img src="../images/products/tv.jpg" alt="" class="product-image">
                <div class="product-name">TV 1</div>
                <div class="product-price">$1321.73</div>
            </div>
            <div class="product-card">
                <img src="../images/products/laptop.jpg" alt="" class="product-image">
                <div class="product-name">Laptop 2</div>
                <div class="product-price">$1431.73</div>
            </div>
            <div class="product-card">
                <img src="../images/products/laptop.jpg" alt="" class="product-image">
                <div class="product-name">Laptop 3</div>
                <div class="product-price">$2523.99</div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="button">View more products</a>
        </div>
    </main>

    {{--  Blog  --}}
    <div class="blog bg-bgdarker">
        <div class="w-3/5 mx-auto pt-1">
            <h3 class="heading text-center my-16">From Our Blog</h3>
            <div class="text-lg font-light w-3/4 mx-auto mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing
                elit. Dolore vitae nisi, consequuntur illum dolores cumque pariatur quis provident deleniti nesciunt
                officia est reprehenderit sunt aliquid possimus temporibus enim eum hic.
            </div>
            <div class="flex -mx-4 pb-20">
                <div class="blog-card px-4">
                    <img src="../images/blog/blog1.jpg" alt="" class="mb-2">
                    <h4 class="mini-heading text-center mb-5">Testing</h4>
                    <div class="text-lg font-light">
                        Testing content here Welcome to WordPress. This is your first post. Edit or delete it, then
                        start writing! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut nisl ultricies
                        ex mollis congue. Mauris tempor justo nec lacus dignissim facilisis. Quisque in tortor justo.
                        Pellentesque iaculis tempus venenatis. Etiam sit amet elit volutpat, egestas ipsum vel, aliquet
                    </div>
                </div>
                <div class="blog-card px-4">
                    <img src="../images/blog/blog2.jpg" alt="" class="mb-2">
                    <h4 class="mini-heading text-center mb-5">New Laptop Available</h4>
                    <div class="text-lg font-light">
                        New Laptop Content. Welcome to WordPress. This is your first post. Edit or delete it, then start
                        writing! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut nisl ultricies ex
                        mollis congue. Mauris tempor justo nec lacus dignissim facilisis. Quisque in tortor justo.
                        Pellentesque iaculis tempus venenatis. Etiam sit amet elit volutpat, egestas ipsum vel
                    </div>
                </div>
                <div class="blog-card  px-4">
                    <img src="../images/blog/blog3.jpg" alt="" class="mb-2">
                    <h4 class="mini-heading text-center mb-5">Another Post</h4>
                    <div class="text-lg font-light">
                        Another Post Content. Welcome to WordPress. This is your first post. Edit or delete it, then
                        start writing! Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ut nisl ultricies
                        ex mollis congue. Mauris tempor justo nec lacus dignissim facilisis. Quisque in tortor justo.
                        Pellentesque iaculis tempus venenatis. Etiam sit amet elit volutpat, egestas ipsum vel
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
