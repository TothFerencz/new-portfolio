<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pulse Coffee')</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-gray-50 text-gray-800">

    {{-- Header --}}
    @include('sections.header')

    {{-- Navbar --}}


    {{-- Oldalspecifikus tartalom --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}


    @vite('resources/js/app.js')
</body>

</html>
