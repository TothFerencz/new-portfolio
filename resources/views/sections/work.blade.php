<section class="bg-white pt-32 pb-20 px-6">
    <div class="max-w-6xl mx-auto">

        <!-- Felső szöveges rész -->
        <div class="mb-12">
            <!-- Kategória -->
            <span class="text-sm text-gray-500 mb-2 block">
                Website |
            </span>

            <!-- Főcím -->
            <h1 class="text-4xl sm:text-5xl font-bold text-gray-900 mb-2">
                {{ $project->title }}
            </h1>

            <!-- Alcím -->
            <p class="text-lg text-gray-600 mb-6">
                {{ $project->category }}
            </p>

            <!-- Meta információk -->
            <div class="flex flex-wrap gap-2 mb-8">
                <span
                    class="inline-flex items-center bg-white text-gray-700 text-xs px-3 py-1 rounded border border-gray-300">
                    Client | {{ $project->client ?? 'Hanami' }}
                </span>
                <span
                    class="inline-flex items-center bg-white text-gray-700 text-xs px-3 py-1 rounded border border-gray-300">
                    Budget | {{ $project->budget ?? 'Hanami' }}
                </span>
                <span
                    class="inline-flex items-center bg-white text-gray-700 text-xs px-3 py-1 rounded border border-gray-300">
                    Years | {{ $project->years }}
                </span>
            </div>

            <!-- Gombok -->
            <div class="flex items-center gap-4">
                <a href="{{ url('/contact') }}"
                    class="px-6 py-2 rounded-full bg-black text-white text-sm font-medium hover:bg-gray-900 transition">
                    Available For Hire
                </a>
                <a href="{{ $project->preview_url ?? '#' }}"
                    class="px-6 py-2 rounded-full bg-gray-100 text-gray-600 text-sm font-medium hover:bg-gray-200 transition">
                    Live Preview
                </a>
            </div>
        </div>

        <!-- Mockup képek -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="rounded-2xl overflow-hidden shadow-lg bg-gray-50 h-85">
                <img src="{{ asset('storage/' . $project->first_image) }}" alt="{{ $project->title }}"
                    class="w-full h-full object-cover">
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg bg-gray-50 h-85">
                <img src="{{ asset('storage/' . $project->second_image) }}" alt="{{ $project->title }}"
                    class="w-full h-full object-cover">
            </div>
        </div>

    </div>
</section>
