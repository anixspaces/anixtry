@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">

    Edit Category

</h1>

<form
action="{{ route('admin.categories.update',$category) }}"
method="POST"
enctype="multipart/form-data">

@csrf
@method('PUT')

    <div class="mb-4">

        <label>Name</label>

        <input
            type="text"
            name="name"
            class="w-full border p-3" value="{{ $category->name }}">

    </div>

    <div class="mb-4">

        <label>Description</label>

        <textarea
            name="description"
            class="w-full border p-3" value="{{ $category->description }}"></textarea>

    </div>

    <div class="mb-4">

        <label>Image</label>

        <input
            type="file"
            name="image">

    </div>

    <div class="mb-4">

        <label>

            <input
                type="checkbox"
                name="status"
                checked>

            Active

        </label>

    </div>

    <button
        class="bg-blue-500 text-white px-4 py-2 rounded">

        Save

    </button>

</form>

@endsection