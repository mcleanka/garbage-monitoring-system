<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique(true)->name,
            'location' => $this->faker->unique(true)->numberBetween(1, 2),
            'capacity' => $this->faker->unique(true)->numberBetween(1, 100),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
