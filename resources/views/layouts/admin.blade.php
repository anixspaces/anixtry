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

    <aside class="w-64 bg-white h-screen">

        <div class="p-4">

            <h2 class="font-bold">
                Paint Admin
            </h2>

        </div>

    </aside>

    <main class="flex-1 p-6">

        @yield('content')

    </main>

</div>

</body>
</html>