<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'companycategory_id' => 1,
            'slug' => $this->faker->slug(),
            'status' => $this->faker->boolean(),
            'logo' => 'none',
            'location' => 'none',
            'phone_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'social_facebook' => $this->faker->slug(2),
            'social_instagram' => $this->faker->slug(2),
            'social_youtube' => $this->faker->slug(2),
            'social_twitter' => $this->faker->slug(2),
            'website' => $this->faker->sentence(3),
            'body' => $this->faker->paragraph(),
        ];
    }
}
