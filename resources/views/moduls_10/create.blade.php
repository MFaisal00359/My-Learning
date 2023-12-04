<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">

            {{ __('Add New Moduls') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4">
                    <x-validation-errors class="mb-4" />
                    <x-link-back href="{{ route('moduls.index') }}" class="mb-4">Kembali Ke Modul</x-link-back>
                    <form method="POST" action="{{ route('moduls.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-4">
                            <x-label for="nama_modul" value="{{ __('Nama Modul') }}" />
                            <x-input id="nama_modul" class="block mt-1 w-full" type="text" name="nama_modul" :value="old('nama_modul')" required autofocus autocomplete="nama_modul" />
                            <x-input-error for="nama_modul" class="mt-2"/>
                        </div>

                        <div class="mb-4">
                            <x-label for="deskripsi_modul" value="{{ __('Deskripsi Modul') }}" />
                            <x-input id="deskripsi_modul" class="block mt-1 w-full" type="text" name="deskripsi_modul" :value="old('deskripsi_modul')" required autofocus autocomplete="deskripsi_modul" />
                            <x-input-error for="deskripsi_modul" class="mt-2"/>
                        </div>

                        <div class="mb-4">
                            <x-label for="file_modul" class="mb-2" value="{{ __('File Modul') }}" />
                            <x-input id="file_modul" class="block w-full text-sm text-slate-500
                            file:mr-4 file:py-2 file:px-4
                            file:rounded file:border-0
                            file:text-sm file:font-semibold
                            file:bg-violet-50 file:text-violet-700
                            hover:file:bg-violet-100" type="file" name="file_modul" :value="old('file_modul')" required autofocus autocomplete="file_modul" />
                            <x-input-error for="file_modul" class="mt-2"/>
                        </div>

                        <div class="flex mt-6">
                            <x-button-save>
                                {{ __('Tambahkan Modul') }}
                            </x-button-save>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
