@vite(['resources/css/app.css', 'resources/js/app.js'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body class="bg-gray-100 text-gray-800">

    {{-- Header --}}
    @include('partials.header')

    {{-- Contenido principal --}}
    <main class="max-w-6xl mx-auto mt-8 p-6 bg-white shadow rounded-lg">
        @yield('content')
    </main>
x
    {{-- Footer --}}
    @include('partials.footer')

</body>
</html>
