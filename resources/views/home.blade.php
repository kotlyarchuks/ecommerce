@extends('layouts.app')

@section('content')
    {{--  Header  --}}
    <header class="header pb-20 text-white mb-16">
        <div class="w-3/5 mx-auto">
            <nav class="flex justify-between py-10 items-baseline mb-5">
                <div class="left-side flex items-baseline">
                    <div class="logo mr-12">
                        <h1 class="text-3xl font-bold tracking-wider text-light">
                            <a href="{{ route('home') }}">Ecommerce</a>
                        </h1>
                    </div>
                    <div class="menu">
                        <ul class="menu-list">
                            <li><a href="{{ route('products.index') }}">Shop</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
                <div class="right-side">
                    <ul class="menu-list">
                        @auth
                            <li><a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li><a href="{{ route('register') }}">Sign Up</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                        @endauth
                        <li class="relative">
                            <a href="{{ route('cart.index') }}">Cart</a>
                            @if (Cart::count() > 0)
                                <div class="absolute cart-counter">{{ Cart::instance('default')->count() }}</div>
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
            @foreach($products as $product)
                <div class="product-card">
                    <a href="{{ route('products.show', $product->slug) }}">
                        <img src="{{ getProductImage($product->slug) }}" alt="" class="product-image">
                        <div class="product-name">{{ $product->name }}</div>
                        <div class="product-price">{{ $product->presentPrice() }}</div>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="text-center">
            <a href="{{ route('products.index') }}" class="button">View more products</a>
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
