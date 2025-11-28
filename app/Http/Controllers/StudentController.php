<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
         $students = Student::paginate(10); 
        return view('students.index', compact('students'));
    }

    public function create(){
        return view('students.create');
    }

    public function confirmDelete(Student $student)
    {
        return view('students.confirm-delete', compact('student'));
    }


    public function store(Request $request){
        $data = $request -> validate([
            'nombre' => 'required|string|max:255',
            'edad' => 'required|integer',
            'telefono' => 'required|string|max:20',
            'direccion' => 'required|string|max:255',
            'foto' => 'nullable|image|max:2048',
        ]);

        if($request->hasFile('foto')){
            $data['foto'] = $request->file('foto')->store('students', 'public');
        }


        Student::create($data);
        return redirect()->route('students.index');
    }

    public function edit(Student $student) { 
        return view('students.edit', compact('student'));
    }
    
    public function update(Request $request, Student $student){
    $data = $request->validate([
        'nombre' => 'required|string|max:255',
        'edad' => 'required|integer',
        'telefono' => 'required|string|max:20',
        'direccion' => 'required|string|max:255',
        'foto' => 'nullable|image|max:2048',
    ]);

    if($request->hasFile('foto')){
        $data['foto'] = $request->file('foto')->store('students', 'public');
    }

    $student->update($data);

    return redirect()->route('students.index');
}


    public function show(Student $student){
        return view('students.show', compact('student'));

    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Alumno eliminado correctamente');
    }

}
