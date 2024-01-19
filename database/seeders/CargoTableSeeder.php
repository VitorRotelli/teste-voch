<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cargo;

class CargoTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Cargo::factory(10)->create();
    }
}
