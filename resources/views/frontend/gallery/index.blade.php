@extends('layouts.app')

@section('title','Inspiration Gallery')

@section('content')

<div class="container mx-auto py-12">

    <h1 class="text-4xl font-bold mb-8">

        Inspiration Gallery

    </h1>

    <form
        method="GET"
        class="flex flex-wrap gap-4 mb-10">

        <input
            type="text"
            name="search"
            placeholder="Search Inspiration"
            value="{{ request('search') }}"
            class="border p-2 rounded">

        <select
            name="room_type"
            class="border p-2 rounded">

            <option value="">
                All Rooms
            </option>

            <option value="Bedroom">
                Bedroom
            </option>

            <option value="Kitchen">
                Kitchen
            </option>

            <option value="Living Room">
                Living Room
            </option>

            <option value="Office">
                Office
            </option>

            <option value="Bathroom">
                Bathroom
            </option>

        </select>

        <button
            class="bg-red-500 text-white px-4 py-2 rounded">

            Filter

        </button>

    </form>

    <div
        class="grid md:grid-cols-3 gap-8">

        @foreach($galleries as $gallery)

            <x-gallery-card
                :gallery="$gallery" />

        @endforeach

    </div>

    <div class="mt-10">

        {{ $galleries->links() }}

    </div>

</div>

@endsection