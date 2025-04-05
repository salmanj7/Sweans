<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleAndUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRole = Role::create(['name' => 'admin']);
        $managerRole = Role::create(['name' => 'product_manager']);
        $customerRole = Role::create(['name' => 'customer']);

        // Create Admin
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        // Create Product Manager
        $manager = User::create([
            'name' => 'Product Manager',
            'email' => 'manager@example.com',
            'password' => bcrypt('password'),
        ]);
        $manager->assignRole('product_manager');

        // Create Customers
        foreach (range(1, 5) as $i) {
            $customer = User::create([
                'name' => "Customer $i",
                'email' => "customer{$i}@example.com",
                'password' => bcrypt('password'),
            ]);
            $customer->assignRole('customer');
        }
    }
}
