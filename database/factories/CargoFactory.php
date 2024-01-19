<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Cargo;

class CargoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $uniqueCargos;

        $cargos = ['Gerente', 'Analista', 'Desenvolvedor', 'Coordenador', 'Estagiário', 'Pleno', 'Sênior', 'Junior', 'Trainee', 'PJ'];

        // Garante que cada cargo seja único
        $uniqueCargos = $uniqueCargos ?? collect($cargos)->shuffle();

        return [
            'cargo' => $uniqueCargos->pop(),
        ];
    }
}
