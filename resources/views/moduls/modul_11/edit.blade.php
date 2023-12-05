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
                    <x-link-back href="{{ route('moduls.modul_11.index') }}" class="mb-4">Kembali Ke Tabel Beasiswa</x-link-back>
                    <form method="POST" action="{{ route('modul_11.update', $modul_11) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <x-label for="judul_modul_11" value="{{ __('Edit Judul Beasiswa') }}" />
                            <x-input id="judul_modul_11" class="block mt-1 w-full" type="text" name="judul_modul_11" :value="$modul_11->judul_modul_11" required autofocus autocomplete="judul_modul_11" />
                        </div>

                        <div class="mb-4">
                            <x-label for="foto_modul_11" class="mb-2" value="{{ __('Foto Beasiswa') }}" />
                            <x-input id="foto_modul_11" class="form-control block w-full text-sm text-slate-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded file:border-0
                            file:text-sm file:font-semibold
                            file:bg-violet-50 file:text-violet-700
                            hover:file:bg-violet-100" type="file" name="foto_modul_11" :value="$modul_11->foto_modul_11" required autofocus autocomplete="foto_modul_11" />
                        </div>

                        <div class="mb-4">
                            <x-label for="link_modul_11" value="{{ __('Link beasiswa') }}" />
                            <x-input id="link_modul_11" class="block mt-1 w-full" type="text" name="link_modul_11" :value="$modul_11->link_modul_11" required autofocus autocomplete="link_modul_11" />
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
