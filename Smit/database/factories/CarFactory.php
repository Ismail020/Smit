<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 4),
            'kenteken' => $this->faker->unique()->numberBetween(5000, 15000),
            'merk' => $this->faker->name(),
            'type' => $this->faker->name(),
            'bouwdatum' => $this->faker->date(),
            'prijs ingekocht' => $this->faker->numberBetween(5000, 15000),
            'prijs te koop' => $this->faker->numberBetween(5000, 15000),
            'foto' => $this->faker->name(),
        ];
    }
}
