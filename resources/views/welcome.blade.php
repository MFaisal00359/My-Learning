<x-guest-layout>
    {{-- NAVBAR --}}
    <nav class="sticky inset-0 z-10 block h-max w-full max-w-full rounded-none border border-white/80 bg-white bg-opacity-80 py-2 px-4 sm:px-12 md:24 lg:32 text-white shadow-md backdrop-blur-2xl backdrop-saturate-200 lg:px-8 lg:py-4">
        <div class="flex flex-wrap items-center text-gray-900">
            <a href="#" class="mr-4 cursor-pointer py-1.5 font-sans flex text-base items-center font-medium leading-relaxed text-inherit antialiased">
                <img class="w-10 h-10" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAACXBIWXMAAAsTAAALEwEAmpwYAAADiUlEQVR4nO1aTU8TQRh+1UA9edMDxZgYEyMhYBF3TfwgMQYI4eof8EB7sB5MOHMFYyQRe9I/gGC0fhCPnhQquNuAHurBBFiJabuJFkMiS8e8MgvDsttu96Nu2XmSJ5Cd2Z15nnnft7ObAeDg4ODg4ODg4ODg4DBg5Bs5Op7fevKooBVTxTKxy4lCmSSUrb1c1dYTijY7pGjJZI5EjGP150hElNU7gqTOipK6LsoqcUNBVhVBVkfblkgzOMV4futxLcJ1juUN4g2MK5oUXyZRfZxLUiEqykXZrWgLI0YdG/CwoBVQ0PxGmZTJLvB/vGZlwPBaZQN0EzAStlfeH/F6JDg2IEUFaax6ij9lYip+5Ed18YwJtzHs/RKv07UBRhgjAHMew97OyhsM+CDI6lxDGXC3RpEVDVjVSoKklhrKgNhMlhy+P0Xg3uQe4rWumeyOOLafsY2l2YRbpjPkkMkYeA3bzPoZ23wzoGn82b6J6cQ2XZixH9tWzYAjD6Ytx8A2q35sm28GdFWKgDe7q8z2M7a5iYDolHUEsG2eGqBRD/CvV/lfyYDA1YD5jTLZLG9X/lAakGLIDVB4BJBQp0AsjPuAFMNQ7gNSDEO5D0hV+tARphowVuVDR5AM6H6/QmJvF0nnq3nvDBheawwDLrz7SjrTH3foiQEjNXzo+J8G4Mqz4l0ZMOHwQ8f/NOBf2HtlQMJkwvXYB7gh5ryvBjTVYR/gygCDeM8N6KrDPiDQBiQCXgO4AWkeAYSnQJrXABLefUDa5xRo4vuAbHj2AfFVrdRI+4CLc99NDMiUXKSANhc0A9j3fLPVNuEnxwYMKVoySAYY3/Nt8aU07NiAZI5E8CRHEAwwe8+3wc9nZnL7ziPVhPgyifplwq2VTVfv+dXEx14vnAIvcHOJNONxFjzR4VVhRPE3vvyyX91t5HzHi8zvznRmAcPe9cr7BVEuPrcSKcjqJBx0dGfzZwWpqO4zQCoWhGyhFcKA7sXiSVFWn4qy+hOJKx8a8RwcHAcKEQA4BgAnAACL2GkAaAOA8wAgAMBVyh4AuE7ZCwB9eEAcAAYp++m1XqZfD3O/QJ/ZRsdopWPi2HX7vW8GADzh3Q4Al+mEBwPCPjqndjpH50fkLdABAAMBEGqXA3TOnqEj7AYADauWBkiBFj9SACxgVgTPMUXwCi1i1xwUQbwH78Vn6EUQn60XweNeFMG/mhg8XGgQAsQAAAAASUVORK5CYII=">
                <span class="px-4">My Learning</span>
            </a>
        </div>
    </nav>

    <section class="container hidden md:block mx-auto p-10 px-0 md:px-0 h-max selection:bg-red-500 selection:text-white">
        <div class="bg-cover bg-no-repeat bg-center w-full flex items-center justify-center">
            <img class="rounded-2xl" src="{{ url('assets/images/png-banner.png') }}" alt="image description">
        </div>
    </section>

    <section class="relative container mx-auto p-4 sm:py-20 px-0 md:p-10 md:px-0 selection:bg-red-500 selection:text-white">
        {{-- SECTION CARDS --}}
        <section class="p-5 md:p-0 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10 items-start justify-items-center ">

            {{-- CARD MODUL --}}
            <article class="relative shadow-md max-w-lg w-full pt-4 cursor-pointer rounded-xl border-solid border-2 border-gray-400 ">
                <div class="bg-no-repeat bg-center overflow-hidden min-h-96 flex items-center justify-center">
                    <img class="w-[300px] rounded-xl" src="{{ url('assets/images/png-modul-pembelajaran.png') }}" alt="modul-pembelajaran" layout="fill"/>
                </div>
                <div class="p-6 text-center">
                    <h5 class="block mb-2 font-sans text-xl md:text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Modul Pembelajaran
                    </h5>
                </div>
                <div class="p-6 pt-0 text-center">
                    <button class="inline-block text-center border-b-4 w-[32px] cursor-pointer">
                        <!-- black background shadow -->
                        <div class="absolute inset-x-12 bottom-4 bg-blue-700 border rounded-md" />

                        <!-- text -->
                        <div class="relative text-white bottom-1 text-xl font-thin leading-none tracking-wider py-2 px-4 bg-blue-500 rounded-md transform hover:translate-y-1 transition duration-200 ease-in-out">
                            <a href="{{ url('/moduls_page') }}">
                                Detail Kelas →
                            </a>
                        </div>
                    </button>
                </div>
            </article>

            {{-- CARD INFORMASI BEASISWA --}}
            <article class="relative shadow-md max-w-lg w-full pt-4 cursor-pointer rounded-xl border-solid border-2 border-gray-400">
                <div class="bg-no-repeat bg-center overflow-hidden min-h-96 flex items-center justify-center">
                    <img class="w-[300px] rounded-xl" src="{{ url('assets/images/png-info-beasiswa.png') }}" alt="info-beasiswa" layout="fill"/>
                </div>
                <div class="p-6 text-center">
                    <h5 class="block mb-2 font-sans text-xl md:text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        Informasi Beasiswa
                    </h5>
                </div>
                <div class="p-6 pt-0 text-center">
                    <button class="inline-block text-center border-b-4 w-[32px] cursor-pointer">
                        <!-- black background shadow -->
                        <div class="absolute inset-x-12 bottom-4 bg-blue-700 border rounded-md" />

                        <!-- text -->
                        <div class="relative text-white bottom-1 text-xl font-thin leading-none tracking-wider py-2 px-4 bg-blue-500 rounded-md transform hover:translate-y-1 transition duration-200 ease-in-out">
                            <a href="{{ url('beasiswa-page') }}">
                                Detail Beasiswa →
                            </a>
                        </div>
                    </button>
                </div>
            </article>

            {{-- CARD LAYANAN KONSELING --}}
            <article class="relative shadow-md max-w-lg w-full pt-4 cursor-pointer rounded-xl border-solid border-2 border-gray-400">
                <div class="bg-no-repeat bg-center overflow-hidden min-h-96 flex items-center justify-center">
                    <img class="w-[300px] rounded-xl" src="{{ url('/assets/images/png-konseling.png') }}" alt="png-konseling" layout="fill"/>
                </div>
                <div class="p-6 text-center">
                    <h5 class="block mb-2 font-sans text-xl md:text-2xl font-semibold tracking-normal text-blue-gray-900">
                        Layanan Konseling
                    </h5>
                </div>
                <div class="p-6 pt-0 text-center">
                    <button class="inline-block text-center border-b-4 w-[32px] cursor-pointer">
                        <!-- black background shadow -->
                        <div class="absolute inset-x-12 bottom-4 bg-blue-700 border rounded-md" />

                        <!-- text -->
                        <div class="relative text-white bottom-1 text-xl font-thin leading-none tracking-wider py-2 px-4 bg-blue-500 rounded-md transform hover:translate-y-1 transition duration-200 ease-in-out">
                            <a href="{{ url('konseling-page') }}">
                                Detail Konseling →
                            </a>
                        </div>
                    </button>
                </div>
            </article>
        </section>
    </section>

    <footer class="flex w-full flex-row flex-wrap items-center justify-center gap-y-6 gap-x-12 border-t border-blue-gray-50 py-6 px-4 sm:px-12 md:24 lg:32 text-center md:justify-between bottom-0">
        <p class="block font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased">
            © 2023 Made with ❤ by Rorojonggrang Team | IF'21 ITERA
        </p>
        <ul class="flex flex-wrap items-center gap-y-2 gap-x-8">
            <li>
                <a href="#" class="block font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased transition-colors hover:text-pink-500 focus:text-pink-500">
                Contribute
                </a>
            </li>
            <li>
                <a href="#" class="block font-sans text-base font-normal leading-relaxed text-blue-gray-900 antialiased transition-colors hover:text-pink-500 focus:text-pink-500">
                Contact Us
                </a>
            </li>
        </ul>
    </footer>
</x-guest-layout>
