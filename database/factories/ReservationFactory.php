<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre_sala'=> fake() -> name(),
            'fecha_reserva'=> fake() -> date(),
            'hora_inicio'=> fake() -> randomFloat(0, 0, 23),
            'hora_fin'=> fake() -> randomFloat(0, 0, 23),
            'nombre_cliente'=> fake() -> name(),
        ];
    }
}
