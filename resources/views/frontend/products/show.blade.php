@extends('layouts.app')

@section('title',$product->name)

@section('content')

<div class="container mx-auto py-12">

    <div class="grid md:grid-cols-2 gap-10">

        <!-- Image -->

        <div>

            <img
                src="{{ asset('storage/'.$product->image) }}"
                class="w-full rounded-lg">

        </div>

        <!-- Content -->

        <div>

            <h1 class="text-4xl font-bold">

                {{ $product->name }}

            </h1>

            <p class="text-2xl mt-4">

                ₹{{ number_format($product->price) }}

            </p>

            <div class="mt-4">

                Category:

                <span class="font-semibold">

                    {{ $product->category->name }}

                </span>

            </div>

            <div class="mt-4">

                Color:

                <span class="font-semibold">

                    {{ $product->color }}

                </span>

            </div>

            <!-- Color Swatch -->

            <div
                class="w-12 h-12 rounded-full mt-3 border"
                style="
                background:
                {{ $product->color_code }};
                ">
            </div>

            <div class="mt-6">

                {!! nl2br($product->description) !!}

            </div>

        </div>

    </div>

    <!-- Specifications -->

    <div class="mt-20">

        <h2 class="text-3xl font-bold mb-6">

            Specifications

        </h2>

        <table class="w-full border">

            <tr class="border">

                <td class="p-4">
                    Finish
                </td>

                <td class="p-4">
                    {{ $product->finish }}
                </td>

            </tr>

            <tr class="border">

                <td class="p-4">
                    Coverage
                </td>

                <td class="p-4">
                    {{ $product->coverage }}
                </td>

            </tr>

            <tr class="border">

                <td class="p-4">
                    Drying Time
                </td>

                <td class="p-4">
                    {{ $product->drying_time }}
                </td>

            </tr>

        </table>

    </div>

    <!-- Related Products -->

    <div class="mt-20">

        <h2 class="text-3xl font-bold mb-8">

            Related Products

        </h2>

        <div class="grid md:grid-cols-4 gap-6">

            @foreach($relatedProducts as $product)

                <x-product-card
                    :product="$product" />

            @endforeach

        </div>

    </div>

</div>

@endsection