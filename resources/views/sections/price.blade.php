<!-- resources/views/partials/price.blade.php -->
<section class="bg-white pt-32 pb-20 px-6">
    <div class="max-w-6xl mx-auto text-center">
        <!-- Badge -->
        <span
            class="inline-flex items-center bg-white text-gray-700 text-sm px-4 py-1 rounded-full border border-gray-300 mb-6">
            Pricing
        </span>

        <!-- Cím -->
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Flexible pricing
        </h2>

        <!-- Leírás -->
        <p class="text-gray-600 max-w-2xl mx-auto mb-12 text-base sm:text-lg">
            Choose the right service for your project needs. Transparent prices, no hidden fees.
        </p>

        <!-- Grid: 3 ár -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Ár 1 -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 flex flex-col">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-semibold text-lg">Landing Page</h3>
                    <span class="text-xl font-bold text-gray-900">$199</span>
                </div>
                <p class="text-sm text-gray-500 mb-6">Perfect for small projects or product showcases.</p>
                <ul class="space-y-2 text-sm text-gray-700 flex-1">
                    <li class="flex items-center">
                        <span class="mr-2">✔</span> 1–3 sections
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2">✔</span> Responsive design
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2">✔</span> SEO setup
                    </li>
                </ul>
                <a href="{{ url('/contact') }}"
                    class="mt-6 block w-full text-center px-5 py-3 rounded-full bg-black text-white text-sm font-medium hover:bg-gray-900 transition">
                    Start Project
                </a>
            </div>

            <!-- Ár 2 -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 flex flex-col">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-semibold text-lg">Business Website</h3>
                    <span class="text-xl font-bold text-gray-900">$499</span>
                </div>
                <p class="text-sm text-gray-500 mb-6">Ideal for small companies looking for an online presence.</p>
                <ul class="space-y-2 text-sm text-gray-700 flex-1">
                    <li class="flex items-center">
                        <span class="mr-2">✔</span> Up to 6 pages
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2">✔</span> Contact form integration
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2">✔</span> Optimized for speed
                    </li>
                </ul>
                <a href="{{ url('/contact') }}"
                    class="mt-6 block w-full text-center px-5 py-3 rounded-full bg-black text-white text-sm font-medium hover:bg-gray-900 transition">
                    Start Project
                </a>
            </div>

            <!-- Ár 3 -->
            <div class="bg-white rounded-2xl border border-gray-200 shadow-sm p-6 flex flex-col">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="font-semibold text-lg">E-Commerce</h3>
                    <span class="text-xl font-bold text-gray-900">$999</span>
                </div>
                <p class="text-sm text-gray-500 mb-6">Full-featured online store with product management.</p>
                <ul class="space-y-2 text-sm text-gray-700 flex-1">
                    <li class="flex items-center">
                        <span class="mr-2">✔</span> Product catalog
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2">✔</span> Payment integration
                    </li>
                    <li class="flex items-center">
                        <span class="mr-2">✔</span> Admin panel
                    </li>
                </ul>
                <a href="{{ url('/contact') }}"
                    class="mt-6 block w-full text-center px-5 py-3 rounded-full bg-black text-white text-sm font-medium hover:bg-gray-900 transition">
                    Start Project
                </a>
            </div>
        </div>
    </div>
</section>
