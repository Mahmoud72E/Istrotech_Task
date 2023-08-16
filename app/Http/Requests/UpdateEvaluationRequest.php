<?php

namespace App\Http\Requests;

use App\Rules\UniqueEvaluationForHalfYearUpdate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateEvaluationRequest extends FormRequest
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
        // dd($this->half_year_id);
        return [
            'score' => 'required|numeric|min:0|max:5',
            'comments' => 'nullable|string|min:2|max:225',
        ];
    }
}
