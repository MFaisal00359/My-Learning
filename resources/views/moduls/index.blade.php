<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-sm text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="p-5 md:p-0 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10 items-start justify-items-center ">
                {{-- CARD MODUL --}}
                <article class="relative shadow-md max-w-lg w-full pt-4 cursor-pointer rounded-xl border-solid border-2 border-red-400 ">
                    <div class="bg-no-repeat bg-center overflow-hidden min-h-96 flex items-center justify-center">
                        <img class="w-[300px] rounded-xl" src="{{ url('assets/images/png-modul-pembelajaran.png') }}" alt="modul-pembelajaran" layout="fill"/>
                    </div>
                    <div class="p-6 text-center">
                        <h5 class="block mb-2 font-sans text-sm md:text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            KELAS 10
                        </h5>
                    </div>
                    <div class="p-6 pt-0 text-center">
                        <button class="inline-block text-center border-b-4 w-[32px] cursor-pointer">
                            <!-- black background shadow -->
                            <div class="absolute inset-x-12 bottom-4 bg-blue-700 border rounded-md" />

                            <!-- text -->
                            <div class="relative text-white bottom-1 text-sm font-thin leading-none tracking-wider py-2 px-4 bg-blue-500 rounded-md transform hover:translate-y-1 transition duration-200 ease-in-out">
                                <a href="{{ route('moduls.modul_11.index') }}">
                                    Detail Kelas →
                                </a>
                            </div>
                        </button>
                    </div>
                </article>

                {{-- CARD INFORMASI BEASISWA --}}
                <article class="relative shadow-md max-w-lg w-full pt-4 cursor-pointer rounded-xl border-solid border-2 border-red-400 ">
                    <div class="bg-no-repeat bg-center overflow-hidden min-h-96 flex items-center justify-center">
                        <img class="w-[300px] rounded-xl" src="{{ url('assets/images/png-info-beasiswa.png') }}" alt="info-beasiswa" layout="fill"/>
                    </div>
                    <div class="p-6 text-center">
                        <h5 class="block mb-2 font-sans text-sm md:text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            KELAS 10
                        </h5>
                    </div>
                    <div class="p-6 pt-0 text-center">
                        <button class="inline-block text-center border-b-4 w-[32px] cursor-pointer">
                            <!-- black background shadow -->
                            <div class="absolute inset-x-12 bottom-4 bg-blue-700 border rounded-md" />

                            <!-- text -->
                            <div class="relative text-white bottom-1 text-sm font-thin leading-none tracking-wider py-2 px-4 bg-blue-500 rounded-md transform hover:translate-y-1 transition duration-200 ease-in-out">
                                <a href="{{ route('moduls.modul_11.index') }}">
                                    Detail Kelas →
                                </a>
                            </div>
                        </button>
                    </div>
                </article>

                <article class="relative shadow-md max-w-lg w-full pt-4 cursor-pointer rounded-xl border-solid border-2 border-red-400 ">
                    <div class="bg-no-repeat bg-center overflow-hidden min-h-96 flex items-center justify-center">
                        <img class="w-[300px] rounded-xl" src="{{ url('/assets/images/png-konseling.png') }}" alt="info-beasiswa" layout="fill"/>
                    </div>
                    <div class="p-6 text-center">
                        <h5 class="block mb-2 font-sans text-sm md:text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            KELAS 10
                        </h5>
                    </div>
                    <div class="p-6 pt-0 text-center">
                        <button class="inline-block text-center border-b-4 w-[32px] cursor-pointer">
                            <!-- black background shadow -->
                            <div class="absolute inset-x-12 bottom-4 bg-blue-700 border rounded-md" />

                            <!-- text -->
                            <div class="relative text-white bottom-1 text-sm font-thin leading-none tracking-wider py-2 px-4 bg-blue-500 rounded-md transform hover:translate-y-1 transition duration-200 ease-in-out">
                                <a href="{{ route('moduls.modul_11.index') }}">
                                    Detail Kelas →
                                </a>
                            </div>
                        </button>
                    </div>
                </article>
            </section>
        </div>
    </div>
</x-app-layout>
