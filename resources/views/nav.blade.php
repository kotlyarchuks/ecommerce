<header class="bg-bgfooter">
    <div class="w-3/5 mx-auto">
        <nav class="flex justify-between py-10 items-baseline">
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
                            <div class="absolute cart-counter">{{ Cart::count() }}</div>
                        @endif
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>