<div class="bg-white rounded-lg shadow overflow-hidden">

    <img
        src="{{ asset('storage/'.$product->image) }}"
        alt="{{ $product->name }}"
        class="w-full h-64 object-cover">

    <div class="p-4">

        <h3 class="font-semibold text-lg">

            {{ $product->name }}

        </h3>

        <p class="text-gray-500">

            ₹{{ number_format($product->price) }}

        </p>

        <a href="/products/{{ $product->slug }}"
           class="inline-block mt-3 bg-red-500 text-white px-4 py-2 rounded">

            View Details

        </a>

    </div>

</div>