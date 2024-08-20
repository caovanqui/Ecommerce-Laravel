<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tạo các danh mục cụ thể
        $categories = ['Nhẫn', 'Vòng Tay', 'Dây chuyền', 'Bông Tai'];
        foreach ($categories as $category) {
            Category::updateOrCreate(['name' => $category]);
        }
        Product::factory(32)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
