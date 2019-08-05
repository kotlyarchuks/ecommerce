@extends('layouts.app')

@section('content')
    {{--  Nav  --}}
    @include('nav')

    {{--  Main  --}}
    <main class="w-3/5 mx-auto py-20 main-text">
        <h2 class="heading text-left mb-12">Checkout</h2>
        <div class="flex">
            <div class="w-1/2 mr-32">
                <h4 class="mini-heading text-left mb-6">Billing Details</h4>
                <form action="#" class="">
                    <div class="mb-6">
                        <label for="email">Email Address</label>
                        <input type="email" class="input w-full" name="email" id="email">
                    </div>
                    <div class="mb-6">
                        <label for="name">Name</label>
                        <input type="text" class="input w-full" name="name" id="name">
                    </div>
                    <div class="mb-6">
                        <label for="address">Address</label>
                        <input type="text" class="input w-full" name="address" id="address">
                    </div>
                    <div class="flex mb-6">
                        <div class="w-1/2 mr-6">
                            <label for="city">City</label>
                            <input type="text" class="input w-full" name="city" id="city">
                        </div>
                        <div class="w-1/2">
                            <label for="province">Province</label>
                            <input type="text" class="input w-full" name="province" id="province">
                        </div>
                    </div>
                    <div class="flex mb-12">
                        <div class="w-1/2 mr-6">
                            <label for="postal">Postal Code</label>
                            <input type="text" class="input w-full" name="postal" id="postal">
                        </div>
                        <div class="w-1/2">
                            <label for="phone">Phone</label>
                            <input type="text" class="input w-full" name="phone" id="phone">
                        </div>
                    </div>

                    <h4 class="mini-heading text-left mb-6">Payment Details</h4>
                    <div class="mb-6">
                        <label for="card_name">Name on card</label>
                        <input type="text" class="input w-full" name="card_name" id="card_name">
                    </div>
                    <div class="mb-10">
                        <label for="card_number">Card number</label>
                        <input type="text" class="input w-full" name="card_number" id="card_number">
                    </div>
                    <button type="submit" class="button-action w-full">Complete Order</button>
                </form>
            </div>

            {{--  Right  --}}
            <div class="w-1/2">
                <h4 class="mini-heading text-left mb-6">Your Order</h4>
                <div class="flex justify-between items-center py-3 mb-4 border-dark border-t border-b">
                    <img src="../images/products/laptop.jpg" alt="" class="w-32 mr-5">
                    <div class="mr-12">
                        <div>Laptop 1</div>
                        <div class="text-dark-lightest mb-3">13 inch, 2 TB SSD, 32GB RAM</div>
                        <div>$2027.49</div>
                    </div>
                    <div class="px-3 py-2 border-dark-lightest border">1</div>
                </div>
                <div class="flex justify-between pb-4 border-b border-dark">
                    <div>
                        <div class="mb-3">Subtotal</div>
                        <div class="mb-3">Tax (13%)</div>
                        <div class="mini-heading">Total</div>
                    </div>
                    <div>
                        <div class="mb-3">$2027.49</div>
                        <div class="mb-3">$263.57</div>
                        <div class="mini-heading">$2291.06</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
