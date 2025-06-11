<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(5)->create();
        Category::factory(10)->create();
        // Image::factory(1)->create();
        Product::factory(50)->create();
        // Category::factory(10)->create()->each(
        //     function (Category $category){
        //         echo $category->id;
        //     }
        // );
        // User::factory(10)->create();

    //     User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //     ]);

    //    $this->call([CategorySeeder::class]);
    }
}
