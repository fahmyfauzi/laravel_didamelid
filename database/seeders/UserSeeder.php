<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 3) as $item) {
            $faker = Faker::create('id_ID');
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->freeEmail,
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'remember_token' => Str::random(10)
            ]);
        }
    }
}
