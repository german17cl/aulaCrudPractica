<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Teacher;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        $teacher = new Teacher();
        $teacher->nombre = 'Juan Martínez';
        $teacher->profesion = 'Ing. Sistemas';
        $teacher->grado = 'Licenciatura';
        $teacher->telefono = '123456789';
        $teacher->save();


        $teacher = new Teacher();
        $teacher->nombre = 'Ana Gómez';
        $teacher->profesion = 'Ing. Informático';
        $teacher->grado = 'Maestría';
        $teacher->telefono = '987654321';
        $teacher->save();

        $teacher = new Teacher();
        $teacher->nombre = 'Luis Rodríguez';
        $teacher->profesion = 'Adm. Empresas';
        $teacher->grado = 'Doctorado';
        $teacher->telefono = '555666777';
        $teacher->save();

        $teacher = new Teacher();
        $teacher->nombre = 'María Fernández';
        $teacher->profesion = 'Ing. Comercial';
        $teacher->grado = 'Licenciatura';
        $teacher->telefono = '444555666';
        $teacher->save();
    }
}
