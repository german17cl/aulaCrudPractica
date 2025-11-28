<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TeacherFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'profesion' => $this->faker->randomElement([
                'Ing. Sistemas',
                'Ing. Informático',
                'Adm. Empresas',
                'Ing. Comercial'
            ]),
            'grado' => $this->faker->randomElement([
                'Licenciatura',
                'Maestría',
                'Doctorado'
            ]),
            'telefono' => $this->faker->phoneNumber(),
        ];
    }
}
