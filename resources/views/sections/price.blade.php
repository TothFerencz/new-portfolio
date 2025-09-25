<!-- resources/views/partials/price.blade.php -->
@php
    $plans = isset($plans) ? collect($plans) : collect();
@endphp
<section id="pricing" class="bg-white pt-12 pb-20 px-6">
    <div class="max-w-6xl mx-auto text-center">
        <span class="inline-flex items-center justify-center bg-white border border-gray-200 px-4 py-1 text-detail mb-6">
            Pricing
        </span>

        <h2 class="text-title font-contrast-thin text-gray-900 mb-4">
            Flexible pricing
        </h2>

        <p class="text-body text-gray-600 max-w-2xl mx-auto mb-12">
            Choose the right plan for your project. Every package includes more features as you scale up.
        </p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @forelse ($plans as $plan)
                @php
                    $features = collect($plan->features ?? [])->filter(static fn ($feature) => filled($feature));
                @endphp
                <div @class([
                    'bg-white rounded-2xl border border-gray-200 shadow-sm p-6 flex flex-col relative transition',
                    'border-gray-900 shadow-md ring-1 ring-gray-900/10' => $plan->is_featured,
                ])>
                    @if ($plan->is_featured)
                        <span class="absolute top-4 right-4 text-xs px-3 py-1 rounded-full bg-black text-white tracking-wide">
                            Popular
                        </span>
                    @endif

                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-base text-left">{{ $plan->title }}</h3>
                        <span class="text-base font-contrast-thin text-gray-900">{{ $plan->price_with_period }}</span>
                    </div>

                    @if (filled($plan->description))
                        <p class="text-detail text-gray-500 mb-6 text-left">{{ $plan->description }}</p>
                    @endif

                    <ul class="space-y-2 text-detail text-gray-700 flex-1">
                        @forelse ($features as $feature)
                            <li class="flex items-center">
                                <span class="mr-2">✔</span>
                                <span>{{ $feature }}</span>
                            </li>
                        @empty
                            <li class="text-gray-400">Details coming soon.</li>
                        @endforelse
                    </ul>

                    <a href="{{ url($plan->cta_url ?? '/contact') }}"
                        class="mt-6 block w-full text-center px-5 py-3 rounded-full bg-black text-white text-detail hover:bg-gray-900 transition">
                        {{ $plan->cta_label ?? 'Start Project' }}
                    </a>
                </div>
            @empty
                <div class="md:col-span-3 text-center text-gray-500 text-detail">
                    Pricing information is coming soon.
                </div>
            @endforelse
        </div>
    </div>
</section>
