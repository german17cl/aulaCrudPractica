<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index() {
        //$teachers = Teacher::all();
        $teachers = Teacher::paginate(10); // 10 por página
        return view('teachers.index', compact('teachers'));
    }

    public function create()
{
    $profesiones = ['Ing. Sistemas', 'Ing. Informático', 'Adm. Empresas', 'Ing. Comercial'];
    $grados = ['Licenciado', 'Maestría', 'Doctorado']; // aquí agregas los grados

    return view('teachers.create', compact('profesiones', 'grados'));
}
    
    public function edit(Teacher $teacher) {
    $profesiones = ['Ing. Sistemas', 'Ing. Informático', 'Adm. Empresas', 'Ing. Comercial'];
    $grados = ['Licenciado', 'Maestría', 'Doctorado'];

    return view('teachers.edit', compact('teacher', 'profesiones', 'grados'));
}


    

public function store(Request $request)
{
    $data = $request->validate([
        'nombre' => 'required|string|max:255',
        'profesion' => 'required|string|max:255',
        'grado' => 'required|string|max:255',
        'telefono' => 'required|string|max:20',
    ]);

    Teacher::create($data);
    return redirect()->route('teachers.index');
}

public function update(Request $request, Teacher $teacher)
{
    $data = $request->validate([
        'nombre' => 'required|string|max:255',
        'profesion' => 'required|string|max:255',
        'grado' => 'required|string|max:255',
        'telefono' => 'required|string|max:20',
    ]);

    $teacher->update($data);
    return redirect()->route('teachers.index');
}
    public function show(Teacher $teacher)
{
    return view('teachers.show', compact('teacher'));
}

    // Mostrar la vista de confirmación antes de eliminar
    public function confirmDelete(Teacher $teacher)
    {
        return view('teachers.confirm-delete', compact('teacher'));
    }


    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Profesor eliminado correctamente');
    }

}
