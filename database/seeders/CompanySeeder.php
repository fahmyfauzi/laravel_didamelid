<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        foreach (range(1, 15) as $item) {
            Company::create([
                'companycategory_id' => rand(1, 4),
                'name' => $faker->company,
                'slug' => $faker->slug,
                'email' => $faker->companyEmail,
                'logo' => $faker->imageUrl($width = 640, $height = 480),
                'location' => $faker->city,
                'phone_number' => $faker->e164PhoneNumber,
                'social_facebook' => 'https://www.facebook.com/fahmy.fauzi.3150/',
                'social_instagram' => 'https://www.instagram.com/fahmyfauzii/',
                'social_youtube' => 'https://www.youtube.com/channel/UC9WMoCKFXwbkghlx9WK7ABw',
                'social_twitter' => 'https://twitter.com/FahmyFauzi10',
                'website' => 'https://fahmyfauzi.github.io/',
                'body' => $faker->sentence($nbWords = 100, $variableNbWords = true)
            ]);
        }
    }
}
