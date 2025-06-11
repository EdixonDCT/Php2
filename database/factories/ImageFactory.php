<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

$faker = \Faker\Factory::create();
$faker->addProvider(new \Smknstd\FakerPicsumImages\FakerPicsumImagesProvider($faker));

class ImageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'path' => $this->faker->imageUrl(1200,1600),
        ];
    }
}
