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

    public $cars = ['thumbnails/auto.jfif', 'thumbnails/auto (2).jfif', 'thumbnails/auto (3).jfif', 'thumbnails/auto (4).jfif', 'thumbnails/auto (5).jfif', 'thumbnails/auto (6).jfif', 'thumbnails/auto (7).jfif', 'thumbnails/auto (8).jpg', 'thumbnails/auto (2).jpg'];

    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1, 4),
            'kenteken' => $this->faker->unique()->numberBetween(10000000, 99999999),
            'merk' => $this->faker->name(),
            'type' => $this->faker->name(),
            'bouwjaar' => $this->faker->year(),
            'inkoopprijs' => $this->faker->numberBetween(5000, 15000),
            'verkoopprijs' => $this->faker->numberBetween(5000, 15000),
            'foto' => $this->faker->randomElement($this->cars),
        ];
    }
}
