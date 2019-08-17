@extends('layouts.app')

@section('extra-css')
    <script src="https://js.stripe.com/v3/"></script>
@endsection

@section('content')
    {{--  Nav  --}}
    @include('nav')

    {{--  Main  --}}
    <main class="w-3/5 mx-auto py-20 main-text">
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
        @endif

        <h2 class="heading text-left mb-12">Checkout</h2>
        <div class="flex">
            <div class="w-1/2 mr-32">
                <h4 class="mini-heading text-left mb-6">Billing Details</h4>
                <form action="{{ route('checkout.store') }}" method="POST" class="" id="payment">
                    @csrf
                    <div class="mb-6">
                        <label for="email">Email Address</label>
                        <input type="email" class="input w-full" name="email" id="email" required>
                    </div>
                    <div class="mb-6">
                        <label for="name">Name</label>
                        <input type="text" class="input w-full" name="name" id="name" required>
                    </div>
                    <div class="mb-6">
                        <label for="address">Address</label>
                        <input type="text" class="input w-full" name="address" id="address" required>
                    </div>
                    <div class="flex mb-6">
                        <div class="w-1/2 mr-6">
                            <label for="city">City</label>
                            <input type="text" class="input w-full" name="city" id="city" required>
                        </div>
                        <div class="w-1/2">
                            <label for="province">Province</label>
                            <input type="text" class="input w-full" name="province" id="province" required>
                        </div>
                    </div>
                    <div class="flex mb-12">
                        <div class="w-1/2 mr-6">
                            <label for="postal">Postal Code</label>
                            <input type="text" class="input w-full" name="postal" id="postal" required>
                        </div>
                        <div class="w-1/2">
                            <label for="phone">Phone</label>
                            <input type="text" class="input w-full" name="phone" id="phone" required>
                        </div>
                    </div>

                    <h4 class="mini-heading text-left mb-6">Payment Details</h4>
                    <div class="mb-6">
                        <label for="card_name">Name on card</label>
                        <input type="text" class="input w-full" name="card_name" id="card_name" required>
                    </div>
                    <div class="mb-10">
                        <label for="card-element">
                            Credit or debit card
                        </label>
                        <div id="card-element">
                            <!-- A Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <button type="submit" class="button-action w-full" id="submit-payment">Complete Order</button>
                </form>
            </div>

            {{--  Right  --}}
            <div class="w-1/2">
                <h4 class="mini-heading text-left mb-6">Your Order</h4>
                @foreach($cart_items as $item)
                    <div class="flex justify-between items-center py-3 mb-4 border-dark border-t border-b">
                        <a href="{{ route('products.show', $item->model->slug) }}">
                            <img src="{{ getProductImage($item->model->image) }}" alt="" class="w-32 mr-5">
                        </a>
                        <div class="mr-12">
                            <a href="{{ route('products.show', $item->model->slug) }}">
                                <div>{{ $item->model->name }}</div>
                            </a>
                            <div class="text-dark-lightest mb-3">{{ $item->model->details }}</div>
                            <div>{{ $item->model->presentPrice() }}</div>
                        </div>
                        <div class="px-3 py-2 border-dark-lightest border">1</div>
                    </div>
                @endforeach
                {{--  Totals  --}}
                <div class="flex justify-between pb-4 border-b border-dark">
                    <div>
                        <div class="mb-3">Subtotal</div>
                        <div class="mb-3">Tax ({{ config('cart.tax') }}%)</div>
                        <div class="mini-heading">Total</div>
                    </div>
                    <div>
                        <div class="mb-3">{{ presentPrice(Cart::instance('default')->subtotal()) }}</div>
                        <div class="mb-3">{{ presentPrice(Cart::instance('default')->tax()) }}</div>
                        <div class="mini-heading">{{ presentPrice(Cart::instance('default')->total()) }}</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script>
        window.onload = () => {
            // Create a Stripe client.
            var stripe = Stripe('pk_test_iaWyyzKXsHJuBR9sq0GoBwlr');

            // Create an instance of Elements.
            var elements = stripe.elements({
                'locale': 'en'
            });

            // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
                base: {
                    color: '#32325d',
                    fontFamily: '"Roboto", Helvetica, sans-serif',
                    fontSmoothing: 'antialiased',
                    fontSize: '16px',
                    '::placeholder': {
                        color: '#aab7c4'
                    }
                },
                invalid: {
                    color: '#fa755a',
                    iconColor: '#fa755a'
                }
            };

            // Create an instance of the card Element.
            var card = elements.create('card', {
                style: style,
                'hidePostalCode': true
            });

            // Add an instance of the card Element into the `card-element` <div>.
            card.mount('#card-element');

            // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function (event) {
                var displayError = document.getElementById('card-errors');
                if (event.error) {
                    displayError.textContent = event.error.message;
                } else {
                    displayError.textContent = '';
                }
            });

            // Handle form submission.
            var form = document.getElementById('payment');
            form.addEventListener('submit', function (event) {
                document.getElementById('submit-payment').disabled = true;
                event.preventDefault();

                stripe.createToken(card, {
                    'name' : document.getElementById('card_name').value,
                    'address_line1' : document.getElementById('address').value,
                    'address_city' : document.getElementById('city').value,
                    'address_state' : document.getElementById('province').value,
                    'address_zip' : document.getElementById('postal').value,
                }).then(function (result) {
                    if (result.error) {
                        // Inform the user if there was an error.
                        var errorElement = document.getElementById('card-errors');
                        errorElement.textContent = result.error.message;
                    } else {
                        // Send the token to your server.
                        stripeTokenHandler(result.token);
                    }
                });
            });

            // Submit the form with the token ID.
            function stripeTokenHandler(token) {
                // Insert the token ID into the form so it gets submitted to the server
                var form = document.getElementById('payment');
                var hiddenInput = document.createElement('input');
                hiddenInput.setAttribute('type', 'hidden');
                hiddenInput.setAttribute('name', 'stripeToken');
                hiddenInput.setAttribute('value', token.id);
                form.appendChild(hiddenInput);

                // Submit the form
                form.submit();
            }
        }
    </script>
@endsection
