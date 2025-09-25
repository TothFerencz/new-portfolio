@php
    $isHome = request()->routeIs('home');
    $ctaHref = $isHome ? url('/contact') : url('/');
    $ctaLabel = $isHome ? 'Get Started' : 'Go Back';
@endphp

<nav class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50 max-w-4xl w-full px-4">
    <div
        class="flex items-center justify-between bg-white/70 backdrop-blur-md text-black rounded-full px-2 sm:px-3 py-2 border border-gray-200">

        <!-- Bal oldal: profil -->
        <a href="{{ url('/') }}" class="relative group block w-14 h-14 rounded-full overflow-hidden">
            <img src="{{ asset('storage/myphoto.png') }}" alt="Profile"
                class="w-14 h-14 rounded-full object-cover object-top relative z-10">
            <!-- Animált border -->
            <span
                class="absolute inset-0 rounded-full border-2 border-black scale-110 opacity-0 group-hover:opacity-100 group-hover:animate-spin-slow transition duration-700 ease-linear"></span>
        </a>
        <!-- Közép: menü -->
        @if ($isHome)
            <div class="hidden md:flex flex-1 justify-center items-center space-x-5 text-detail">
                <a href="#home" class="px-2 py-2 text-gray-600 hover:text-black transition">
                    Home
                </a>
                <a href="#portfolio" class="px-2 py-2 text-gray-600 hover:text-black transition">
                    Portfolio
                </a>
                <a href="#pricing" class="px-2 py-2 text-gray-600 hover:text-black transition">
                    Pricing
                </a>
                <a href="#about" class="px-2 py-2 text-gray-600 hover:text-black transition">
                    About
                </a>
                <a href="{{ url('/contact') }}" class="px-2 py-2 text-gray-600 hover:text-black transition">
                    Contact
                </a>
            </div>
        @endif

        <!-- Jobb oldal: Get Started -->
        <div class="hidden md:flex">
            <a href="{{ $ctaHref }}"
                class="ml-1 px-6 py-3 rounded-full bg-gradient-to-b from-black to-gray-900 text-white text-detail hover:opacity-90 transition">
                {{ $ctaLabel }}
            </a>
        </div>

        <!-- Mobil menü gomb / CTA -->
        @if ($isHome)
            <button id="menu-toggle"
                class="md:hidden flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300"
                type="button" aria-controls="mobile-menu" aria-expanded="false">
                <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        @else
            <a href="{{ $ctaHref }}"
                class="md:hidden flex items-center justify-center px-4 py-2 rounded-full bg-black text-white text-detail hover:bg-gray-900 transition"
                role="button">
                {{ $ctaLabel }}
            </a>
        @endif
    </div>

    @if ($isHome)
        <!-- Mobil menü -->
        <div id="mobile-menu"
            class="hidden md:hidden bg-white/90 backdrop-blur-md mt-2 rounded-2xl border border-gray-200 p-4 space-y-2 text-detail">
            <a href="#home" class="block px-3 py-2 rounded-md text-gray-600 hover:text-black hover:bg-gray-100">
                Home
            </a>
            <a href="#portfolio" class="block px-3 py-2 rounded-md text-gray-600 hover:text-black hover:bg-gray-100">
                Portfolio
            </a>
            <a href="#pricing" class="block px-3 py-2 rounded-md text-gray-600 hover:text-black hover:bg-gray-100">
                Pricing
            </a>
            <a href="#about" class="block px-3 py-2 rounded-md text-gray-600 hover:text-black hover:bg-gray-100">
                About
            </a>
            <a href="{{ url('/contact') }}"
                class="block px-3 py-2 rounded-md text-gray-600 hover:text-black hover:bg-gray-100">
                Contact
            </a>
            <a href="{{ $ctaHref }}"
                class="block w-full text-center px-5 py-2 rounded-full bg-black text-white text-detail hover:bg-gray-900">
                {{ $ctaLabel }}
            </a>
        </div>
    @endif
</nav>
<style>
    @keyframes spin-slow {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .animate-spin-slow {
        animation: spin-slow 4s linear infinite;
    }
</style>
