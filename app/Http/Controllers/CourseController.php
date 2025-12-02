<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use App\Models\Student;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index() {
        $courses = Course::with('teacher')->paginate(10);
        return view('courses.index', compact('courses'));
    }

    public function create() {
        $teachers = Teacher::all();
        return view('courses.create', compact('teachers'));
    }

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

    public function show(Course $course) {
        return view('courses.show', compact('course'));
    }

    public function edit(Course $course) {
        $teachers = Teacher::all();
        return view('courses.edit', compact('course', 'teachers'));
    }

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

    public function confirmDelete(Course $course) {
        return view('courses.confirm-delete', compact('course'));
    }

    public function destroy(Course $course) {
        $course->delete();

        return redirect()->route('courses.index')
                         ->with('success', 'Curso eliminado correctamente');
    }

    
    public function enroll(Course $course)
    {
        $students = Student::orderBy('id', 'asc')->get();

        // alumnos ya matriculados
        $enrolled = $course->students()->pluck('students.id')->toArray();

        return view('courses.enroll', compact('course', 'students', 'enrolled'));
    }

    public function updateEnroll(Request $request, Course $course)
    {
        // Si no seleccionó nada, sincronizar vacío
        $course->students()->sync($request->students ?? []);

        return redirect()->route('courses.index')
                         ->with('success', 'Matrículas actualizadas correctamente.');
    }

        public function students(Course $course)
    {
        // Obtener todos los alumnos matriculados mediante la relación Many-to-Many
        $students = $course->students;

        return view('courses.students', compact('course', 'students'));
    }

}
