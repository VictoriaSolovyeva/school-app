<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use \App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'birth_date' => $this->faker->dateTimeBetween($startDate = '-10 years', $endDate = '-6 years', $timezone = null)->format('d/m/Y'),
            'address' => $this->faker->address,
            'classe_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
