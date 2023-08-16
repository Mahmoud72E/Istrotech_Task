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
                    <h1 class="text-2xl font-semibold">{{ __('Half-Year List') }}</h1>
                    <button class="create-button"><a href="{{ route('half_years.create') }}">Create New Half Year</a></button>
                    <div class="table-responsive">
                        <table class="user-table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('Name') }}</th>
                                    <th>{{ __('Start Date') }}</th>
                                    <th>{{ __('End Date') }}</th>
                                    <th>{{ __('Notes') }}</th>
                                    <th>{{ __('Control') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($halfYears as $halfYear)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $halfYear->name }}</td>
                                        <td>{{ $halfYear->start_date }}</td>
                                        <td>{{ $halfYear->end_date }}</td>
                                        <td>{{ $halfYear->notes }}</td>
                                        <td>
                                            <a href="{{ route('half_years.show', $halfYear->id) }}"
                                                class="show">{{ __('Show') }}</a>
                                            <a href="{{ route('half_years.edit', $halfYear->id) }}"
                                                class="edit">{{ __('Edit') }}</a>
                                            <form method="POST"
                                                action="{{ route('half_years.destroy', $halfYear->id) }}"
                                                onsubmit="return confirm('{{ __('Are you sure you want to delete this half-year?') }}')">
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
    </div>
</x-app-layout>
