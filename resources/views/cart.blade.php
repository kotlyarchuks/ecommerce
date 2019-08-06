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
            @if(Cart::count() > 0)
            <h4 class="mini-heading text-left mb-8">{{ Cart::count() }} item(s) in Shopping Cart</h4>
                @foreach($cart_items as $item)
                    <div class="flex justify-between items-center py-3 mb-4 border-dark border-t border-b">
                        <img src="{{ asset('images/products') . '/' . $item->model->slug . '.jpg' }}" alt="" class="w-32 mr-5">
                        <div class="w-1/3">
                            <div>{{ $item->model->name }}</div>
                            <div class="text-dark-lightest">{{ $item->model->details }}</div>
                        </div>
                        <div class="text-right text-sm mr-5">
                            <div><a href="#" class="hover:text-dark-lighter">Remove</a></div>
                            <div><a href="#" class="hover:text-dark-lighter">Save for Later</a></div>
                        </div>
                        <div class="mr-5 text-sm">
                            <select name="" id="" class="border-dark-lightest border">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                        </div>
                        <div>{{ $item->model->presentPrice() }}</div>
                    </div>
                @endforeach
                        {{--      Coupon      --}}
                        <div class="flex justify-end mb-4"><a href="#" class="hover:text-dark-lighter">Have a code?</a></div>
                        <div class="flex justify-end">
                            <div class="flex p-3 border border-dark-lightest">
                                <input type="text" class="px-3 border border-dark-lightest">
                                <button class="button">Apply</button>
                            </div>
                        </div>

                        {{--  Total  --}}
                        <div class="bg-bgdarker p-5 flex justify-between my-6">
                            <div class="w-1/2">
                                Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like figuring out :).
                            </div>
                            <div class="text-right">
                                <div>Subtotal</div>
                                <div>Tax (13%)</div>
                                <div class="mini-heading">Total</div>
                            </div>
                            <div class="text-right">
                                <div>$2027.49</div>
                                <div>$263.57</div>
                                <div class="mini-heading">$2291.06</div>
                            </div>
                        </div>

                        {{--  Buttons  --}}
                        <div class="flex justify-between items-center mb-12">
                            <a href="{{ route('products.index') }}" class="button">Continue Shopping</a>
                            <a href="#" class="button-action">Proceed to Checkout</a>
                        </div>
                @else
                    <h4 class="mini-heading text-left mb-8">There are no items in Shopping Cart</h4>
                    <a href="{{ route('products.index') }}" class="button mb-20">Continue Shopping</a>
                @endif
                <div class="h-20"></div>

            <div>You have no items Saved for Later.</div>


        </div>
    </main>

    @include('recommended')

@endsection
