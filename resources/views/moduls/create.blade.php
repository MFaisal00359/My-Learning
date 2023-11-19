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
                    <x-link-back-moduls href="{{ route('moduls.index') }}" class="mb-4">Back to Moduls</x-link-back-moduls>
                    <form method="POST" action="{{ route('moduls.store') }}">
                        @csrf

                        <div class="mb-4">
                            <x-label for="name" value="{{ __('Name Modul') }}" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        </div>

                        <div class="mb-4">
                            <x-label for="description" value="{{ __('description') }}" />
                            <x-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="description" />
                        </div>

                        <div class="mb-4">
                            <x-label for="file_path" value="{{ __('file path') }}" />
                            <x-input id="file_path" class="block mt-1 w-full" type="text" name="file_path" :value="old('file_path')" required autofocus autocomplete="file_path" />
                        </div>

                        <div class="flex mt-4">
                            <x-button>
                                {{ __('Create Modul') }}
                            </x-button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
