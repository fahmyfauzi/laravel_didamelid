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
            'icon' => 'icon-keuangan.png'
        ]);
        Category::create([
            'name' => 'multimedia',
            'slug' => 'multimedia',
            'icon' => 'icon-multimedia.png'
        ]);
        Category::create([
            'name' => 'teknologi informasi',
            'slug' => 'teknologi-informasi',
            'icon' => 'icon-teknologi-informasi.png'
        ]);
        Category::create([
            'name' => 'pemerintahan',
            'slug' => 'pemerintahan',
            'icon' => 'icon-pemerintahan.png'
        ]);
        Category::create([
            'name' => 'kesehatan',
            'slug' => 'kesehatan',
            'icon' => 'icon-kesehatan.png'
        ]);
        Category::create([
            'name' => 'otomotif',
            'slug' => 'otomotif',
            'icon' => 'icon-otomotif.png'
        ]);
        Category::create([
            'name' => 'lainnya',
            'slug' => 'lainnya',
        ]);
    }
}
