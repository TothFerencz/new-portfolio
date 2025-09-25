<section id="contact" class="bg-white py-32 px-6">
    <div class="max-w-2xl mx-auto text-center">
        <!-- Badge -->
        <span
            class="inline-flex items-center bg-white text-gray-700 text-detail  border border-gray-200 px-4 py-1 text-detail mb-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
            Get In Touch
        </span>

        <!-- Cím -->
        <h2 class="text-title font-contrast-thin text-gray-900 mb-4">
            Let’s work together
        </h2>

        <!-- Leírás -->
        <p class="text-body text-gray-600 mb-10">
            Have a project in mind or just want to say hello?
            Fill out the form and I’ll get back to you as soon as possible.
        </p>

        @if (session('status'))
            <div class="mb-6 rounded-lg bg-green-100 px-4 py-3 text-detail text-green-800">
                {{ session('status') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="mb-6 rounded-lg bg-red-100 px-4 py-3 text-detail text-red-800">
                <ul class="list-disc space-y-1 pl-5 text-left">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('contact.submit') }}" method="POST" class="space-y-4">
            @csrf
            <input type="text" name="name" placeholder="Your Name"
                class="w-full rounded-lg border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                required>

            <input type="email" name="email" placeholder="your@email.com"
                class="w-full rounded-lg border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                required>

            <textarea name="message" rows="5" placeholder="Tell me about your project..."
                class="w-full rounded-lg border border-gray-200 px-4 py-3 focus:outline-none focus:ring-2 focus:ring-black"
                required></textarea>

            <button type="submit"
                class="w-full py-3 rounded-full bg-gradient-to-b from-black to-gray-900 text-white text-detail hover:opacity-90 transition">
                Send Message
            </button>
        </form>
    </div>
</section>
