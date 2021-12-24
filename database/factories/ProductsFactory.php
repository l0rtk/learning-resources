<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use \App\Models\Groups;
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {


        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->sentences(3, true),
//            'group_id' => $this->faker->randomDigit(),
            'group_id' => rand(1,4),
            'priority' => rand(1,100),


        ];

    }
}
