<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Colaboradores;
use App\Models\Produto;

class ColaboradoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $unidadesIds = Produto::pluck('id')->toArray();

        $nomeCompleto = $this->faker->name;
        $nomeSemEspacos = str_replace(' ', '', $nomeCompleto);
        $dominioEmail = $this->faker->randomElement(['gmail.com', 'outlook.com', 'hotmail.com']);

        return [
            'id_unidade' => $this->faker->randomElement($unidadesIds),
            'nome' => $nomeCompleto,
            'cpf' => $this->faker->numerify('###########'),
            'mail' => strtolower($nomeSemEspacos) . '@' . $dominioEmail,
        ];
    }
}
