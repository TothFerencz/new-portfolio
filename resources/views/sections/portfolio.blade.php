<section class="bg-white pt-12 pb-20 px-6">
    <div class="max-w-6xl mx-auto text-center">
        <!-- Badge -->
        <span
            class="inline-flex items-center bg-white text-gray-700 text-sm px-4 py-1 rounded-full border border-gray-300 mb-6">
            Our Portfolio
        </span>

        <!-- Cím -->
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            Proven results and stunning designs
        </h2>

        <!-- Leírás -->
        <p class="text-gray-600 max-w-2xl mx-auto mb-12 text-base sm:text-lg">
            Enduring and adaptable design
        </p>
    </div>

    <!-- Grid -->
    <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-14">
        @foreach (\App\Models\Project::take(2)->get() as $project)
            <div class="group">
                <!-- Képváltás hover-re -->
                <a href="{{ url('/portfolio/' . $project->slug) }}" class="block relative overflow-hidden rounded-2xl">
                    <img src="{{ asset('storage/' . $project->first_image) }}" alt="{{ $project->title }}"
                        class="w-full h-90 object-cover rounded-2xl transition-opacity duration-1000 ease-in-out group-hover:opacity-0 absolute inset-0">
                    <img src="{{ asset('storage/' . $project->second_image) }}" alt="{{ $project->title }}"
                        class="w-full h-90 object-cover rounded-2xl transition-opacity duration-1000 ease-in-out opacity-0 group-hover:opacity-100 relative">
                </a>

                <!-- Tartalom -->
                <div class="mt-6 flex items-start justify-between">
                    <div>
                        <h3 class="font-semibold text-lg text-gray-900 mb-1">{{ $project->title }}</h3>
                        <p class="text-gray-500 text-sm mb-4">{{ $project->category }} • {{ $project->years }}</p>

                        <!-- Kategóriák -->
                        <div class="flex flex-wrap gap-2">
                            @if (!empty($project->options) && is_array($project->options))
                                @foreach ($project->options as $option)
                                    <span
                                        class="inline-flex items-center bg-white text-gray-700 text-xs px-3 py-1 rounded-full border border-gray-300">
                                        {{ $option }}
                                    </span>
                                @endforeach
                            @endif
                        </div>
                    </div>

                    <!-- Gomb -->
                    <div class="flex justify-center lg:justify-start">
                        <a href="{{ url('/portfolio/' . $project->slug) }}"
                            class="w-8 h-8 rounded-full bg-black flex items-center justify-center text-white hover:bg-gray-900 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 transform rotate-[-130deg]"
                                viewBox="0 0 24 24">
                                <path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M12 5v14m6-6l-6 6m-6-6l6 6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>
