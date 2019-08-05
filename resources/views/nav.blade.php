<header class="bg-bgfooter">
    <div class="w-3/5 mx-auto">
        <nav class="flex justify-between py-10 items-baseline">
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
    </div>
</header>