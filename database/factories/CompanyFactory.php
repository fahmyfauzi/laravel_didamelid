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
            'name' => $this->faker->company(),
            'companycategory_id' => rand(1, 4),
            'slug' => $this->faker->slug(),
            'status' => $this->faker->boolean(),
            'location' => $this->faker->city(),
            'phone_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'social_facebook' => 'https://www.facebook.com/fahmy.fauzi.3150/',
            'social_instagram' => 'https://www.instagram.com/fahmyfauzii/',
            'social_youtube' => 'https://www.youtube.com/channel/UC9WMoCKFXwbkghlx9WK7ABw',
            'social_twitter' => 'https://twitter.com/FahmyFauzi10',
            'website' => 'https://fahmyfauzi.github.io/',
            'body' => $this->faker->paragraph(),
        ];
    }
}
