<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'keuangan',
            'slug' => 'keuangan',
            'icon' => 'flaticon-money-1'
        ]);
        Category::create([
            'name' => 'multimedia',
            'slug' => 'multimedia',
            'icon' => 'flaticon-vector'
        ]);
        Category::create([
            'name' => 'teknologi informasi',
            'slug' => 'teknologi-informasi',
            'icon' => 'flaticon-web-programming'
        ]);
        Category::create([
            'name' => 'pemerintahan',
            'slug' => 'pemerintahan',
            'icon' => 'flaticon-man'
        ]);
        Category::create([
            'name' => 'kesehatan',
            'slug' => 'kesehatan',
            'icon' => 'flaticon-first-aid-kit'
        ]);
        Category::create([
            'name' => 'otomotif',
            'slug' => 'otomotif',
            'icon' => 'flaticon-car'
        ]);
        Category::create([
            'name' => 'lainnya',
            'slug' => 'lainnya',
        ]);
    }
}
