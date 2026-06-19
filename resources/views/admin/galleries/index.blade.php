@extends('layouts.admin')

@section('content')

<div class="flex justify-between mb-6">

    <h1 class="text-3xl font-bold">

        Galleries

    </h1>

    <a
        href="{{ route('admin.galleries.create') }}"
        class="bg-blue-500 text-white px-4 py-2 rounded">

        Add Gallery

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
Title
</th>

<th class="border p-3">
Room
</th>

<th class="border p-3">
Action
</th>

</tr>

</thead>

<tbody>

@foreach($galleries as $gallery)

<tr>

<td class="border p-3">

<img
src="{{ asset('storage/'.$gallery->image) }}"
class="w-16 h-16 object-cover">

</td>

<td class="border p-3">

{{ $gallery->title }}

</td>

<td class="border p-3">

{{ $gallery->room_type }}

</td>

<td class="border p-3">

<a
href="{{ route('admin.galleries.edit',$gallery) }}"
class="text-blue-500">

Edit

</a>

<form
action="{{ route('admin.galleries.destroy',$gallery) }}"
method="POST"
class="inline">

@csrf
@method('DELETE')

<button
onclick="return confirm('Delete?')"
class="text-red-500 ml-3">

Delete

</button>

</form>

</td>

</tr>

@endforeach

</tbody>

</table>

<div class="mt-6">

{{ $galleries->links() }}

</div>

@endsection