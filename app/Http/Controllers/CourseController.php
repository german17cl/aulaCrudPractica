<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    // Mostrar lista de cursos con paginación
    public function index() {
        $courses = Course::with('teacher')->paginate(10); // Paginación 10 por página
        return view('courses.index', compact('courses'));
    }

    // Mostrar formulario de creación
    public function create() {
        $teachers = Teacher::all();
        return view('courses.create', compact('teachers'));
    }

    // Guardar nuevo curso
    public function store(Request $request) {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        Course::create($data);

        return redirect()->route('courses.index')
                         ->with('success', 'Curso creado correctamente');
    }

    // Mostrar detalles de un curso
    public function show(Course $course) {
        return view('courses.show', compact('course'));
    }

    // Mostrar formulario de edición
    public function edit(Course $course) {
        $teachers = Teacher::all();
        return view('courses.edit', compact('course', 'teachers'));
    }

    // Actualizar curso
    public function update(Request $request, Course $course) {
        $data = $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'teacher_id' => 'required|exists:teachers,id',
        ]);

        $course->update($data);

        return redirect()->route('courses.index')
                         ->with('success', 'Curso actualizado correctamente');
    }

    // Vista de confirmación antes de eliminar
    public function confirmDelete(Course $course) {
        return view('courses.confirm-delete', compact('course'));
    }

    // Eliminar curso
    public function destroy(Course $course) {
        $course->delete();

        return redirect()->route('courses.index')
                         ->with('success', 'Curso eliminado correctamente');
    }
}
