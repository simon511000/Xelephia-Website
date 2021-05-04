<?php

namespace Database\Factories;

use App\Models\BoutiqueArticle;
use Illuminate\Database\Eloquent\Factories\Factory;

class BoutiqueArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BoutiqueArticle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->words(rand(5, 8), true),
            'description' => $this->faker->words(rand(15, 50), true),
            'price' => rand(100, 5000),
            'image' => ''
        ];
    }
}
