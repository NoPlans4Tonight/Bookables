<?php

namespace Database\Seeders;

use App\Models\Bookable;
use Illuminate\Database\Seeder;
use Faker\Factory;

class BookablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Bookable::class, 100)->create();
        // Bookable::factory()->count(100)->create();
    }
}
