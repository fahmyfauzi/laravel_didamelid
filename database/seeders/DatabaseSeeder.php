<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Company;
use App\Models\Jobs;
use App\Models\User;
use Illuminate\Contracts\Queue\Job;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Company::factory()
            ->has(Jobs::factory()->count(rand(1, 3)))
            ->count(5)
            ->create();

        // Category::factory()
        //     ->has(Company::factory()->count(rand(1, 6)))
        //      ->has(Jobs::factory()->count(rand(1, 3)))
        //     ->count(5)
        //     ->create();

        User::factory(3)->create();
        $this->call([

            CategorySeeder::class,
            CompanyCategorySeeder::class,
        ]);
    }
}
