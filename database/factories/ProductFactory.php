<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->text(),
            'gender'=>$this->faker->title(),
            'size'=>$this->faker->biasedNumberBetween(23,42),
            'category'=>$this->faker->text(25),
            'brand'=>$this->faker->text(25),
            'color'=>$this->faker->text(25),
            'material'=>$this->faker->text(25),
            'price'=>$this->faker->numerify(),
            'status'=>$this->faker->text(50),
            'img'=>$this->faker->text(5),
        ];
    }
}
