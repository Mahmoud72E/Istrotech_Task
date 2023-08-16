<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Half-Years') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-semibold mb-4">{{ __("Create Half-Year") }}</h1>
                    <form method="POST" action="{{ route('half_years.store') }}">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required autofocus autocomplete="name" />
                                <x-input-error class="mt-2" :messages="$errors->get('name')" />
                            </div>
                            <div>
                                <x-input-label for="start_date" :value="__('Start Date')" />
                                <x-text-input id="start_date" name="start_date" type="date" class="mt-1 block w-full" :value="old('start_date')" required autofocus autocomplete="start_date" />
                                <x-input-error class="mt-2" :messages="$errors->get('start_date')" />
                            </div>
                            <div>
                                <x-input-label for="end_date" :value="__('End Date')" />
                                <x-text-input id="end_date" name="end_date" type="date" class="mt-1 block w-full" :value="old('end_date')" required autofocus autocomplete="end_date" />
                                <x-input-error class="mt-2" :messages="$errors->get('end_date')" />
                            </div>
                            <div>

                                <x-input-label for="notes" :value="__('Notes')" />
                                <x-text-input id="notes" name="notes" type="text" class="mt-1 block w-full" :value="old('notes')" autofocus autocomplete="notes" />
                                <x-input-error class="mt-2" :messages="$errors->get('notes')" />
                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <button type="submit" class="create-button">{{ __('Create Half-Year') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
