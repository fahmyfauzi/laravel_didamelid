<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Jobs;
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
        // \App\Models\User::factory(10)->create();
        // $this->call([

        //     JobSeeder::class,
        //     UserSeeder::class,
        //     CategorySeeder::class,
        //     CompanySeeder::class,
        //     CompanyCategorySeeder::class,
        // ]);
    }
}
