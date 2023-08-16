<?php

namespace App\Http\Requests;

use App\Rules\UniqueEvaluationForHalfYear;
use Illuminate\Foundation\Http\FormRequest;

class StoreEvaluationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        // dd(auth()->user()->employees);
        return [
            'employee_id' =>[
                'required',
                'exists:employees,id',
                new UniqueEvaluationForHalfYear($this->employee_id, $this->half_year_id),
            ],
            'score' => 'required|numeric|min:0|max:5',
            'comments' => 'nullable|string|min:2|max:225',
            'half_year_id' => 'required|exists:half_years,id',
        ];
    }
}
