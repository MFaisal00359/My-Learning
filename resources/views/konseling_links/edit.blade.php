<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Link Tes Konseling') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                    <x-validation-errors class="mb-4" />
                    <x-link-back href="{{ route('konseling_links.index') }}" class="mb-4">Kembali Ke Tabel Konseling</x-link-back>
                    <form method="POST" action="{{ route('konseling_links.update', $konseling_link) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <x-label for="nama_tes" value="{{ __('Edit Judul Tes') }}" />
                            <x-input id="nama_tes" class="block mt-1 w-full" type="text" name="nama_tes" :value="$konseling_link->nama_tes" required autofocus autocomplete="nama_beasiswa" />
                        </div>

                        <div class="mb-4">
                            <x-label for="link_tes" value="{{ __('Edit Link Konseling ') }}" />
                            <x-input id="link_tes" class="block mt-1 w-full" type="text" name="link_tes" :value="$konseling_link->link_tes" required autofocus autocomplete="link_tes" />
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
