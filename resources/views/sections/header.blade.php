<header class="relative bg-[#f9f9f9] min-h-screen flex flex-col justify-center px-4 sm:px-6 pt-24 sm:pt-32 pb-16 sm:pb-20">
    <!-- Háttérkép -->
    <div class="absolute inset-0">
        <img src="{{ asset('storage/header.png') }}" alt="Header background" class="w-full h-full object-cover">
    </div>

    <!-- Tartalom -->
    <div class="relative z-10 max-w-6xl mx-auto text-center">
        <!-- Full Stack Webdeveloper badge -->
        <span class="badge-pill mb-6">
            <img src="{{ asset('storage/arrow.svg') }}" alt="Left Arrow"
                class="w-3 sm:w-4 -ml-1 mr-2 transform rotate-180">
            Full Stack Webdeveloper
            <img src="{{ asset('storage/arrow.svg') }}" alt="Right Arrow" class="w-3 sm:w-4 ml-2">
        </span>

        <!-- Főcím -->
        <h1 class="heading-hero mb-5">
            Building modern and scalable<br class="hidden sm:block">
            web applications from scratch
        </h1>

        <!-- Leírás -->
        <p class="body-base max-w-2xl mx-auto mb-8 text-balance px-2 sm:px-0">
            I create responsive, high-performance websites and applications using technologies like Laravel, Vue, React,
            PHP, and Tailwind. My goal is clean code, smooth user experience, and scalability.
        </p>

        <!-- Gombok -->
        <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 justify-center mb-10 sm:mb-12">
            <a href="{{ url('/contact') }}" class="button-primary text-sm sm:text-base">
                Get In Touch
            </a>
            <a href="{{ url('/projects') }}" class="button-secondary text-sm sm:text-base">
                View Projects
            </a>
        </div>

        <!-- Fotó kerettel -->
        <div class="flex justify-center">
            <div class="rounded-2xl bg-white shadow-xl p-1 inline-block">
                <div class="w-52 h-72 sm:w-72 sm:h-[26rem] md:w-80 md:h-[28rem] rounded-xl overflow-hidden">
                    <img src="{{ asset('storage/myphoto.png') }}" alt="My Photo" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </div>
</header>
