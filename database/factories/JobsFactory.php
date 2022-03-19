<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => 0,
            'category_id' => 0,
            'title' => $this->faker->sentence(5),
            'slug' => $this->faker->slug(),
            'location' => '?',
            'expiration_date' => $this->faker->date('Y-m-d'),
            'level_career' => 'senior',
            'salary' => '11m',
            'type' => 'contracts',
            'body' => $this->faker->paragraph(),
        ];
    }
}
