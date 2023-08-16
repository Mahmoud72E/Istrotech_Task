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
                    <h1 class="text-2xl font-semibold mb-4">{{ __("Evaluation List") }}</h1>
                    <button class="create-button"><a href="{{ route('evaluations.create') }}">Create Evaluations</a></button>
                    <table class="user-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Employee') }}</th>
                                <th>{{ __('Score') }}</th>
                                <th>{{ __('Period') }}</th>
                                <th>{{ __('Control') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($evaluations as $evaluation)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $evaluation->employee->first_name }} {{ $evaluation->employee->first_name }}</td>
                                    <td>{{ $evaluation->score }} / 5
                                    [
                                        @php
                                            $score = $evaluation->score;
                                            $best_score = 5;
                                            $precnt = $score / $best_score * 100;
                                            echo $precnt . '%';
                                        @endphp
                                    ]</td>
                                    <td>{{ $evaluation->halfYear->name }} [ From : {{ $evaluation->halfYear->start_date }}, To :{{ $evaluation->halfYear->end_date }}]</td>
                                    <td>
                                        <a href="{{ route('evaluations.show', $evaluation->id) }}"
                                            class="show">{{ __('Show') }}</a>
                                        <a href="{{ route('evaluations.edit', $evaluation->id) }}"
                                            class="edit">{{ __('Edit') }}</a>
                                        <form method="POST"
                                            action="{{ route('evaluations.destroy', $evaluation->id) }}"
                                            onsubmit="return confirm('{{ __('Are you sure you want to delete this evaluations ?') }}')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit">{{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
