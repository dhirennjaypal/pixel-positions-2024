<?php

namespace Database\Factories;

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
            "title"			=>	fake()->jobTitle,
			"salary"		=>	fake()->randomElement(["$30,000", "$40,000", "$50,000", "$60,000"]),
			"location"		=>	fake()->randomElement(["USA", "Canada", "Germany", "China", "India", "Japan", "Remote"]),
			"schedule"		=>	fake()->randomElement(["Full Time", "Part Time"]),
			"url"			=>	fake()->url,
			"featured"		=>	false,
			"employer_id"	=>	\App\Models\Employer::factory(),
        ];
    }
}
