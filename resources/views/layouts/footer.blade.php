<footer class="bg-white py-16 px-4 sm:px-6">
    <div class="max-w-6xl mx-auto text-center">

        <!-- Kompakt fekete box háttérrel -->
        <div class="relative rounded-3xl overflow-hidden">
            <!-- Háttérkép invertálva -->
            <img src="{{ asset('storage/header.png') }}" alt="Footer Background"
                class="absolute inset-0 w-full h-full object-cover filter invert">

            <!-- Fekete overlay -->
            <div class="absolute inset-0 bg-black/50"></div>

            <!-- Tartalom -->
            <div class="relative z-10 py-20 sm:py-24 lg:py-28 px-6 text-white">
                <p class="caption text-white/70 mb-3 tracking-[0.3em]">Start You Journey !</p>
                <h2 class="heading-card text-white sm:text-3xl md:text-4xl mb-4">
                    Let’s bring your vision to life
                </h2>
                <p class="body-sm text-white/80 mb-6 max-w-xl mx-auto">
                    Transform your ideas into real-world achievements
                </p>
                <a href="{{ url('/contact') }}"
                    class="inline-flex items-center justify-center gap-2 rounded-full bg-white px-6 py-2.5 text-sm font-semibold text-black shadow transition hover:bg-white/90">
                    Get In Touch
                </a>
            </div>
        </div>

        <!-- Copyright + byline -->
        <div class="mt-6 text-slate-500 text-sm flex flex-col sm:flex-row items-center justify-between gap-2">
            <p class="body-sm text-slate-500">All right reserved. ©2025</p>
            <p class="body-sm text-slate-500">Made with ❤️ by Ferencz</p>
        </div>
    </div>
</footer>
