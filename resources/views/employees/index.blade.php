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
                    <h1 class="text-2xl font-semibold mb-4">{{ __("Employee List") }}</h1>
                    <button class="create-button"><a href="{{ route('employees.create') }}">Add New Employee</a></button>
                    <table class="user-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('Name') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Manger') }}</th>
                                <th>{{ __('Control') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $employee->first_name }} {{ $employee->last_name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->user->name }}</td>
                                    <td>
                                        <a href="{{ route('employees.show', $employee->id) }}"
                                            class="show">{{ __('Show') }}</a>
                                        <a href="{{ route('employees.edit', $employee->id) }}"
                                            class="edit">{{ __('Edit') }}</a>
                                        <br>
                                        <a href="{{ route('employee.report', $employee->id) }}"
                                                class="edit">{{ __('Employee evaluation report') }}</a>
                                        <form method="POST"
                                            action="{{ route('employees.destroy', $employee->id) }}"
                                            onsubmit="return confirm('{{ __('Are you sure you want to delete this employee?') }}')">
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
