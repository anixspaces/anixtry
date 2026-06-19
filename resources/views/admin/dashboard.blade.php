@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-8">

    Dashboard

</h1>

<!-- Statistics -->

<div class="grid md:grid-cols-4 gap-6 mb-10">

    <div class="bg-white p-6 rounded shadow">

        <h3 class="text-gray-500">

            Products

        </h3>

        <div class="text-4xl font-bold mt-2">

            {{ $totalProducts }}

        </div>

    </div>

    <div class="bg-white p-6 rounded shadow">

        <h3 class="text-gray-500">

            Categories

        </h3>

        <div class="text-4xl font-bold mt-2">

            {{ $totalCategories }}

        </div>

    </div>

    <div class="bg-white p-6 rounded shadow">

        <h3 class="text-gray-500">

            Galleries

        </h3>

        <div class="text-4xl font-bold mt-2">

            {{ $totalGalleries }}

        </div>

    </div>

    <div class="bg-white p-6 rounded shadow">

        <h3 class="text-gray-500">

            Messages

        </h3>

        <div class="text-4xl font-bold mt-2">

            {{ $totalContacts }}

        </div>

    </div>

</div>

<!-- Quick Actions -->

<div class="grid md:grid-cols-4 gap-6 mb-10">

    <a
        href="{{ route('admin.categories.create') }}"
        class="bg-blue-500 text-white p-4 rounded text-center">

        Add Category

    </a>

    <a
        href="{{ route('admin.products.create') }}"
        class="bg-green-500 text-white p-4 rounded text-center">

        Add Product

    </a>

    <a
        href="{{ route('admin.galleries.create') }}"
        class="bg-purple-500 text-white p-4 rounded text-center">

        Add Gallery

    </a>

    <a
        href="{{ route('admin.contacts.index') }}"
        class="bg-orange-500 text-white p-4 rounded text-center">

        View Messages

    </a>

</div>

<!-- Latest Products -->

<div class="bg-white rounded shadow p-6 mb-10">

    <h2 class="text-2xl font-bold mb-6">

        Latest Products

    </h2>

    <table class="w-full">

        <thead>

            <tr>

                <th class="text-left p-3">
                    Product
                </th>

                <th class="text-left p-3">
                    Price
                </th>

            </tr>

        </thead>

        <tbody>

            @foreach($latestProducts as $product)

                <tr>

                    <td class="p-3">

                        {{ $product->name }}

                    </td>

                    <td class="p-3">

                        ₹{{ $product->price }}

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>

<!-- Latest Contacts -->

<div class="bg-white rounded shadow p-6">

    <h2 class="text-2xl font-bold mb-6">

        Latest Messages

    </h2>

    <table class="w-full">

        <thead>

            <tr>

                <th class="text-left p-3">

                    Name

                </th>

                <th class="text-left p-3">

                    Email

                </th>

            </tr>

        </thead>

        <tbody>

            @foreach($latestContacts as $contact)

                <tr>

                    <td class="p-3">

                        {{ $contact->name }}

                    </td>

                    <td class="p-3">

                        {{ $contact->email }}

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>

@endsection