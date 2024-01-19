<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Colaboradores;

class ColaboradoresTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Colaboradores::factory(100)->create();
    }
}
