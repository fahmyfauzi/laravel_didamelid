<?php

namespace Database\Seeders;

use App\Models\Jobs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        foreach (range(1, 20) as $item) {
            Jobs::create([
                'user_id' => rand(1, 3),
                'category_id' => rand(1, 6),
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'company' => $faker->company,
                'slug' => $faker->unique()->slug,
                'image' => $faker->imageUrl($width = 640, $height = 480),
                'expiration_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'location' => $faker->city,
                'level_career' => $faker->jobTitle,
                'salary' =>  "5000.000 - 15.000.000",
                'time' => 'Fulltime',
                'body' => $faker->text($maxNbChars = 200),

            ]);
        }
    }
}
