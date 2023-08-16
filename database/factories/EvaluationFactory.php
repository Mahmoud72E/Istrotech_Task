<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\HalfYear;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Evaluation>
 */
class EvaluationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'score' => $this->faker->numberBetween(0,5),
            'employee_id' => Employee::all()->random()->id,
            'half_year_id' => HalfYear::all()->random()->id,
            'comments' => $this->faker->sentence,
        ];
    }
}
