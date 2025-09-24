<section class="bg-[#f6f7f9] py-24 px-4 sm:px-6">
    <div class="max-w-6xl mx-auto">

        <!-- Badge -->
        <div class="text-center mb-4">
            <span class="badge-pill">
                <img src="{{ asset('storage/arrow.svg') }}" alt="Left Arrow"
                    class="w-3 sm:w-4 -ml-1 mr-2 transform rotate-180">
                Our Project
                <img src="{{ asset('storage/arrow.svg') }}" alt="Right Arrow" class="w-3 sm:w-4 ml-1 sm:ml-2">
            </span>
        </div>

        <!-- Cím + leírás -->
        <div class="text-center mb-10 sm:mb-12">
            <h2 class="heading-section mb-4">
                Premier Project for Our Most <br class="hidden sm:block"> Valued Client
            </h2>
            <p class="body-base max-w-xl sm:max-w-2xl mx-auto text-balance">
                See how we’ve helped clients turn ambitious ideas into impactful digital products.
            </p>
        </div>

        <!-- Gradient háttér doboz -->
        <div class="rounded-3xl p-5 sm:p-8 md:p-10"
            style="background-image: linear-gradient(356deg, #f8f8f8, #ffffff);">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                @foreach ($projects as $index => $project)
                    <a href="{{ url('/projects/' . $project->slug) }}"
                        class="bg-white rounded-2xl relative flex flex-col group transition-all duration-300 overflow-hidden {{ $index === 0 ? 'lg:col-span-2 lg:flex-row lg:items-stretch' : '' }}">

                        <!-- Kép -->
                        <div class="overflow-hidden rounded-2xl m-4 {{ $index === 0 ? 'lg:w-1/2' : '' }}">
                            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}"
                                class="w-full h-48 sm:h-60 md:h-64 object-cover transition-transform duration-700 ease-in-out group-hover:scale-110 rounded-2xl">
                        </div>

                        <!-- Szöveg -->
                        <div class="flex flex-col justify-between px-6 pt-4 pb-6 {{ $index === 0 ? 'lg:w-1/2 lg:py-6' : '' }}">
                            <div>
                                <h3 class="heading-card mb-2">
                                    {{ $project->title }}
                                </h3>
                                <p class="body-sm sm:body-base mb-4">
                                    {{ $project->short_description }}
                                </p>
                            </div>

                            <!-- Kategória + nyíl -->
                            <div class="flex items-center justify-between mt-6">
                                <span class="caption tracking-[0.2em] sm:tracking-[0.35em] text-slate-500">
                                    {{ $project->category }}
                                </span>
                                <div
                                    class="w-8 h-8 flex items-center justify-center bg-black text-white rounded-full transition-transform duration-500 ease-in-out group-hover:rotate-45">
                                    <x-heroicon-o-arrow-up-right class="w-4 h-4" />
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

    </div>
</section>
