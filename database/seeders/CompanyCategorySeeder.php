<?php

namespace Database\Seeders;

use App\Models\CompanyCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CompanyCategory::create([
            'name' => 'perusahaan fashion',
            'slug' => 'perusahaan-fashion'
        ]);
        CompanyCategory::create([
            'name' => 'perusahaan kesehatan',
            'slug' => 'perusahaan-kesehatan'
        ]);
        CompanyCategory::create([
            'name' => 'perusahaan teknologi',
            'slug' => 'perusahaan-teknologi'

        ]);
        CompanyCategory::create([
            'name' => 'perusahaan distributor',
            'slug' => 'perusahaan-distributor'
        ]);
    }
}
