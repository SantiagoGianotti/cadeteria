<?php

namespace Database\Factories;

use App\Models\Repartidor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Repartidor>
 */
class RepartidorFactory extends Factory
{

    protected $model = Repartidor::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->firstName(),
            'apellido' => fake()->lastName(),
            'celular' => fake()->e164PhoneNumber(),
            'estado' => 1
        ];
    }
}
