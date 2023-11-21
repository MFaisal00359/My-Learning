<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Link Beasiswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Board beasiswa_links List --}}
            @can('manage access')
                <x-link href="{{ route('beasiswa_links.create') }}" class="mb-6 mx-4 sm:mx-0">Tambahkan Beasiswa Baru</x-link>
            @endcan

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                {{-- CREATE beasiswa_links --}}
                <table class="w-full text-sm text-left rtl:text-right">
                    <thead class="text-xs text-white uppercase bg-slate-800">
                        <tr>
                            <th scope="col" class="px-6 py-6">
                                Nama Beasiswa
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Link Beasiswa
                            </th>
                            @can('manage access')
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($beasiswa_links as $beasiswa_link)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium text-gray-800 whitespace-nowrap">
                                {{ $beasiswa_link->nama_beasiswa }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $beasiswa_link->link_beasiswa }}
                            </td>
                            @can('manage access')
                            <td class="py-4 whitespace-nowrap">
                                {{-- BUTTON EDIT --}}
                                <x-link-add href="{{ route('beasiswa_links.edit', $beasiswa_link) }}">Edit</x-link-add>

                                {{-- BUTTON DELETE --}}
                                <form method="POST" action="{{ route('beasiswa_links.destroy', $beasiswa_link) }}" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <x-danger-button
                                        type="submit"
                                        onclick="return confirm('Yakin Ingin Menghapus?')">Delete</x-danger-button>
                                </form>
                            </td>
                            @endcan
                        </tr>
                    @empty
                        <tr class="bg-white dark:bg-gray-100 dark:border-gray-700">
                            <td colspan="2"
                                class="px-6 py-4 font-medium text-gray-900 dark:text-gray-800 whitespace-nowrap">
                                {{ __('Beasiswa tidak ada 😢') }}
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
