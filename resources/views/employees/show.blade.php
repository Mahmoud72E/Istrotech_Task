<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employees') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-semibold mb-4">{{ __('Employee Details') }}</h1>
                    <dl class="grid grid-cols-2 gap-4">
                        <dt class="font-semibold">{{ __('Name') }}</dt>
                        <dd>{{ $employee->first_name }} {{ $employee->last_name }}</dd>
                        <dt class="font-semibold">{{ __('Email') }}</dt>
                        <dd>{{ $employee->email }}</dd>
                        <dt class="font-semibold">{{ __('Phone') }}</dt>
                        <dd>{{ $employee->phone }}</dd>
                        <dt class="font-semibold">{{ __('Brith Date') }}</dt>
                        <dd>{{ $employee->birth_date }}</dd>
                        <dt class="font-semibold">{{ __('Manager') }}</dt>
                        <dd>{{ $employee->user->name }} - {{ $employee->user->email }} </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
