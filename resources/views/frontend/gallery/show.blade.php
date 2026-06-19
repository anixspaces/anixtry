@extends('layouts.app')

@section('title',$gallery->title)

@section('content')

<div class="container mx-auto py-12">

    <div
        class="grid md:grid-cols-2 gap-10">

        <div>

            <img
                src="{{ asset('storage/'.$gallery->image) }}"
                class="w-full rounded-lg">

        </div>

        <div>

            <h1
                class="text-4xl font-bold">

                {{ $gallery->title }}

            </h1>

            <p
                class="mt-4 text-gray-600">

                {{ $gallery->room_type }}

            </p>

            <div
                class="mt-6">

                {{ $gallery->description }}

            </div>

        </div>

    </div>

    <div class="mt-20">

        <h2
            class="text-3xl font-bold mb-8">

            Similar Designs

        </h2>

        <div
            class="grid md:grid-cols-4 gap-6">

            @foreach($relatedImages as $gallery)

                <x-gallery-card
                    :gallery="$gallery"/>

            @endforeach

        </div>

    </div>

</div>

@endsection