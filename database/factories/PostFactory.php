<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(2),
            'content' => $this->faker->text(100),
            'preview_image' => $this->faker->imageUrl( 300, 300,),
            'main_image' => $this->faker->imageUrl( 600, 600),
            'category_id' => Category::get()->random()->id,
        ];
    }
}

