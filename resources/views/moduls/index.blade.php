<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Moduls Pembelajaran') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Board Moduls List --}}
            <div class="dark:bg-gray-50 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg px-4 py-4"">
                    {{-- CREATE MODULS --}}
                    @can('manage tasks')
                    <x-link href="{{ route('moduls.create') }}" class="mb-4">Create New Moduls</x-link>
                    @endcan

                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-200 dark:text-gray-500">
                        <tr>
                            <th scope="col" class="px-6 py-6">
                                Modul Name
                            </th>
                            @can('manage tasks')
                            <th scope="col" class="px-6 py-3">
                                Action Modul
                            </th>
                            @endcan
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($moduls as $modul)
                            <tr class="bg-white dark:bg-gray-100">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    {{ $modul->name }}
                                </td>
                                @can('manage tasks')
                                <td class="py-4">
                                    {{-- BUTTON EDIT --}}
                                    <x-link href="{{ route('moduls.edit', $modul) }}">Edit</x-link>

                                    {{-- BUTTON DELETE --}}
                                    <form method="POST" action="{{ route('moduls.destroy', $modul) }}" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button
                                            type="submit"
                                            onclick="return confirm('Are you sure?')">Delete</x-danger-button>
                                    </form>
                                </td>
                                @endcan
                            </tr>
                        @empty
                            <tr class="bg-white dark:bg-gray-100 dark:border-gray-700">
                                <td colspan="2"
                                    class="px-6 py-4 font-medium text-gray-900 dark:text-gray-800 whitespace-nowrap">
                                    {{ __('No moduls found') }}
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
