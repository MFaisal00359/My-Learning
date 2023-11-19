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
                    <x-link-back-moduls href="{{ route('moduls.index') }}" class="mb-4">Back to Moduls</x-link-back-moduls>
                    <form method="POST" action="{{ route('moduls.update', $modul) }}">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <x-label for="name" value="{{ __('Edit Name Modul') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$modul->name" required autofocus autocomplete="name" />
                        </div>

                        <div class="mb-4">
                            <x-label for="description" value="{{ __('Edit description Modul') }}" />
                            <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="$modul->description" required autofocus autocomplete="description" />
                        </div>

                        <div class="mb-4">
                            <x-label for="file_path" value="{{ __('file path') }}" />
                            <x-input id="file_path" class="block mt-1 w-full" type="text" name="file_path" :value="$modul->file_path" required autofocus autocomplete="file_path" />
                        </div>

                        <div class="flex mt-4">
                            <x-button>
                                {{ __('Save Modul') }}
                            </x-button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
