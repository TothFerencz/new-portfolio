<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pulse Coffee')</title>
    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-gray-50 text-gray-800 onest-font">

    {{-- Header --}}


    {{-- Navbar --}}
    @include('layouts.navbar')

    {{-- Oldalspecifikus tartalom --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- Scripts --}}
    @vite('resources/js/app.js')
</body>

</html>
