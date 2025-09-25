<!-- resources/views/partials/about.blade.php -->
<section id="about" class="bg-white pt-32 pb-20 px-6">
    <div class="max-w-6xl mx-auto text-center">
        <!-- Badge -->
        <span class="inline-flex items-center justify-center bg-white border border-gray-200 px-4 py-1 text-detail mb-6">
            About Myself
        </span>

        <!-- Főcím -->
        <h2 class="text-title font-contrast-thin text-gray-900 mb-16">
            Hi, I'm Ferencz, Full-Stack Web Developer.
        </h2>
    </div>

    <!-- Felső grid -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-12 items-start">
        <!-- Bal oldal -->
        <div class="flex flex-col items-center text-center lg:items-start lg:text-left space-y-6">
            <!-- Badge fent, külön -->
            <span class="inline-flex items-center justify-center bg-white border border-gray-200 px-4 py-1 text-detail">
                Available For Hire
            </span>

            <h3 class="text-subtitle text-gray-900">Turning Ideas into Websites</h3>
            <p class="text-body text-gray-600">
                I focus on building modern, scalable, and user-friendly applications using clean code and best
                practices.
            </p>
            <a href="{{ url('/contact') }}"
                class="inline-block px-6 py-3 rounded-full bg-black text-white text-detail hover:bg-gray-900 transition">
                Let’s Get Started
            </a>
        </div>

        <!-- Közép: Kép -->
        <div class="flex justify-center">
            <img src="{{ asset('storage/myphoto.png') }}" alt="About Me"
                class="w-80 h-80 object-cover rounded-full object-[center_10%]">
        </div>

        <!-- Jobb oldal: Statok -->
        <div class="flex flex-col items-center text-center lg:items-start lg:text-left space-y-6">
            <!-- Badge fent -->
            <span class="inline-flex items-center justify-center bg-white border border-gray-200 px-4 py-1 text-detail">
                Skilled Developer
            </span>
            <div class="grid grid-cols-2 gap-8 mt-6">
                <div>
                    <p class="text-lg font-contrast-thin text-gray-900">25+</p>
                    <p class="text-detail text-gray-600">Projects delivered</p>
                </div>
                <div>
                    <p class="text-lg font-contrast-thin text-gray-900">95%</p>
                    <p class="text-detail text-gray-600">Client satisfaction rate</p>
                </div>
                <div>
                    <p class="text-lg font-contrast-thin text-gray-900">3+</p>
                    <p class="text-detail text-gray-600">Years of experience</p>
                </div>
                <div>
                    <p class="text-lg font-contrast-thin text-gray-900">100%</p>
                    <p class="text-detail text-gray-600">Clean code focus</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Alsó kártyák -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 gap-6 mt-20 text-center">
        <!-- Backend Card -->
        <div
            class="bg-white border border-gray-200 rounded-2xl p-6 flex flex-col items-center text-center lg:items-start lg:text-left">
            <span
                class="inline-flex items-center bg-white text-gray-700 text-detail px-3 py-1 rounded-full border border-gray-300 mb-4">
                Backend
            </span>
            <h4 class="text-base mb-2">Backend Development</h4>
            <p class="text-detail text-gray-600 mb-4">Technologies I use for backend development:</p>
            <div class="flex flex-wrap justify-center lg:justify-start gap-2 text-detail text-gray-700">
                <span class="px-3 py-1 rounded-full border border-gray-300">PHP</span>
                <span class="px-3 py-1 rounded-full border border-gray-300">Laravel</span>
                <span class="px-3 py-1 rounded-full border border-gray-300">MySQL</span>
            </div>
        </div>

        <!-- Frontend Card -->
        <div
            class="bg-white border border-gray-200 rounded-2xl p-6 flex flex-col items-center text-center lg:items-start lg:text-left">
            <span
                class="inline-flex items-center bg-white text-gray-700 text-detail px-3 py-1 rounded-full border border-gray-300 mb-4">
                Frontend
            </span>
            <h4 class="text-base mb-2">Frontend Development</h4>
            <p class="text-detail text-gray-600 mb-4">Technologies I use for frontend development:</p>
            <div class="flex flex-wrap justify-center lg:justify-start gap-2 text-detail text-gray-700">
                <span class="px-3 py-1 rounded-full border border-gray-300">HTML</span>
                <span class="px-3 py-1 rounded-full border border-gray-300">CSS</span>
                <span class="px-3 py-1 rounded-full border border-gray-300">JavaScript</span>
                <span class="px-3 py-1 rounded-full border border-gray-300">Tailwind CSS</span>
                <span class="px-3 py-1 rounded-full border border-gray-300">Vue.js</span>
                <span class="px-3 py-1 rounded-full border border-gray-300">React.js</span>
            </div>
        </div>
    </div>
</section>
