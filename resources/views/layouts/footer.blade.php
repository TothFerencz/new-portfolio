<!-- resources/views/partials/footer.blade.php -->
<footer class="bg-white pt-20 pb-10 px-6">
    <div class="max-w-6xl mx-auto bg-gray-50 rounded-3xl text-center py-16 px-6 relative">
        <!-- Villám ikon körben -->
        <div class="absolute -top-6 left-1/2 transform -translate-x-1/2">
            <div class="w-12 h-12 rounded-full bg-black flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" viewBox="0 0 24 24">
                    <path fill="#fff" fill-rule="evenodd"
                        d="M13.232 2.287A.75.75 0 0 1 13.75 3v6.25H19a.75.75 0 0 1 .607 1.191l-8 11a.75.75 0 0 1-1.357-.44v-6.25H5a.75.75 0 0 1-.607-1.192l8-11a.75.75 0 0 1 .839-.272"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </div>

        <!-- Badge -->
        <span class="inline-flex items-center justify-center bg-white border border-gray-200 px-4 py-1 text-detail mb-6">
            Let’s Build Together
        </span>

        <!-- Headline -->
        <h2 class="text-title font-contrast-thin text-gray-900 mb-4">
            Ready to start your next project?
        </h2>

        <!-- Leírás -->
        <p class="text-body text-gray-600 max-w-xl mx-auto mb-8">
            As a Full-Stack Developer, I create clean, scalable, and user-focused solutions. Let’s turn your ideas into
            reality.
        </p>

        <!-- Gomb -->
        <a href="{{ url('/contact') }}"
            class="inline-block px-6 py-3 rounded-full bg-black text-white text-detail hover:bg-gray-900 transition">
            Get In Touch
        </a>
    </div>

    <!-- Alsó sor -->
    <div class="max-w-6xl mx-auto mt-10 flex flex-col sm:flex-row justify-between items-center text-detail text-gray-500">
        <p>©2025 Ferencz Toth — All rights reserved.</p>
        <div class="flex space-x-6 mt-4 sm:mt-0">
            <a href="#" class="hover:text-gray-900">Privacy</a>
            <a href="#" class="hover:text-gray-900">Terms</a>
        </div>
    </div>
</footer>
