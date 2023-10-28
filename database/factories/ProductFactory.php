<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement([
                'Chaqueta impermeable para correr',
                'Camiseta de manga larga transpirable',
                'Pantalones cortos de entrenamiento',
                'Sudadera con capucha y cremallera',
                'Zapatillas de running ultraligeras',
                'Calcetines deportivos de alto rendimiento',
                'Pantalones de yoga de cintura alta',
                'Jersey de béisbol retro',
                'Gorro deportivo de secado rápido',
                'Sujetador deportivo de alto impacto',
                'Chándal de gimnasia',
                'Mallas de compresión para ciclismo',
                'Gorra de béisbol de malla',
                'Shorts de baloncesto con forro',
                'Zapatillas de entrenamiento multifunción',
                'Camiseta de ciclismo de alta visibilidad',
                'Mochila de hidratación para correr',
                'Camiseta sin mangas de musculación',
                'Leggings de yoga estampados',
                'Camiseta de tirantes transpirable'
            ]),
            'description' => fake()->realText(),
            'price' => fake()->randomNumber(5,1)
        ];
    }
}
