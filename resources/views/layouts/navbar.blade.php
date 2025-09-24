<nav class="fixed top-4 left-1/2 transform -translate-x-1/2 z-50 w-[92%] max-w-3xl px-2">
    <div class="flex items-center justify-between bg-[#0f1113] text-white rounded-full px-3 sm:px-4 py-2 shadow-lg">

        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <div class="bg-white text-black w-9 h-9 rounded-full flex items-center justify-center font-bold text-sm">
                F
            </div>
            <span class="font-semibold text-sm sm:text-base">Ferencz</span>
        </div>

        <!-- Desktop menu középen -->
        <div class="hidden md:flex flex-1 justify-center items-center space-x-2 lg:space-x-4 text-sm">
            <a href="{{ url('/') }}"
                class="px-3 py-2 sm:px-4 rounded-full font-medium transition
               {{ request()->is('/') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:text-white transition' }}">
                Home
            </a>
            <a href="{{ url('/projects') }}"
                class="px-3 py-2 sm:px-4 rounded-full font-medium transition
               {{ request()->is('projects') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:text-white transition' }}">
                Projects
            </a>
            <a href="{{ url('/pricing') }}"
                class="px-3 py-2 sm:px-4 rounded-full font-medium transition
               {{ request()->is('pricing') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:text-white transition' }}">
                Pricing
            </a>
            <a href="{{ url('/contact') }}"
                class="px-3 py-2 sm:px-4 rounded-full font-medium transition
               {{ request()->is('contact') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:text-white transition' }}">
                Contact
            </a>
        </div>

        <!-- Get In Touch gomb jobb oldalt -->
        <div class="hidden md:flex">
            <a href="{{ url('/contact') }}" class="ml-3 button-secondary bg-white text-black hover:bg-white/90">
                Get In Touch
            </a>
        </div>

        <!-- Mobile menu button -->
        <button id="menu-toggle"
            class="md:hidden flex items-center justify-center w-10 h-10 rounded-full bg-gray-800 focus:outline-none focus:ring-2 focus:ring-white/30">
            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <!-- Mobile dropdown -->
    <div id="mobile-menu" class="hidden md:hidden bg-[#0f1113] mt-2 rounded-2xl shadow-lg p-4 space-y-2 text-sm">
        <a href="{{ url('/') }}"
            class="block px-3 py-2 rounded-md {{ request()->is('/') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
            Home
        </a>
        <a href="{{ url('/projects') }}"
            class="block px-3 py-2 rounded-md {{ request()->is('projects') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
            Projects
        </a>
        <a href="{{ url('/pricing') }}"
            class="block px-3 py-2 rounded-md {{ request()->is('pricing') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
            Pricing
        </a>
        <a href="{{ url('/contact') }}"
            class="block px-3 py-2 rounded-md {{ request()->is('contact') ? 'bg-gray-700 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }}">
            Contact
        </a>
        <a href="{{ url('/contact') }}" class="button-secondary bg-white text-black hover:bg-white/90 w-full">
            Get In Touch
        </a>
    </div>
</nav>

<script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
</script>
