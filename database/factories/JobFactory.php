<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle,
            'salary' => fake()->randomElement(['$68,000 USD', '$55,000 USD', '$270,000 USD', '$108,000 USD']),
            'location' => fake()->city,
            'work_type' => fake()->randomElement(['Full Time', 'Part-time']),
            'url' => fake()->url,
            'featured' => false

        ];
    }
}
