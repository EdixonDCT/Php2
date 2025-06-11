<?php


namespace Database\Factories;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'category_id' => Category::all()->random()->id,
            'image_id' => Image::factory()->create()->id,
        ];
    }
}
