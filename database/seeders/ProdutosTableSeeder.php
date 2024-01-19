<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutosTableSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Produto::factory(100)->create();
    }
}
