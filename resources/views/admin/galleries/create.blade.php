@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">

Add Gallery

</h1>

<form
action="{{ route('admin.galleries.store') }}"
method="POST"
enctype="multipart/form-data">

@csrf

@include('admin.galleries.form')

<button
class="bg-blue-500 text-white px-4 py-2 rounded">

Save

</button>

</form>

@endsection