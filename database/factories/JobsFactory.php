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
            'user_id' => rand(1, 3),
            'category_id' => rand(1, 6),
            'title' => $this->faker->sentence(5),
            'slug' => $this->faker->slug(),
            'location' => $this->faker->city(),
            'expiration_date' => $this->faker->date('Y-m-d'),
            'level_career' => 'senior',
            'salary' => 'Rp10.000.000 - Rp13.000.000',
            'type' => 'Fulltime',
            'body' => $this->faker->paragraph(),
        ];
    }
}
