@extends('layouts.admin')

@section('content')

<div class="flex justify-between mb-6">

    <h1 class="text-3xl font-bold">
        Categories
    </h1>

    <a href="{{ route('admin.categories.create') }}"
       class="bg-blue-500 text-white px-4 py-2 rounded">

        Add Category

    </a>

</div>

@if(session('success'))

<div class="bg-green-100 p-3 rounded mb-4">

    {{ session('success') }}

</div>

@endif

<table class="w-full border">

    <thead>

        <tr>

            <th class="border p-3">
                Image
            </th>

            <th class="border p-3">
                Name
            </th>

            <th class="border p-3">
                Status
            </th>

            <th class="border p-3">
                Action
            </th>

        </tr>

    </thead>

    <tbody>

        @foreach($categories as $category)

        <tr>

            <td class="border p-3">

                @if($category->image)

                <img
                src="{{ asset('storage/'.$category->image) }}"
                class="w-16 h-16 object-cover">

                @endif

            </td>

            <td class="border p-3">

                {{ $category->name }}

            </td>

            <td class="border p-3">

                {{ $category->status ? 'Active' : 'Inactive' }}

            </td>

            <td class="border p-3">

                <a href="{{ route('admin.categories.edit',$category) }}"
                   class="text-blue-500">

                    Edit

                </a>

                <form
                    action="{{ route('admin.categories.destroy',$category) }}"
                    method="POST"
                    class="inline">

                    @csrf
                    @method('DELETE')

                    <button
                        onclick="return confirm('Delete?')"
                        class="text-red-500 ml-4">

                        Delete

                    </button>

                </form>

            </td>

        </tr>

        @endforeach

    </tbody>

</table>

<div class="mt-6">

    {{ $categories->links() }}

</div>

@endsection