<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('About Me') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-semibold mb-4">{{ __("About Me") }}</h1>
                    <p class="mb-4">{{ __("I'm a passionate backend developer specializing in PHP and Laravel.") }}</p>
                    <p class="mb-4">{{ __("Feel free to get in touch with me for coding discussions, collaboration") }}</p>
                    <p class="mb-4">{{ __("You can reach me via email at: ") }} <a href="mailto:mahmoud201411hotmailcom@gmail.com">mahmoud201411hotmailcom@gmail.com</a></p>
                    <p class="mb-4">{{ __("Visit my website: ") }} <a href="https://mahmoudelectron.neocities.org/">https://mahmoudelectron.neocities.org/</a></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
