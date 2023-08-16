<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateHalfYearRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:60|unique:half_years,name,'. $this->half_year->id,
            'start_date' => 'required|date|after:01/01/2000|before:01/01/2030',
            'end_date' => 'required|date|after:01/01/2000|before:01/01/2030',
            'notes' => 'nullable|string|max:255',
        ];
    }
}
