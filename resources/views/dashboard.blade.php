<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="mb-4 text-lg font-semibold">{{ __("Welcome to the Dashboard") }}</h3>
                    <p class="mb-4">{{ __("You're logged in!") }}</p>
                    <p class="mb-4">{{ __("All the requirements have been successfully implemented") }}</p>
                    <p class="mb-4">{{ __("I would like to express my gratitude to the reviewers at Istrotech for the opportunity to work on this project.") }}</p>
                    <p class="mb-4">{{ __("I hope that my code and the project meet your expectations and requirements.") }}</p>
                    <p class="mb-4">{{ __("I look forward to the possibility of working together again in the future.") }}</p>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
