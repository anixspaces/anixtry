@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">

Add Product

</h1>

<form
action="{{ route('admin.products.store') }}"
method="POST"
enctype="multipart/form-data">

@csrf

@include('admin.products.form')

<button
class="bg-blue-500 text-white px-4 py-2 rounded">

Save

</button>

</form>

@endsection