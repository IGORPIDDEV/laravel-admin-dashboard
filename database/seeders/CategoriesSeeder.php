<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rootCategory = Category::create(['name' => 'Root', 'left' => 1, 'right' => 2, 'depth' => 0]);

        $electronics = Category::create(['name' => 'Electronics', 'left' => 2, 'right' => 5, 'depth' => 1, 'parent_id' => $rootCategory->id]);
        Category::create(['name' => 'Mobile Phones', 'left' => 3, 'right' => 4, 'depth' => 2, 'parent_id' => $electronics->id]);

        $fashion = Category::create(['name' => 'Fashion', 'left' => 6, 'right' => 9, 'depth' => 1, 'parent_id' => $rootCategory->id]);
        Category::create(['name' => 'Men', 'left' => 7, 'right' => 8, 'depth' => 2, 'parent_id' => $fashion->id]);
    }
}
