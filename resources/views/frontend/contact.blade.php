@extends('layouts.app')

@section('title','Contact Us')

@section('content')

<div class="container mx-auto py-16">

    <div class="max-w-3xl mx-auto">

        <h1 class="text-4xl font-bold mb-8">

            Contact Us

        </h1>

        @if(session('success'))

            <div
                class="bg-green-100
                border
                border-green-400
                text-green-700
                px-4 py-3
                rounded
                mb-6">

                {{ session('success') }}

            </div>

        @endif

        <form
            action="{{ route('contact.store') }}"
            method="POST"
            class="space-y-6">

            @csrf

            <div>

                <label
                    class="block mb-2 font-medium">

                    Name

                </label>

                <input
                    type="text"
                    name="name"
                    value="{{ old('name') }}"
                    class="w-full border rounded p-3">

                @error('name')
                    <span class="text-red-500">
                        {{ $message }}
                    </span>
                @enderror

            </div>

            <div>

                <label
                    class="block mb-2 font-medium">

                    Email

                </label>

                <input
                    type="email"
                    name="email"
                    value="{{ old('email') }}"
                    class="w-full border rounded p-3">

            </div>

            <div>

                <label
                    class="block mb-2 font-medium">

                    Phone

                </label>

                <input
                    type="text"
                    name="phone"
                    value="{{ old('phone') }}"
                    class="w-full border rounded p-3">

            </div>

            <div>

                <label
                    class="block mb-2 font-medium">

                    Message

                </label>

                <textarea
                    rows="5"
                    name="message"
                    class="w-full border rounded p-3">{{ old('message') }}</textarea>

            </div>

            <button
                class="
                bg-red-500
                text-white
                px-6
                py-3
                rounded">

                Send Message

            </button>

        </form>

    </div>

</div>

@endsection