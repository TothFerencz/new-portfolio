<!DOCTYPE html>
<html lang="hu">

<head>
    @php
        $siteName = 'Ferencz Toth | Full-Stack Developer';
        $rawTitle = trim($__env->yieldContent('title', ''));
        $pageTitle = $rawTitle !== '' && !str_contains($rawTitle, 'Ferencz Toth')
            ? $rawTitle . ' | ' . $siteName
            : ($rawTitle !== '' ? $rawTitle : $siteName);
        $pageDescription = trim($__env->yieldContent('meta_description', 'Full-stack developer crafting high-performance web applications with Laravel, Vue, and Tailwind CSS.'));
        $pageKeywords = trim($__env->yieldContent('meta_keywords', 'Ferencz Toth, full stack developer, Laravel developer, web development, Tailwind CSS, Vue, portfolio'));
        $pageUrl = trim($__env->yieldContent('canonical_url', url()->current()));
        $pageRobots = trim($__env->yieldContent('meta_robots', 'index,follow'));
        $ogType = trim($__env->yieldContent('meta_type', 'website'));
        $ogImage = trim($__env->yieldContent('meta_image', asset('storage/header.png')));
    @endphp

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $pageDescription }}">
    <meta name="keywords" content="{{ $pageKeywords }}">
    <meta name="author" content="Ferencz Toth">
    <meta name="robots" content="{{ $pageRobots }}">
    <link rel="canonical" href="{{ $pageUrl }}">

    <meta property="og:locale" content="hu_HU">
    <meta property="og:type" content="{{ $ogType }}">
    <meta property="og:title" content="{{ $pageTitle }}">
    <meta property="og:description" content="{{ $pageDescription }}">
    <meta property="og:url" content="{{ $pageUrl }}">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:image" content="{{ $ogImage }}">
    <meta property="og:image:alt" content="{{ $pageTitle }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $pageTitle }}">
    <meta name="twitter:description" content="{{ $pageDescription }}">
    <meta name="twitter:image" content="{{ $ogImage }}">

    @stack('meta')
    @stack('structured-data')

    @vite('resources/css/app.css')
</head>

<body class="antialiased bg-gray-50 text-gray-800 font-sans">

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
