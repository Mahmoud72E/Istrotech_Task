<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Evaluations') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-semibold mb-4">{{ __("Evaluation Details") }} ⤵</h1>
                    <dl class="grid grid-cols-2 gap-4">
                        <dt class="font-semibold">{{ __('Employee') }} :</dt>
                        <dd>{{ $evaluation->employee->first_name }} {{ $evaluation->employee->last_name }} - {{ $evaluation->employee->email }}</dd>
                        <dt class="font-semibold">{{ __('Score') }} : </dt>
                        <dd>{{ $evaluation->score }}</dd>
                        <dt class="font-semibold">{{ __('Period') }} :</dt>
                        <dd>{{ $evaluation->halfYear->name }} [From : {{ $evaluation->halfYear->start_date }} , To : {{ $evaluation->halfYear->end_date }}]</dd>
                        <dt class="font-semibold">{{ __('Manager') }} : </dt>
                        <dd>{{ $evaluation->employee->user->name }} - {{ $evaluation->employee->user->email }}</dd>
                        <dt class="font-semibold">{{ __('Comment') }} :</dt>
                        @if ($evaluation->comment)
                            <dd>{{ $evaluation->comment }}</dd>
                        @else
                            {{ __('No Comment') }}
                        @endif
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
