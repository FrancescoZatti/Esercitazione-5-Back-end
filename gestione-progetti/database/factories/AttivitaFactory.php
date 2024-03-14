<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Attivita>
 */
class AttivitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $attivita = ['Attivita1', 'Attivita2', 'Attivita3', 'Attivita4', 'Attivita5'];
        return [
            'nome' => fake()->randomElement($attivita),
            'descrizione' => fake()->text(),
        ];
    }
}
