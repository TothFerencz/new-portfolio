<header class="relative bg-white min-h-screen flex flex-col justify-center px-6 pt-32 sm:pt-40 pb-20">
    <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">

        <!-- Bal oldal -->
        <div class="space-y-6 text-center lg:text-left">
            <!-- Badge -->
            <div class="inline-flex items-center justify-center bg-white border border-gray-200 px-4 py-1 text-detail">
                <span class="tracking-wide">Highly regarded</span>
            </div>

            <!-- Headline -->
            <h1 class="text-display font-contrast-thin text-gray-900">
                Full Stack Developer
            </h1>

            <!-- Paragraph -->
            <p class="text-body text-gray-600 max-w-lg mx-auto lg:mx-0">
                Building modern, scalable and user-focused web applications with clean code and proven best practices.
            </p>

            <!-- CTA gombok -->
            <div class="flex flex-col sm:flex-row sm:justify-center lg:justify-start gap-4">
                <a href="#"
                    class="px-6 py-3 rounded-full bg-gradient-to-b from-black to-gray-900 text-white text-detail hover:opacity-90 transition">
                    Get Started
                </a>
                <a href="#"
                    class="px-6 py-3 rounded-full bg-gray-100 text-gray-700 text-detail hover:bg-gray-200 transition">
                    Learn More
                </a>
            </div>

            <!-- Kártyák bal oldalt -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-8">
                <!-- Card 1 -->
                <div class="bg-gray-100 rounded-2xl p-6 flex flex-col items-start space-y-3">
                    <div
                        class="flex items-center space-x-2 text-detail text-gray-700 border bg-white border-gray-200 px-2 py-1 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24">
                            <path fill="#000"
                                d="M7.425 2.83A1.25 1.25 0 0 1 8.603 2h6.453a1.25 1.25 0 0 1 1.186 1.645L14.79 8h3.96c1.103 0 1.665 1.327.897 2.12L8.586 21.536c-1.054 1.088-2.872.106-2.541-1.372l1.27-5.668l-1.57-.006a1.75 1.75 0 0 1-1.641-2.337zm1.354.67l-3.262 9.157a.25.25 0 0 0 .234.333l2.502.01a.75.75 0 0 1 .729.914l-1.473 6.578L18.159 9.5h-4.41a.75.75 0 0 1-.71-.987l1.67-5.013z" />
                        </svg>
                        <span>Expert</span>
                    </div>
                    <h3 class="text-base text-gray-900">Backend Development</h3>
                    <p class="text-detail text-gray-600">Robust APIs and scalable server-side solutions.</p>
                </div>

                <!-- Card 2 -->
                <div class="bg-gray-100 rounded-2xl p-6 flex flex-col items-start space-y-3">
                    <div
                        class="flex items-center space-x-2 text-detail text-gray-700 border bg-white border-gray-200 px-2 py-1 rounded-md">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" viewBox="0 0 24 24">
                            <path fill="#000"
                                d="M7.425 2.83A1.25 1.25 0 0 1 8.603 2h6.453a1.25 1.25 0 0 1 1.186 1.645L14.79 8h3.96c1.103 0 1.665 1.327.897 2.12L8.586 21.536c-1.054 1.088-2.872.106-2.541-1.372l1.27-5.668l-1.57-.006a1.75 1.75 0 0 1-1.641-2.337zm1.354.67l-3.262 9.157a.25.25 0 0 0 .234.333l2.502.01a.75.75 0 0 1 .729.914l-1.473 6.578L18.159 9.5h-4.41a.75.75 0 0 1-.71-.987l1.67-5.013z" />
                        </svg>
                        <span>Expert</span>
                    </div>
                    <h3 class="text-base text-gray-900">Frontend Development</h3>
                    <p class="text-detail text-gray-600">Modern, responsive and user-friendly interfaces.</p>
                </div>
            </div>
        </div>

        <!-- Jobb oldal -->
        <div class="space-y-8">
            <!-- Kép -->
            <div class="flex justify-center lg:justify-end">
                <div class="w-[600px] h-[300px]">
                    <img src="{{ asset('storage/header.png') }}" alt="Full Stack Developer"
                        class="w-full h-full object-cover rounded-2xl">
                </div>
            </div>

            <!-- Skilled Developers + statisztikák -->
            <div class="space-y-6 text-center lg:text-left">
                <!-- Badge -->
                <div class="flex justify-center lg:justify-start">
                    <div
                        class="flex items-center space-x-2 justify-center bg-white border border-gray-200 px-4 py-1 text-detail">
                        <span class="text-detail tracking-wide">Skilled Developer</span>
                    </div>
                </div>

                <!-- Statisztikák -->
                <div class="space-y-6 text-center lg:text-left">
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                        <div>
                            <p class="text-lg font-contrast-thin text-gray-900">25+</p>
                            <p class="text-detail text-gray-600">Projects delivered</p>
                        </div>
                        <div>
                            <p class="text-lg font-contrast-thin text-gray-900">95%</p>
                            <p class="text-detail text-gray-600">Client satisfaction rate</p>
                        </div>
                        <div>
                            <p class="text-lg font-contrast-thin text-gray-900">3+</p>
                            <p class="text-detail text-gray-600">Years of experience</p>
                        </div>
                    </div>

                    <!-- Gomb mobilon középen -->
                    <div class="flex justify-center lg:justify-start">
                        <a href="#portfolio"
                            class="w-7 h-7 rounded-full bg-black flex items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                                <path fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M12 5v14m6-6l-6 6m-6-6l6 6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
