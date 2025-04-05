<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mobiles = Category::where('name', 'Mobiles')->first();
        $laptops = Category::where('name', 'Laptops')->first();
        $home = Category::where('name', 'Home')->first();

        Product::create([
            'name' => 'iPhone 15',
            'description' => 'Latest Apple smartphone',
            'image' => 'https://images.unsplash.com/photo-1603898037225-1b1e3b79a549?auto=format&fit=crop&w=800&q=80',
            'price' => 999.99,
            'category_id' => $mobiles->id,
        ]);

        Product::create([
            'name' => 'Dell XPS 13',
            'description' => 'High-end lightweight laptop',
            'image' => 'https://images.unsplash.com/photo-1603898037225-1b1e3b79a549?auto=format&fit=crop&w=800&q=80',
            'price' => 1299.99,
            'category_id' => $laptops->id,
        ]);

        Product::create([
            'name' => 'Sofa Set',
            'description' => 'Comfortable 3-piece sofa',
            'image' => 'https://images.unsplash.com/photo-1603898037225-1b1e3b79a549?auto=format&fit=crop&w=800&q=80',
            'price' => 799.00,
            'category_id' => $home->id,
        ]);
    }
}
