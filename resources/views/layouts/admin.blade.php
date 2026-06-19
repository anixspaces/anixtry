<!DOCTYPE html>
<html>

<head>

<title>Admin Panel</title>

@vite([
'resources/css/app.css'
])

</head>

<body class="bg-gray-100">

<div class="flex">

   <div class="w-64 bg-gray-900 text-white min-h-screen">

    <div class="p-6 text-2xl font-bold">

        Paint Admin

    </div>

    <nav class="p-4 space-y-3">

        <a
        href="{{ route('admin.dashboard') }}"
        class="block">

            Dashboard

        </a>

        <a
        href="{{ route('admin.categories.index') }}"
        class="block">

            Categories

        </a>

        <a
        href="{{ route('admin.products.index') }}"
        class="block">

            Products

        </a>

        <a
        href="{{ route('admin.galleries.index') }}"
        class="block">

            Galleries

        </a>

        <a
        href="{{ route('admin.contacts.index') }}"
        class="block">

            Messages

        </a>

    </nav>

</div>

    <main class="flex-1 p-6">

        @yield('content')

    </main>

</div>

</body>
</html>