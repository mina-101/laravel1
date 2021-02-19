<?php

namespace Database\Seeders;

use App\Models\Example;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExampleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Example::factory()->count(10);
    }
}
