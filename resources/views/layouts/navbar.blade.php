<nav class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50 max-w-4xl w-full px-4">
    <div
        class="flex items-center justify-between bg-white/70 backdrop-blur-md text-black rounded-full px-2 sm:px-3 py-2 border border-gray-200">

        <!-- Bal oldal: profil -->
        <div class="flex items-center space-x-3">
            <img src="{{ asset('storage/myphoto.png') }}" alt="Profile"
                class="w-14 h-14 rounded-full object-cover object-top">
            <div class="leading-tight">
                <p class="text-detail sm:text-body">Hi, I'm Ferencz.</p>
                <p class="text-gray-500 text-xs sm:text-detail">Developer</p>
            </div>
        </div>

        <!-- Közép: menü -->
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
            <a href="/contact" class="px-2 py-2 text-gray-600 hover:text-black transition">
                Contact
            </a>

        </div>

        <!-- Jobb oldal: Get Started -->
        <div class="hidden md:flex">
            <a href="{{ url('/contact') }}"
                class="ml-1 px-6 py-3 rounded-full bg-gradient-to-b from-black to-gray-900 text-white text-detail hover:opacity-90 transition">
                Get Started
            </a>
        </div>

        <!-- Mobil menü gomb -->
        <button id="menu-toggle"
            class="md:hidden flex items-center justify-center w-10 h-10 rounded-full bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-300">
            <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobil menü -->
    <div id="mobile-menu"
        class="hidden md:hidden bg-white/90 backdrop-blur-md mt-2 rounded-2xl border border-gray-200 p-4 space-y-2 text-detail">
        <a href="{{ url('/portfolio') }}"
            class="block px-3 py-2 rounded-md text-gray-600 hover:text-black hover:bg-gray-100">
            Portfolio
        </a>
        <a href="{{ url('/blog') }}"
            class="block px-3 py-2 rounded-md text-gray-600 hover:text-black hover:bg-gray-100">
            Blog
        </a>
        <a href="{{ url('/pricing') }}"
            class="block px-3 py-2 rounded-md text-gray-600 hover:text-black hover:bg-gray-100">
            Pricing
        </a>
        <a href="{{ url('/testimonials') }}"
            class="block px-3 py-2 rounded-md text-gray-600 hover:text-black hover:bg-gray-100">
            Testimonials
        </a>
        <a href="{{ url('/faq') }}"
            class="block px-3 py-2 rounded-md text-gray-600 hover:text-black hover:bg-gray-100">
            Faq
        </a>
        <a href="{{ url('/contact') }}"
            class="block w-full text-center px-5 py-2 rounded-full bg-black text-white text-detail hover:bg-gray-900">
            Get Started
        </a>
    </div>
</nav>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
