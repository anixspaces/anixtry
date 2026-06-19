<div class="rounded-lg overflow-hidden shadow">

    <img
        src="{{ asset('storage/'.$gallery->image) }}"
        class="w-full h-72 object-cover">

    <div class="p-4">

        <h3 class="font-semibold">

            {{ $gallery->title }}

        </h3>

        <p class="text-gray-500">

            {{ $gallery->room_type }}

        </p>

    </div>

</div>