<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use phpDocumentor\Reflection\Types\Boolean;

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
    public function definition()
    {
        return [
            'name'=>$this->faker->sentence(2),
            // // 'slug'=>$this->faker->slug('name'),
            'description'=>$this->faker->text(300),
            'price'=>rand(10,100),
            // // 'favorite'=>booleanValue(),
            'image'=> $this ->faker->imageUrl(),
            
            'promotion'=>rand(10,80),

        ];
    }
}
