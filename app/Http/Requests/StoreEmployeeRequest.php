<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'first_name'=> 'required|string|max:10|min:2',
            'last_name'=> 'required|string|max:10|min:2',
            'email'=> 'required|email:rfc,filter|max:50|unique:employees,email',
            'phone'=> 'nullable|string|regex:/(01)[0-9]{9}/|regex:/^\S*$/|min:11|max:11',
            'birth_date'=> 'nullable|date|max:10|min:2|before:01/01/2007|after:01/01/1923',
            'user_id'=> 'required|numeric|min:1|exists:users,id',
        ];
    }
}
