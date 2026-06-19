@extends('layouts.admin')

@section('content')

<h1 class="text-3xl font-bold mb-8">

    Contact Messages

</h1>

<table class="w-full border">

    <thead>

        <tr>

            <th class="border p-3">Name</th>

            <th class="border p-3">Email</th>

            <th class="border p-3">Action</th>

        </tr>

    </thead>

    <tbody>

        @foreach($contacts as $contact)

            <tr>

                <td class="border p-3">
                    {{ $contact->name }}
                </td>

                <td class="border p-3">
                    {{ $contact->email }}
                </td>

                <td class="border p-3">

                    <a
                        href="{{ route(
                            'admin.contacts.show',
                            $contact
                        ) }}"
                        class="text-blue-500">

                        View

                    </a>

                </td>

            </tr>

        @endforeach

    </tbody>

</table>

<div class="mt-6">

    {{ $contacts->links() }}

</div>

@endsection