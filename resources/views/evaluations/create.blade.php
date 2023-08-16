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
                    <h1 class="text-2xl font-semibold mb-4">{{ __("Create Evaluation") }}</h1>
                    <form method="POST" action="{{ route('evaluations.store') }}">
                        @csrf
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <x-input-label for="score" :value="__('Score [ 0 - 5 ]')" />
                                <x-text-input id="score" name="score" type="number" min="0" max="5" class="mt-1 block w-full" :value="old('score')" required autofocus autocomplete="score" />
                                <x-input-error class="mt-2" :messages="$errors->get('score')" />
                            </div>
                            <div>
                                <x-input-label for="comments" :value="__('Comments')" />
                                <x-text-input id="comments" name="comments" type="text" class="mt-1 block w-full" :value="old('comments')"  autofocus autocomplete="comments" />
                                <x-input-error class="mt-2" :messages="$errors->get('comments')" />
                            </div>

                            <div>
                                <x-input-label for="employee_id" :value="__('Employee')" />
                                <select name="employee_id" id="employee_id" class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'>
                                    <option value="0" disabled selected>{{ __('Select a Employee') }}</option>
                                    @foreach ($employees as $employee)
                                        <option value="{{ $employee->id }}" @selected(old('employee_id'))>{{ $employee->first_name }} {{ $employee->last_name }} - {{ $employee->email }}</option>
                                    @endforeach
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('employee_id')" />
                            </div>
                            <div>
                                <x-input-label for="half_year_id" :value="__('Half Year')" />
                                <select name="half_year_id" id="half_year_id" class='border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm'>
                                    <option value="0" disabled selected>{{ __('Select a Half Year') }}</option>
                                    @foreach ($halfYears as $halfYear)
                                        <option value="{{ $halfYear->id }}" @selected(old('half_year_id'))>{{ $halfYear->name }} [ From : {{ $halfYear->start_date }}, To :{{ $halfYear->end_date }} ]</option>
                                    @endforeach
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('half_year_id')" />
                            </div>
                            <div>

                            </div>
                        </div>
                        <div class="flex items-center gap-4">
                            <button type="submit" class="create-button">{{ __('Add Score') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
