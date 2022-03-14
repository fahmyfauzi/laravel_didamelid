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
        foreach (range(1, 30) as $item) {
            Jobs::create([
                'user_id' => rand(1, 3),
                'category_id' => rand(1, 6),
                'company_id' => rand(1, 3),
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
                'slug' => $faker->unique()->slug,
                'expiration_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'location' => $faker->city,
                'level_career' => $faker->jobTitle,
                'salary' =>  "5000.000 - 15.000.000",
                'time' => 'Fulltime',
                'body' => $faker->sentence($nbWords = 100, $variableNbWords = true)

            ]);
        }
    }
}
