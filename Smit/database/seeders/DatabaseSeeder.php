<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Busjes',
        ]);

        DB::table('categories')->insert([
            'name' => 'SUV',
        ]);

        DB::table('categories')->insert([
            'name' => 'Personen',
        ]);

        DB::table('categories')->insert([
            'name' => 'Cabrio',
        ]);

        Car::factory(20)->create();
    }
}
