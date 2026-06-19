@extends('layouts.app')

@section('title','Home')

@section('content')

<!-- Hero -->

<section
class="bg-gradient-to-r
from-red-500
to-orange-400
text-white">

    <div class="container mx-auto py-28">

        <h1
        class="text-5xl font-bold">

            Transform Your Home
            With Premium Colors

        </h1>

        <p class="mt-6 text-xl">

            Inspired by Asian Paints

        </p>

    </div>

</section>

<!-- Categories -->

<section class="py-20">

    <div class="container mx-auto">

        <h2
        class="text-3xl font-bold mb-10">

            Categories

        </h2>

        <div
        class="grid md:grid-cols-4 gap-6">

            @foreach($categories as $category)

                <div
                class="border rounded-lg p-6 text-center">

                    {{ $category->name }}

                </div>

            @endforeach

        </div>

    </div>

</section>

<!-- Products -->

<section class="py-20 bg-gray-100">

    <div class="container mx-auto">

        <h2
        class="text-3xl font-bold mb-10">

            Featured Products

        </h2>

        <div
        class="grid md:grid-cols-4 gap-8">

            @foreach($featuredProducts as $product)

                <x-product-card
                    :product="$product"
                />

            @endforeach

        </div>

    </div>

</section>

<!-- Gallery -->

<section class="py-20">

    <div class="container mx-auto">

        <h2
        class="text-3xl font-bold mb-10">

            Inspiration Gallery

        </h2>

        <div
        class="grid md:grid-cols-3 gap-8">

            @foreach($galleries as $gallery)

                <x-gallery-card
                    :gallery="$gallery"
                />

            @endforeach

        </div>

    </div>

</section>

@endsection