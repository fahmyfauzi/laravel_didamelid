<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Jobs;
use App\Models\User;
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
        // \App\Models\User::factory(10)->create();

        User::factory(3)->create();
        Company::factory()
            ->has(Jobs::factory()->count(2, 6))
            ->count(15)
            ->create();

        $this->call([

            // JobSeeder::class,
            // CompanySeeder::class,
            // UserSeeder::class,
            CategorySeeder::class,
            CompanyCategorySeeder::class,
        ]);
    }
}
