@extends('layouts.app')

@section('content')
    {{--  Nav  --}}
    @include('nav')

    {{--  Search and breadcrumbs  --}}
    <section class="bg-bgdarker">
        <div class="w-3/5 mx-auto flex justify-between items-center py-10">
            <div class="main-text">
                <a href="{{ route('home') }}">Home</a> <strong> > </strong> Shop
            </div>
            <div class="w-1/4">
                <input type="text" class="search w-full input" placeholder="Search for product"/>
            </div>
        </div>
    </section>

    {{--  Main  --}}
    <main class="w-3/5 mx-auto pt-20 pb-20 flex main-text">
        <div class="w-1/4 main-text pt-6">
            <ul class="categories-list">
                <li class="list-header">By Category</li>
                @foreach($categories as $category)
                    <li>
                        <a href="{{ route('products.index', ['category' => $category->slug]) }}"
                           class="{{ $category->slug === request('category') ? 'active' : '' }}">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="w-3/4">
            <div class="flex justify-between items-baseline mb-16">
                <h3 class="heading">{{ $categoryName }}</h3>
                <div>
                    <span class="font-bold">Price:</span>
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'low_to_high']) }}">Low to High</a>
                    |
                    <a href="{{ request()->fullUrlWithQuery(['sort' => 'high_to_low']) }}">High to Low</a>
                </div>
            </div>
            <div class="products-grid flex flex-wrap -mx-2 mb-16">
                @forelse($products as $product)
                    <div class="product-card-wider">
                        <a href="{{ route('products.show', $product->slug) }}">
                            <img src="{{ getProductImage($product->image) }}" alt="" class="product-image">
                            <div class="product-name">{{ $product->name }}</div>
                            <div class="product-price">{{ $product->presentPrice() }}</div>
                        </a>
                    </div>
                @empty
                    <h3 class="mini-heading mb-64">There are no products in this category</h3>
                @endforelse
            </div>
            @if(request()->has('category'))
                <div class="flex justify-center">{{ $products->appends(request()->query())->links() }}</div>
            @endif
        </div>
    </main>

@endsection

