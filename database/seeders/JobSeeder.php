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
                'company_id' => rand(1, 8),
                'title' => $faker->sentence($nbWords = 3, $variableNbWords = true),
                'slug' => $faker->unique()->slug,
                'expiration_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'location' => $faker->city,
                'level_career' => $faker->jobTitle,
                'salary' =>  "Rp10.000.000 - Rp13.000.000",
                'type' => 'Fulltime',
                'body' =>  collect($faker->paragraphs(mt_rand(5, 10)))
                    ->map(fn ($p) => "<p>$p</p>")
                    ->implode(''),

            ]);
        }
    }
}
