<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Cargo_Colaboradores;
use App\Models\Cargo;
use App\Models\Colaboradores;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cargo_Colaboradores>
 */
class Cargo_ColaboradoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $cargosIds = Cargo::pluck('id')->toArray();
        $colaboradoresIds = Colaboradores::pluck('id')->toArray();
        $nota_colaboradores = ['1', '2', '3', '4', '5'];

        return [
            'cargo_id' => $this->faker->randomElement($cargosIds),
            'colaborador_id' => $this->faker->unique()->randomElement($colaboradoresIds),
            'nota_desempenho' => $this->faker->randomElement($nota_colaboradores),
        ];
    }
}
