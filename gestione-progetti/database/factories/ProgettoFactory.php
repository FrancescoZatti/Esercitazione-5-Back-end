<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\Attivita;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Progetto>
 */
class ProgettoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'titolo' => fake()->unique()->text(30),
            'descrizione' => fake()->text(200),
            'users_id' => User::get()->random()->id,
            'attivitas_id' => Attivita::get()->random()->id
        ];
    }
}
