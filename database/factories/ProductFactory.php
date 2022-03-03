<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
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
            'slug'=>$this->faker->slug(1),
            'description'=>$this->faker->text(300),
            'price'=>rand(10,100),
            'favorite'=>$this->faker->boolean(),
            'image'=> $this ->faker->imageUrl(),
            'promotion'=>rand(10,80),
            // 'colors' => $this->faker->randomElements(['Rouge', 'Vert', 'Bleu'], rand(0, 2)),
            //  $category=Product::pluck('id')->all(),
            // 'categorie_id'=>$this->faker->randomElement($category),
            'category_id'=>rand(0,4),
            // 'comment_id'=>rand(0,9),
            

        ];
    }
}
