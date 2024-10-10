<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyecto>
 */
class ProyectoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'proy_nom' => $this->faker->sentence(10),
            'proy_sect' => $this->faker->numberBetween(1, 10), 
            'proy_tipo' => $this->faker->numberBetween(1, 3), 
            'proy_mpio' => $this->faker->numberBetween(1, 16), 
            'proy_fase' => $this->faker->numberBetween(1, 7), 
            'proy_stat' => $this->faker->numberBetween(1, 2), 
            'proy_seg' => $this->faker->numberBetween(1, 8), 
            'proy_desc' => $this->faker->text(), 
            'proy_inver' => $this->faker->numberBetween(1, 30),
            'proy_e_dir' => $this->faker->numberBetween(50, 1000), 
            'proy_e_ind' => $this->faker->numberBetween(50, 1000),
        ];
    }
}
