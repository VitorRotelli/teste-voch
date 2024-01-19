<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cargo_Colaboradores;

class Cargo_ColaboradoresTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Cargo_Colaboradores::factory(100)->create();
    }
}
