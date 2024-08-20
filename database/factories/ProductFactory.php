<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->text(10),
            'img' => fake()->imageUrl(640, 480, 'products', true),
            'price' => fake()->randomFloat(2, 1, 10000),
            'old_price' => fake()->optional()->randomFloat(2, 1, 10000),
            'category_id' => Category::inRandomOrder()->first()->id, // Lấy category_id ngẫu nhiên từ bảng categories
            'hot' => fake()->boolean(),
            'popular' => fake()->boolean(),
            'sale' => fake()->boolean(), //randoom false or true 
            'des' => fake()->paragraph(),
            'date' => fake()->date(),
            // 'thumbnail_img' => json_encode([
            //     fake()->imageUrl(640, 480, 'products', true),
            //     fake()->imageUrl(640, 480, 'products', true),
            //     fake()->imageUrl(640, 480, 'products', true),
            //     fake()->imageUrl(640, 480, 'products', true),
            // ]),
            'thumbnail_img' => fake()->imageUrl(640, 480, 'products', true),
            // 'thumbnail_img' => implode(',', [
            //     fake()->imageUrl(640, 480, 'products', true),
            //     fake()->imageUrl(640, 480, 'products', true),
            //     fake()->imageUrl(640, 480, 'products', true),
            //     fake()->imageUrl(640, 480, 'products', true),
            // ]),
            'quantity' => fake()->numberBetween(0, 100), // Số lượng sản phẩm ngẫu nhiên
            'status' => fake()->boolean(), // Trạng thái ngẫu nhiên (true: còn hàng, false: hết hàng)
        ];
    }
}
