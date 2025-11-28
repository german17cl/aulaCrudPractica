<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Teacher;

class CourseSeeder extends Seeder
{
    public function run(): void
    {
        $teachers = Teacher::all();

        $course = new Course();
        $course->nombre = 'Matemáticas Básicas';
        $course->descripcion = 'Nivel inicial de matemáticas';
        $course->teacher_id = $teachers->random()->id; // toma un ID válido
        $course->save();

        $course = new Course();
        $course->nombre = 'Inglés A1';
        $course->descripcion = 'Nivel inicial de inglés';
        $course->teacher_id = $teachers->random()->id; // toma un ID válido
        $course->save();

        $course = new Course();
        $course->nombre = 'Historia Universal';
        $course->descripcion = 'Introducción a la historia mundial';
        $course->teacher_id = $teachers->random()->id; // toma un ID válido
        $course->save();

        $course = new Course();
        $course->nombre = 'Programación en Python';
        $course->descripcion = 'Curso básico de programación';
        $course->teacher_id = $teachers->random()->id; // toma un ID válido
        $course->save();

        $course = new Course();
        $course->nombre = 'Física General';
        $course->descripcion = 'Conceptos fundamentales de física';
        $course->teacher_id = $teachers->random()->id; // toma un ID válido
        $course->save();

        // y así con los demás cursos
    }
}
