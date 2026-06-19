@extends('layouts.app')

@section('title','About Us')

@section('content')

<!-- Hero Section -->

<section class="bg-gradient-to-r from-red-500 to-orange-500 text-white py-20">

    <div class="container mx-auto">

        <h1 class="text-5xl font-bold">

            About AnixSpaces

        </h1>

        <p class="mt-6 text-xl">

            Transforming homes through beautiful colors and inspiring designs.

        </p>

    </div>

</section>

<!-- Company Overview -->

<section class="py-20">

    <div class="container mx-auto">

        <div class="grid md:grid-cols-2 gap-12 items-center">

            <div>

                <img
                    src="https://images.unsplash.com/photo-1484154218962-a197022b5858"
                    class="rounded-lg shadow-lg">

            </div>

            <div>

                <h2 class="text-4xl font-bold mb-6">

                    Who We Are

                </h2>

                <p class="text-gray-600 leading-8">

                    AnixSpaces is a modern paint and home decor platform
                    inspired by the customer experience offered by Asian Paints.

                    We help customers discover premium paint products,
                    explore home inspirations, and visualize wall colors
                    before making a purchase.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- Mission & Vision -->

<section class="bg-gray-100 py-20">

    <div class="container mx-auto">

        <div class="grid md:grid-cols-2 gap-10">

            <div class="bg-white p-8 rounded-lg shadow">

                <h3 class="text-3xl font-bold mb-4">

                    Our Mission

                </h3>

                <p>

                    To simplify home decoration by offering quality
                    paint solutions and innovative digital tools.

                </p>

            </div>

            <div class="bg-white p-8 rounded-lg shadow">

                <h3 class="text-3xl font-bold mb-4">

                    Our Vision

                </h3>

                <p>

                    To become India's most trusted platform for
                    paints, colors, and interior inspiration.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- Why Choose Us -->

<section class="py-20">

    <div class="container mx-auto">

        <h2 class="text-4xl font-bold text-center mb-12">

            Why Choose Us

        </h2>

        <div class="grid md:grid-cols-4 gap-8">

            <div class="text-center">

                <div class="text-5xl mb-4">
                    🎨
                </div>

                <h4 class="font-bold text-xl">

                    Premium Colors

                </h4>

            </div>

            <div class="text-center">

                <div class="text-5xl mb-4">
                    🏠
                </div>

                <h4 class="font-bold text-xl">

                    Home Inspiration

                </h4>

            </div>

            <div class="text-center">

                <div class="text-5xl mb-4">
                    🖌️
                </div>

                <h4 class="font-bold text-xl">

                    Color Visualizer

                </h4>

            </div>

            <div class="text-center">

                <div class="text-5xl mb-4">
                    ⭐
                </div>

                <h4 class="font-bold text-xl">

                    Expert Support

                </h4>

            </div>

        </div>

    </div>

</section>

<!-- Statistics -->

<section class="bg-red-500 text-white py-20">

    <div class="container mx-auto">

        <div class="grid md:grid-cols-4 gap-10 text-center">

            <div>

                <div class="text-5xl font-bold">

                    500+

                </div>

                <p class="mt-2">

                    Products

                </p>

            </div>

            <div>

                <div class="text-5xl font-bold">

                    200+

                </div>

                <p class="mt-2">

                    Colors

                </p>

            </div>

            <div>

                <div class="text-5xl font-bold">

                    1000+

                </div>

                <p class="mt-2">

                    Customers

                </p>

            </div>

            <div>

                <div class="text-5xl font-bold">

                    100+

                </div>

                <p class="mt-2">

                    Inspirations

                </p>

            </div>

        </div>

    </div>

</section>

<!-- CTA -->

<section class="py-20">

    <div class="container mx-auto text-center">

        <h2 class="text-4xl font-bold">

            Ready To Transform Your Home?

        </h2>

        <p class="mt-4 text-gray-600">

            Explore our premium paint collection today.

        </p>

        <a
            href="{{ route('products.index') }}"
            class="inline-block mt-6 bg-red-500 text-white px-8 py-3 rounded-lg">

            Explore Products

        </a>

    </div>

</section>

@endsection