<!-- resources/views/partials/about.blade.php -->
<section class="bg-white pt-32 pb-20 px-6">
    <div class="max-w-6xl mx-auto text-center">
        <!-- Badge -->
        <span
            class="inline-flex items-center bg-white text-gray-700 text-sm px-4 py-1 rounded-full border border-gray-300 mb-6">
            About Myself
        </span>

        <!-- Főcím -->
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-16">
            Hi, I'm Ferencz, Full-Stack Web Developer.
        </h2>
    </div>

    <!-- Felső grid -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">
        <!-- Bal oldal -->
        <div class="text-left space-y-6">
            <span
                class="inline-flex items-center bg-white text-gray-700 text-sm px-4 py-1 rounded-full border border-gray-300">
                Available For Hire
            </span>
            <h3 class="text-2xl font-bold text-gray-900">Turning Ideas into Websites</h3>
            <p class="text-gray-600">
                My four-step process ensures your goals are met with precision and creativity.
            </p>
            <a href="{{ url('/contact') }}"
                class="inline-block px-6 py-3 rounded-full bg-black text-white text-sm font-medium hover:bg-gray-900 transition">
                Let’s Get Started
            </a>
        </div>

        <!-- Közép: Kép -->
        <div class="flex justify-center">
            <img src="{{ asset('storage/myphoto.png') }}" alt="About Me" class="w-80 h-80 object-cover rounded-full">
        </div>

        <!-- Jobb oldal: Statok -->
        <div class="text-center lg:text-left space-y-6">
            <span
                class="inline-flex items-center bg-white text-gray-700 text-sm px-4 py-1 rounded-full border border-gray-300">
                Skilled Developer
            </span>
            <div class="grid grid-cols-2 gap-8 mt-6">
                <div>
                    <p class="text-3xl font-bold text-gray-900">17+</p>
                    <p class="text-gray-600 text-sm">Websites launched</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-gray-900">88%</p>
                    <p class="text-gray-600 text-sm">Client satisfaction rate</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-gray-900">11+</p>
                    <p class="text-gray-600 text-sm">Years of expertise</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-gray-900">11+</p>
                    <p class="text-gray-600 text-sm">Years of coding</p>
                </div>
            </div>
            <div class="mt-8">
                <a href="#next-section"
                    class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-black text-white hover:bg-gray-900 transition">
                    ↓
                </a>
            </div>
        </div>
    </div>

    <!-- Alsó kártyák -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mt-20">
        <!-- Card 1 -->
        <div class="bg-white border border-gray-200 rounded-2xl p-6 text-left">
            <span
                class="inline-flex items-center bg-white text-gray-700 text-xs px-3 py-1 rounded-full border border-gray-300 mb-4">
                Expert
            </span>
            <h4 class="font-semibold text-lg mb-2">Brand Design</h4>
            <p class="text-gray-600 text-sm">Logos that reflect your core values.</p>
        </div>

        <!-- Card 2 -->
        <div class="bg-white border border-gray-200 rounded-2xl p-6 text-left">
            <span
                class="inline-flex items-center bg-white text-gray-700 text-xs px-3 py-1 rounded-full border border-gray-300 mb-4">
                Expert
            </span>
            <h4 class="font-semibold text-lg mb-2">UX Design</h4>
            <p class="text-gray-600 text-sm">We integrate research and design thinking.</p>
        </div>

        <!-- Card 3 -->
        <div class="bg-white border border-gray-200 rounded-2xl p-6 text-left">
            <span
                class="inline-flex items-center bg-white text-gray-700 text-xs px-3 py-1 rounded-full border border-gray-300 mb-4">
                Expert
            </span>
            <h4 class="font-semibold text-lg mb-2">Web Development</h4>
            <p class="text-gray-600 text-sm">Clean code, performance, and scalability.</p>
        </div>
    </div>
</section>
