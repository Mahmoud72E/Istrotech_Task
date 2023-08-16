<?php

namespace App\Rules;

use App\Models\Evaluation;
use Illuminate\Contracts\Validation\Rule;

class UniqueEvaluationForHalfYearUpdate implements Rule
{
    protected $employeeId;
    protected $halfYearId;
    protected $evaluationId;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($employeeId, $halfYearId, $evaluationId)
    {
       $this->employeeId = $employeeId;
        $this->halfYearId = $halfYearId;
        $this->halfYearId = $evaluationId;
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
        $exists = Evaluation::where('employee_id', $this->employeeId)
        ->where('half_year_id', $this->halfYearId)
        ->where('id', '<>', $this->evaluationId)
        ->exists();
        // dd($exists);
        return !$exists;
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
