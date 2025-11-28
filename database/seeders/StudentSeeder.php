<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $student = new Student();
        $student->nombre = 'Juan Perez';
        $student->edad = 20;
        $student->telefono = '123456789';
        $student->direccion = 'Calle Falsa 123';
        $student->foto = null;
        $student->save();

        $student = new Student();
        $student->nombre = 'Maria Gomez';
        $student->edad = 22;
        $student->telefono = '987654321';
        $student->direccion = 'Avenida Siempre Viva 456';
        $student->foto = null;
        $student->save();

        $student = new Student();
        $student->nombre = 'Luis Rodriguez';
        $student->edad = 21;
        $student->telefono = '555123456';
        $student->direccion = 'Boulevard Central 789';
        $student->foto = null;
        $student->save();

        $student = new Student();
        $student->nombre = 'Ana Martinez';
        $student->edad = 23;
        $student->telefono = '444987654';
        $student->direccion = 'Plaza Mayor 101';
        $student->foto = null;
        $student->save();

        $student = new Student();
        $student->nombre = 'Carlos Sanchez';
        $student->edad = 24;
        $student->telefono = '333456789';
        $student->direccion = 'Calle del Sol 202';
        $student->foto = null;
        $student->save();

        $student = new Student();
        $student->nombre = 'Laura Fernandez';
        $student->edad = 20;
        $student->telefono = '222123456';
        $student->direccion = 'Avenida de la Luna 303';
        $student->foto = null;
        $student->save();

        $student = new Student();
        $student->nombre = 'Jorge Ramirez';
        $student->edad = 22;
        $student->telefono = '111987654';
        $student->direccion = 'Calle de las Flores 404';
        $student->foto = null;
        $student->save();

        $student = new Student();
        $student->nombre = 'Sofia Torres';
        $student->edad = 21;
        $student->telefono = '666555444';
        $student->direccion = 'Camino Real 505';
        $student->foto = null;
        $student->save();

        $student = new Student();
        $student->nombre = 'Diego Morales';
        $student->edad = 23;
        $student->telefono = '777888999';
        $student->direccion = 'Ruta 66 606';
        $student->foto = null;
        $student->save();

        $student = new Student();
        $student->nombre = 'Elena Ruiz';
        $student->edad = 24;
        $student->telefono = '000111222';
        $student->direccion = 'Camino de Santiago 707';
        $student->foto = null;
        $student->save();

        $student = new Student();
        $student->nombre = 'Miguel Castillo';
        $student->edad = 25;
        $student->telefono = '888777666';
        $student->direccion = 'Avenida del Mar 808';
        $student->foto = null;
        $student->save();
    }
}
