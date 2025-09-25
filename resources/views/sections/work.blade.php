<section class="bg-white pt-32 pb-20 px-6">
    <div class="max-w-6xl mx-auto">

        <!-- Felső szöveges rész -->
        <div class="mb-12">
            <!-- Kategória -->


            <!-- Főcím -->
            <h1 class="text-subtitle font-contrast-thin text-gray-900 mb-2">
                {{ $project->title }}
            </h1>

            <!-- Alcím -->
            <p class="text-body text-gray-600 mb-6">
                {{ $project->category }}
            </p>

            <!-- Meta információk -->
            <div class="flex flex-wrap gap-2 mb-8">

                <span
                    class="inline-flex items-center bg-white text-gray-700 text-detail px-3 py-1 rounded border border-gray-300">
                    Timeline | {{ $project->timeline ?? '' }}
                </span>
                <span
                    class="inline-flex items-center bg-white text-gray-700 text-detail px-3 py-1 rounded border border-gray-300">
                    Years | {{ $project->years }}
                </span>
            </div>

            <!-- Gombok -->

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
