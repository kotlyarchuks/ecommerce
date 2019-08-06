{{--  Recommended  --}}
<section class="bg-bgdarker pb-16">
    <div class="w-3/5 mx-auto">
        <h4 class="mini-heading text-left pt-6 mb-6">You might also like...</h4>
        <div class="flex -mx-5">
            @foreach($recommended as $recommended_product)
                <div class="product-card-recommend">
                    <a href="{{ route('products.show', $recommended_product->slug) }}">
                        <img src="{{ asset('images/products') . '/' . $recommended_product->slug . '.jpg' }}" alt="" class="product-image">
                        <div class="product-name">{{ $recommended_product->name }}</div>
                        <div class="product-price">{{ $recommended_product->presentPrice() }}</div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>