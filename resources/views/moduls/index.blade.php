<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Modul Pembelajaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Board Moduls List --}}
            @can('manage access')
                <x-link href="{{ route('moduls.create') }}" class="mb-6 mx-4 sm:mx-0">Tambahkan Modul</x-link>
            @endcan

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                {{-- CREATE MODULS --}}
                <table class="w-full text-sm text-left rtl:text-right">
                    <thead class="text-xs text-white uppercase bg-slate-800">
                        <tr>
                            <th scope="col" class="px-6 py-6">
                                Nama Modul
                            </th>
                            <th scope="col" class="px-6 py-6">
                                File Modul
                            </th>
                            @can('manage access')
                            <th scope="col" class="px-6 py-6">
                                Aksi
                            </th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($moduls as $modul)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <th class="px-6 py-4 text-gray-800 whitespace-nowrap">
                                {{ $modul->nama_modul }}
                            </th>
                            <th class="px-6 py-4 lowercase ">
                                {{ $modul->filePath_modul }}
                            </th>
                            @can('manage access')
                            <th class="py-4 whitespace-nowrap">
                                {{-- BUTTON EDIT --}}
                                <x-link-add href="{{ route('moduls.edit', $modul) }}">Edit</x-link-add>

                                {{-- BUTTON DELETE --}}
                                <form method="POST" action="{{ route('moduls.destroy', $modul) }}" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button
                                        type="submit"
                                        onclick="return confirm('Yakin Ingin Menghapus?')">Delete</x-danger-button>
                                </form>
                            </th>
                            @endcan
                        </tr>
                    @empty
                        <tr class="bg-white dark:bg-gray-100 dark:border-gray-700 w-full">
                            <th colspan="2"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-gray-800 whitespace-nowrap">
                                {{ __('Modul pembalajaran tidak ada 😢') }}
                            </th>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
