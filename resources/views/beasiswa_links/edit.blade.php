<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Beasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                    <x-validation-errors class="mb-4" />
                    <x-link-back href="{{ route('beasiswa_links.index') }}" class="mb-4">Kembali Ke Tabel Beasiswa</x-link-back>
                    <form method="POST" action="{{ route('beasiswa_links.update', $beasiswa_link) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <x-label for="nama_beasiswa" value="{{ __('Edit Judul Beasiswa') }}" />
                            <x-input id="nama_beasiswa" class="block mt-1 w-full" type="text" name="nama_beasiswa" :value="$beasiswa_link->nama_beasiswa" required autofocus autocomplete="nama_beasiswa" />
                        </div>

                        <div class="mb-4">
                            <x-label for="foto_beasiswa" value="{{ __('Edit Foto Beasiswa ') }}" />
                            <x-input id="foto_beasiswa" class="block mt-1 w-full" type="text" name="foto_beasiswa" :value="$beasiswa_link->foto_beasiswa" required autofocus autocomplete="foto_beasiswa" />
                        </div>

                        <div class="mb-4">
                            <x-label for="link_beasiswa" value="{{ __('Link beasiswa') }}" />
                            <x-input id="link_beasiswa" class="block mt-1 w-full" type="text" name="link_beasiswa" :value="$beasiswa_link->link_beasiswa" required autofocus autocomplete="link_beasiswa" />
                        </div>

                        <div class="flex mt-4">
                            <x-button>
                                {{ __('Simpan Perubahan') }}
                            </x-button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
