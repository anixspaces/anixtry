@extends('layouts.admin')

@section('content')

<div class="flex justify-between mb-6">

    <h1 class="text-3xl font-bold">

        Products

    </h1>

    <a
        href="{{ route('admin.products.create') }}"
        class="bg-blue-500 text-white px-4 py-2 rounded">

        Add Product

    </a>

</div>

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
Category
</th>

<th class="border p-3">
Price
</th>

<th class="border p-3">
Action
</th>

</tr>

</thead>

<tbody>

@foreach($products as $product)

<tr>

<td class="border p-3">

<img
src="{{ asset('storage/'.$product->image) }}"
class="w-16 h-16 object-cover">

</td>

<td class="border p-3">
{{ $product->name }}
</td>

<td class="border p-3">
{{ $product->category->name }}
</td>

<td class="border p-3">
₹{{ $product->price }}
</td>

<td class="border p-3">

<a
href="{{ route('admin.products.edit',$product) }}"
class="text-blue-500">

Edit

</a>

<form
action="{{ route('admin.products.destroy',$product) }}"
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

{{ $products->links() }}

</div>

@endsection