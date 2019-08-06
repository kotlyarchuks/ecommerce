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
    <main class="w-3/5 mx-auto py-20 flex main-text">
        <div class="w-3/4">
            <div class="success-alert mb-5">Item was added to your cart!</div>
            <h4 class="mini-heading text-left mb-8">1 item(s) in Shopping Cart</h4>
            <div class="flex justify-between items-center py-3 mb-4 border-dark border-t border-b">
                <img src="../images/products/laptop.jpg" alt="" class="w-32 mr-5">
                <div class="mr-32">
                    <div>Laptop 1</div>
                    <div class="text-dark-lightest">13 inch, 2 TB SSD, 32GB RAM</div>
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
                <div>$2027.49</div>
            </div>
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
                <a href="#" class="button">Continue Shopping</a>
                <a href="#" class="button-action">Proceed to Checkout</a>
            </div>

            <div>You have no items Saved for Later.</div>


        </div>
    </main>

    @include('recommended')

@endsection
