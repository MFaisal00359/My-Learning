<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Link Test Kepribadian') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Board konseling_links List --}}
            @can('manage access')
                <x-link href="{{ route('konseling_links.create') }}" class="mb-6 mx-4 sm:mx-0">Upload Link Tes Baru</x-link>
            @endcan

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                {{-- CREATE konselink_links --}}
                <table class="w-full text-sm text-left rtl:text-right">
                    <thead class="text-xs text-white uppercase bg-slate-800">
                        <tr>
                            <th scope="col" class="px-6 py-6">
                                Nama Tes
                            </th>
                            <th scope="col" class="px-6 py-6">
                                Link Tes
                            </th>
                            @can('manage access')
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                    @forelse ($konseling_links as $konseling_link)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="px-6 py-4 font-medium text-gray-800 whitespace-nowrap">
                                {{ $konseling_link->nama_tes }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $konseling_link->link_tes }}
                            </td>
                            @can('manage access')
                            <td class="py-4 whitespace-nowrap">
                                {{-- BUTTON EDIT --}}
                                <x-link-add href="{{ route('konseling_links.edit', $konseling_link) }}">Edit</x-link-add>

                                {{-- BUTTON DELETE --}}
                                <form method="POST" action="{{ route('konseling_links.destroy', $konseling_link) }}" class="inline-block">
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
                                {{ __('Link Konseling belum ada -_-') }}
                            </td>
                        </tr>
                    @endforelse
                    </tbody>
                </table>
                <button class="m-4">
                    {{ $konseling_links }}
                </button>
            </div>
            </div>
        </div>
    </div>
</x-app-layout>
