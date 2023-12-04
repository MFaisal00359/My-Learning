<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <section class="p-5 md:p-0 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4 gap-10 items-start justify-items-center ">
                {{-- CARD MODUL --}}
                <article class="relative shadow-md max-w-lg w-full pt-4 transform duration-100 hover:-translate-y-2 cursor-pointer rounded-xl border-solid border-2 border-sky-400 hover:bg-sky-400 hover:text-white">
                    <div class="bg-no-repeat bg-center overflow-hidden min-h-96 flex items-center justify-center">
                        <img class="w-[300px] rounded-xl" src="{{ url('assets/images/png-modul-pembelajaran.png') }}" alt="modul-pembelajaran" layout="fill"/>
                    </div>
                    <div class="p-6 text-center">
                        <h5 class="block mb-2 font-sans text-xl md:text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            Modul Pembelajaran
                        </h5>
                    </div>
                    <div class="p-6 pt-0 text-center">
                        <x-link-to href="{{ route('moduls.modul_11.index') }}">
                            KELAS 10
                        </x-link-to>
                    </div>
                </article>

                {{-- CARD INFORMASI BEASISWA --}}
                <article class="relative shadow-md max-w-lg w-full pt-4 transform duration-100 hover:-translate-y-2 cursor-pointer rounded-xl border-solid border-2 border-yellow-400 hover:bg-yellow-400 hover:text-white">
                    <div class="bg-no-repeat bg-center overflow-hidden min-h-96 flex items-center justify-center">
                        <img class="w-[300px] rounded-xl" src="{{ url('assets/images/png-info-beasiswa.png') }}" alt="info-beasiswa" layout="fill"/>
                    </div>
                    <div class="p-6 text-center">
                        <h5 class="block mb-2 font-sans text-xl md:text-2xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            Informasi Beasiswa
                        </h5>
                    </div>
                    <div class="p-6 pt-0 text-center">
                        <x-link-to href="{{ route('beasiswa_links.index') }}">
                            Lihat Info Beasiswa
                        </x-link-to>
                    </div>
                </article>

                {{-- CARD LAYANAN KONSELING --}}
                <article class="relative shadow-md max-w-lg w-full pt-4 transform duration-100 hover:-translate-y-2 cursor-pointer rounded-xl border-solid border-2 border-red-400 hover:bg-red-400 hover:text-white">
                    <div class="bg-no-repeat bg-center overflow-hidden min-h-96 flex items-center justify-center">
                        <img class="w-[300px] rounded-xl" src="{{ url('/assets/images/png-konseling.png') }}" alt="png-konseling" layout="fill"/>
                    </div>
                    <div class="p-6 text-center">
                        <h5 class="block mb-2 font-sans text-xl md:text-2xl font-semibold tracking-normal text-blue-gray-900">
                            Layanan Konseling
                        </h5>
                    </div>
                    <div class="p-6 pt-0 text-center">
                        <x-link-to href="#">
                            Lihat Layanan Konsuling
                        </x-link-to>
                    </div>
                </article>
            </section>
        </div>
    </div>
</x-app-layout>
