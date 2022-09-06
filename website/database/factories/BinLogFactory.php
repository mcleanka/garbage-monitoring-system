<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BinLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'bin_id' => $this->faker->unique(true)->numberBetween(1, 2),
            'status' => $this->faker->unique(true)->numberBetween(1, 2),
            'percentage' => $this->faker->randomFloat(2, 1, 50),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
