<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee Report') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-semibold mb-4">{{ $employee->first_name }} {{ $employee->last_name }}</h1>
                    <p class="mb-4">{{ __('Email: ') }} {{ $employee->email }}</p>
                    <p class="mb-4">{{ __('Phone: ') }} {{ $employee->phone }}</p>
                    <p class="mb-4">{{ __('Average Score: ') }} {{ $avgScore }} %</p>
                    <h2 class="text-lg font-semibold mt-4">{{ __('Score History') }}</h2>
                    <ul class="list-disc ml-6">
                        @foreach ($evaluations as $evaluation)
                            <li>
                                {{ $loop->iteration }} )
                                {{ __('Period: ') }} {{ $evaluation->halfYear->name }} [ From :
                                {{ $evaluation->halfYear->start_date }} , To : {{ $evaluation->halfYear->end_date }} ]
                                ->  {{ __('Score: ') }} {{ $evaluation->score }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
