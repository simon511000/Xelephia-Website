<?php

namespace Database\Factories;

use App\Models\BoutiqueCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class BoutiqueCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BoutiqueCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(rand(3, 5), true),
        ];
    }
}
