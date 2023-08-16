<?php

namespace App\Rules;

use App\Models\Evaluation;
use Illuminate\Contracts\Validation\Rule;

class UniqueEvaluationForHalfYear implements Rule
{
    protected $employeeId;
    protected $halfYearId;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($employeeId, $halfYearId)
    {
       $this->employeeId = $employeeId;
        $this->halfYearId = $halfYearId;
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return !Evaluation::where('employee_id', $this->employeeId)
        ->where('half_year_id', $this->halfYearId)
        ->exists();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return __('This employee has already submitted an evaluation for this half-year.');
    }
}
