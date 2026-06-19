@extends('layouts.app')

@section('title','Products')

@section('content')

<div class="container mx-auto py-12">

    <h1 class="text-4xl font-bold mb-8">
        Paint Products
    </h1>

    <div class="grid md:grid-cols-4 gap-8">

        <!-- Sidebar -->

        <div>

            <form method="GET">

                <!-- Search -->

                <input
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search Product"
                    class="w-full border p-2 rounded mb-4">

                <!-- Category -->

                <select
                    name="category"
                    class="w-full border p-2 rounded mb-4">

                    <option value="">
                        All Categories
                    </option>

                    @foreach($categories as $category)

                        <option
                            value="{{ $category->id }}"
                            @selected(
                            request('category')
                            == $category->id
                            )>

                            {{ $category->name }}

                        </option>

                    @endforeach

                </select>

                <!-- Color -->

                <select
                    name="color"
                    class="w-full border p-2 rounded mb-4">

                    <option value="">
                        All Colors
                    </option>

                    @foreach($colors as $color)

                        <option
                            value="{{ $color }}"
                            @selected(
                            request('color')
                            == $color
                            )>

                            {{ $color }}

                        </option>

                    @endforeach

                </select>

                <!-- Price -->

                <input
                    type="number"
                    name="min_price"
                    placeholder="Min Price"
                    value="{{ request('min_price') }}"
                    class="w-full border p-2 rounded mb-4">

                <input
                    type="number"
                    name="max_price"
                    placeholder="Max Price"
                    value="{{ request('max_price') }}"
                    class="w-full border p-2 rounded mb-4">

                <button
                    class="w-full bg-red-500 text-white py-2 rounded">

                    Apply Filter

                </button>

            </form>

        </div>

        <!-- Products -->

        <div class="md:col-span-3">

            <div class="grid md:grid-cols-3 gap-6">

                @forelse($products as $product)

                    <x-product-card
                        :product="$product" />

                @empty

                    <p>No Products Found</p>

                @endforelse

            </div>

            <div class="mt-8">

                {{ $products->links() }}

            </div>

        </div>

    </div>

</div>

@endsection