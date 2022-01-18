<?php

namespace Database\Seeders;

use App\Http\Controllers\Category;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return [
            'solar_system_id' => Category::factory(),
            'name' => $this->faker->unique()->firstName(),
            'description' => $this->faker->paragraph(),
            'size_in_km' => $this->faker->numberBetween(5000, 15000)
        ];
    }
}
