<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Modul') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                    <x-validation-errors class="mb-4" />
                    <x-link-back href="{{ route('moduls.index') }}" class="mb-4">Kembali Ke Modul</x-link-back>
                    <form method="POST" action="{{ route('moduls.update', $modul) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <x-label for="nama_modul" value="{{ __('Edit Name Modul') }}" />
                            <x-input id="nama_modul" class="block mt-1 w-full" type="text" name="nama_modul" :value="$modul->nama_modul" required autofocus autocomplete="nama_modul" />
                        </div>

                        <div class="mb-4">
                            <x-label for="deskripsi_modul" value="{{ __('Edit Deskripsi Modul') }}" />
                            <x-input id="deskripsi_modul" class="block mt-1 w-full" type="text" name="deskripsi_modul" :value="$modul->deskripsi_modul" required autofocus autocomplete="deskripsi_modul" />
                        </div>

                        <div class="mb-4">
                            <x-label for="filePath_modul" value="{{ __('Edit File Modul') }}" />
                            <x-input id="filePath_modul" class="block mt-1 w-full" type="text" name="filePath_modul" :value="$modul->filePath_modul" required autofocus autocomplete="file_path" />
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
