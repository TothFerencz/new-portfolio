<section class="bg-[#f6f7f9] py-20 px-4 sm:px-6">
    <div class="max-w-6xl mx-auto text-center">
        <!-- Badge -->
        <span class="badge-pill mb-6">
            <!-- Bal nyíl (forgatva) -->
            <img src="{{ asset('storage/arrow.svg') }}" alt="Left Arrow" class="w-4 mr-2 transform rotate-180">

            My Services

            <!-- Jobb nyíl -->
            <img src="{{ asset('storage/arrow.svg') }}" alt="Right Arrow" class="w-4 ml-2">
        </span>
        <!-- Cím -->
        <h2 class="heading-section mb-5">
            Creative Full-Stack Developer
        </h2>

        <!-- Leírás -->
        <p class="body-base max-w-2xl mx-auto mb-12 text-balance">
            I build modern, responsive and scalable web applications using the latest technologies.
            My focus is on clean code, performance, and user-friendly experiences.
        </p>

        <!-- Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
            <!-- Card 1 -->
            <div class="bg-white rounded-3xl shadow p-6 sm:p-8 text-left">
                <div class="w-full h-40 sm:h-44 mb-4 rounded-3xl overflow-hidden flex items-center justify-center bg-gray-50">
                    <img src="{{ asset('storage/frontend.png') }}" alt="Frontend" class="max-h-full object-contain">
                </div>
                <h3 class="heading-card mb-2">Frontend Development</h3>
                <p class="body-sm">
                    Strong experience with <span class="font-medium">HTML, CSS, JavaScript</span>,
                    frameworks like <span class="font-medium">Vue.js</span> and <span class="font-medium">React</span>,
                    plus <span class="font-medium">Bootstrap</span> and <span class="font-medium">TailwindCSS</span> for
                    responsive design.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-3xl shadow p-6 sm:p-8 text-left">
                <div class="w-full h-40 sm:h-44 mb-4 rounded-3xl overflow-hidden flex items-center justify-center bg-gray-50">
                    <img src="{{ asset('storage/backend.png') }}" alt="Backend" class="max-h-full object-contain">
                </div>
                <h3 class="heading-card mb-2">Backend Development</h3>
                <p class="body-sm">
                    Building reliable backends with <span class="font-medium">PHP</span> and
                    <span class="font-medium">Laravel</span>.
                    Experienced in database design, authentication, APIs, and business logic.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-3xl shadow p-6 sm:p-8 text-left">
                <div class="w-full h-40 sm:h-44 mb-4 rounded-3xl overflow-hidden flex items-center justify-center bg-gray-50">
                    <img src="{{ asset('storage/frontend.png') }}" alt="Laravel Filament"
                        class="max-h-full object-contain">
                </div>
                <h3 class="heading-card mb-2">Laravel Filament</h3>
                <p class="body-sm">
                    I create custom <span class="font-medium">Laravel Filament</span> admin dashboards,
                    management systems and tools tailored to clients’ business needs.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white rounded-3xl shadow p-6 sm:p-8 text-left">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 sm:w-9 sm:h-9 text-gray-700 mb-3" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 5h16v10H4zM12 15v4m-4 0h8" />
                </svg>
                <h3 class="heading-card mb-2">Responsive Websites</h3>
                <p class="body-sm">
                    Every website I build is fully <span class="font-medium">responsive</span>,
                    optimized for desktop, tablet, and mobile devices to ensure the best user experience.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="bg-white rounded-3xl shadow p-6 sm:p-8 text-left">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 sm:w-9 sm:h-9 text-gray-700 mb-3" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20 13v-2a2 2 0 00-2-2h-2V7a2 2 0 00-2-2h-2V3a2 2 0 00-2-2H8a2 2 0 00-2 2v2H4a2 2 0 00-2 2v2h2a2 2 0 012 2v2H4a2 2 0 00-2 2v2a2 2 0 002 2h2v2a2 2 0 002 2h2v-2a2 2 0 012-2h2v-2a2 2 0 002-2h2a2 2 0 002-2z" />
                </svg>
                <h3 class="heading-card mb-2">Custom Web Solutions</h3>
                <p class="body-sm">
                    From landing pages to complex platforms,
                    I provide tailored solutions that meet client goals and deliver measurable results.
                </p>
            </div>

            <!-- Card 6 -->
            <div class="bg-white rounded-3xl shadow p-6 sm:p-8 text-left">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 sm:w-9 sm:h-9 text-gray-700 mb-3" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 18l6-6-6-6M8 6l-6 6 6 6" />
                </svg>
                <h3 class="heading-card mb-2">Clean Code & Best Practices</h3>
                <p class="body-sm">
                    I value <span class="font-medium">clean, maintainable code</span>,
                    applying industry best practices to make projects scalable and long-lasting.
                </p>
            </div>
        </div>

        <!-- Alsó stack címkék -->
        <div class="flex flex-wrap justify-center gap-3 mt-12">
            <span class="px-4 py-1 bg-white rounded-full shadow text-slate-600 text-xs sm:text-sm font-medium">HTML</span>
            <span class="px-4 py-1 bg-white rounded-full shadow text-slate-600 text-xs sm:text-sm font-medium">CSS</span>
            <span class="px-4 py-1 bg-white rounded-full shadow text-slate-600 text-xs sm:text-sm font-medium">JavaScript</span>
            <span class="px-4 py-1 bg-white rounded-full shadow text-slate-600 text-xs sm:text-sm font-medium">Vue.js</span>
            <span class="px-4 py-1 bg-white rounded-full shadow text-slate-600 text-xs sm:text-sm font-medium">React</span>
            <span class="px-4 py-1 bg-white rounded-full shadow text-slate-600 text-xs sm:text-sm font-medium">Bootstrap</span>
            <span class="px-4 py-1 bg-white rounded-full shadow text-slate-600 text-xs sm:text-sm font-medium">TailwindCSS</span>
            <span class="px-4 py-1 bg-white rounded-full shadow text-slate-600 text-xs sm:text-sm font-medium">PHP</span>
            <span class="px-4 py-1 bg-white rounded-full shadow text-slate-600 text-xs sm:text-sm font-medium">Laravel</span>
            <span class="px-4 py-1 bg-white rounded-full shadow text-slate-600 text-xs sm:text-sm font-medium">Filament</span>
        </div>
    </div>
</section>
