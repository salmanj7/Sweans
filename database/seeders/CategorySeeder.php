<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $electronics = Category::create(['name' => 'Electronics']);
        $fashion = Category::create(['name' => 'Fashion']);
        $home = Category::create(['name' => 'Home']);

        // Subcategories for Electronics
        Category::create(['name' => 'Mobiles', 'parent_id' => $electronics->id]);
        Category::create(['name' => 'Laptops', 'parent_id' => $electronics->id]);

        // Subcategories for Fashion
        Category::create(['name' => 'Men', 'parent_id' => $fashion->id]);
        Category::create(['name' => 'Women', 'parent_id' => $fashion->id]);
    }
}
