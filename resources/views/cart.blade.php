@extends('layouts.app')

@section('content')
    {{--  Nav  --}}
    @include('nav')

    {{--  Search and breadcrumbs  --}}
    <section class="bg-bgdarker">
        <div class="w-3/5 mx-auto flex justify-between items-center py-10">
            <div class="main-text">
                <a href="{{ route('home') }}">Home</a> <strong> > </strong> Cart
            </div>
            <div class="w-1/4">
                <input type="text" class="search w-full input" placeholder="Search for product"/>
            </div>
        </div>
    </section>

    {{--  Main  --}}
    <main class="w-3/5 mx-auto py-20 flex main-text">
        <div class="w-3/4">
            @if(session()->has('message'))
                <div class="success-alert mb-5">{{ session('message') }}</div>
            @endif

            @if(count($errors) > 0)
                <div class="text-red-300">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{!! $error !!}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="h-16"></div>
            @endif

            {{--        Cart        --}}
            @if(Cart::instance('default')->count() > 0)
                <h4 class="mini-heading text-left mb-8">{{ Cart::instance('default')->count() }} item(s) in Shopping
                    Cart</h4>
                @foreach($cart_items as $item)
                    <div class="flex justify-between items-center py-3 mb-4 border-dark border-t border-b">
                        <a href="{{ route('products.show', $item->model->slug) }}">
                            <img src="{{ getProductImage($item->model->slug) }}" alt=""
                                 class="w-32 mr-5">
                        </a>
                        <div class="w-1/3">
                            <a href="{{ route('products.show', $item->model->slug) }}">
                                <div>{{ $item->model->name }}</div>
                                <div class="text-dark-lightest">{{ $item->model->details }}</div>
                            </a>
                        </div>
                        <div class="text-right text-sm mr-5">
                            <div>
                                <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="hover:text-dark-lighter">Remove</button>
                                </form>
                            </div>
                            <div>
                                <form action="{{ route('cart.saveForLater', $item->rowId) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="hover:text-dark-lighter">Save for later</button>
                                </form>
                            </div>
                        </div>
                        <div class="mr-5 text-sm">
                            <select name="" id="" class="border-dark-lightest border qty-select"
                                    data-row="{{ $item->rowId }}">
                                @for($i = 1; $i < 6; $i++)
                                    <option value="{{ $i }}" {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                        <div>{{ $item->model->presentPrice($item->qty) }}</div>
                    </div>
                @endforeach
                {{--      Coupon      --}}
                @if(! session()->has('coupon'))
                    <div class="flex justify-end mb-4"><a href="#" class="hover:text-dark-lighter">Have a code?</a>
                    </div>
                    <div class="flex justify-end">
                        <div class="">
                            <form action="{{ route('coupon.store') }}" method="POST"
                                  class="flex p-3 border border-dark-lightest">
                                @csrf
                                <input type="text" class="px-3 border border-dark-lightest" name="code" id="code">
                                <button class="button">Apply</button>
                            </form>
                        </div>
                    </div>
                @endif

                {{--  Total  --}}
                <div class="bg-bgdarker p-5 flex justify-between my-6">
                    <div class="w-1/2">
                        Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t
                        feel like figuring out :).
                    </div>
                    <div class="text-right">
                        <div>Subtotal</div>
                        @if(session()->has('coupon'))
                            <div class="flex items-center">
                                Coupon - {{ session()->get('coupon')['code'] }}
                                <form action="{{ route('coupon.destroy') }}" method="POST" id="destroy-coupon"
                                      class="inline">
                                    @csrf
                                    @method('delete')
                                    <img src="https://img.icons8.com/ios-glyphs/30/fa314a/trash--v1.png"
                                         class="ml-2 w-4 hover:cursor-pointer"
                                         onclick="document.getElementById('destroy-coupon').submit()">
                                </form>
                            </div>
                            <div>New Subtotal</div>
                        @endif
                        <div>Tax ({{ config('cart.tax') }}%)</div>
                        <div class="mini-heading">Total</div>
                    </div>
                    <div class="text-right">
                        <div>{{ presentPrice(Cart::instance('default')->subtotal()) }}</div>
                        @if(session()->has('coupon'))
                            <div>- {{ presentPrice($totals['discount']) }}</div>
                            <div>{{ presentPrice($totals['subtotal']) }}</div>
                        @endif
                        <div>{{ presentPrice($totals['tax']) }}</div>
                        <div class="mini-heading">{{ presentPrice($totals['total']) }}</div>
                    </div>
                </div>

                {{--  Buttons  --}}
                <div class="flex justify-between items-center mb-12">
                    <a href="{{ route('products.index') }}" class="button">Continue Shopping</a>
                    <a href="{{ route('checkout.index') }}" class="button-action">Proceed to Checkout</a>
                </div>
            @else
                <h4 class="mini-heading text-left mb-8">There are no items in Shopping Cart</h4>
                <a href="{{ route('products.index') }}" class="button mb-20">Continue Shopping</a>
            @endif
            <div class="h-20"></div>

            {{--        Saved for Later        --}}
            @if(Cart::instance('saveForLater')->count() > 0)
                <h4 class="mini-heading text-left mb-8">
                    {{ Cart::instance('saveForLater')->count() }} item(s) saved for later
                </h4>
                @foreach($saved_items as $item)
                    <div class="flex justify-between items-center py-3 mb-4 border-dark border-t border-b">
                        <a href="{{ route('products.show', $item->model->slug) }}">
                            <img src="{{ asset('images/products') . '/' . $item->model->slug . '.jpg' }}" alt=""
                                 class="w-32 mr-5">
                        </a>
                        <div class="w-1/3">
                            <a href="{{ route('products.show', $item->model->slug) }}">
                                <div>{{ $item->model->name }}</div>
                                <div class="text-dark-lightest">{{ $item->model->details }}</div>
                            </a>
                        </div>
                        <div class="text-right text-sm mr-5">
                            <div>
                                <form action="{{ route('saveForLater.destroy', $item->rowId) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="hover:text-dark-lighter">Remove</button>
                                </form>
                            </div>
                            <div>
                                <form action="{{ route('saveForLater.moveToCart', $item->rowId) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="hover:text-dark-lighter">Move to Cart</button>
                                </form>
                            </div>
                        </div>
                        <div class="mr-5 text-sm">
                        </div>
                        <div>{{ $item->model->presentPrice() }}</div>
                    </div>
                @endforeach
            @else
                <div>You have no items Saved for Later.</div>
            @endif

        </div>
    </main>

    @include('recommended')

@endsection

@section('scripts')
    <script>
        window.onload = () => {
            const selects = document.querySelectorAll('.qty-select');

            Array.from(selects).forEach(select => {
                let rowId = select.getAttribute('data-row');
                select.addEventListener('change', () => {
                    axios.patch('/cart/' + rowId, {
                        'qty': select.value
                    }).then(response => {
                        location.href = '/cart';
                    }).catch(error => {
                        location.href = '/cart';
                    });
                });
            })
        };
    </script>
@endsection
