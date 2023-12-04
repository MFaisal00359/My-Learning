<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Modul') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Board Moduls List --}}
            @can('manage access')
                <x-link-back href="{{ route('moduls.index') }}" class="mb-4">Kembali Ke Modul</x-link-back>
            @endcan

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                {{-- SHOW MODULS --}}
                <table class="w-full text-sm text-left rtl:text-right">
                    <tbody>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <th class="px-6 py-4 text-gray-800 whitespace-nowrap">
                                {{ $modul->nama_modul }}
                            </th>
                            <th class="px-6 py-4 lowercase ">
                                {{ $modul->filePath_modul }}
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
