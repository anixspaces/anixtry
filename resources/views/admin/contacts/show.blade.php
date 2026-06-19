@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-6">

    Contact Details

</h1>

<div class="bg-white p-6 rounded shadow">

    <p>

        <strong>Name:</strong>

        {{ $contact->name }}

    </p>

    <p class="mt-3">

        <strong>Email:</strong>

        {{ $contact->email }}

    </p>

    <p class="mt-3">

        <strong>Phone:</strong>

        {{ $contact->phone }}

    </p>

    <p class="mt-3">

        <strong>Message:</strong>

    </p>

    <div class="mt-2">

        {{ $contact->message }}

    </div>

    <form
        action="{{ route(
            'admin.contacts.destroy',
            $contact
        ) }}"
        method="POST"
        class="mt-6">

        @csrf
        @method('DELETE')

        <button
            onclick="return confirm('Delete Message?')"
            class="bg-red-500 text-white px-4 py-2 rounded">

            Delete

        </button>

    </form>

</div>

@endsection