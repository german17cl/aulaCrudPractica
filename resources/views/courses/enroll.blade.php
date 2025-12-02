@extends('layouts.main')

@section('title', 'Matrículas del Curso')

@section('content')

<h1 class="text-3xl font-bold mb-5">
    Matrículas del curso: {{ $course->nombre }}
</h1>

<a href="{{ route('courses.index') }}"
   class="inline-block mb-4 bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600">
    ← Volver a cursos
</a>

<form action="{{ route('courses.enroll.update', $course->id) }}" method="POST">
    @csrf

    <div class="bg-white shadow-md rounded-lg p-5">
        <table class="min-w-full bg-white">
            <thead class="bg-blue-950 text-white">
                <tr>
                    <th class="py-3 px-4 border">Matriculado</th>
                    <th class="py-3 px-4 border">ID Alumno</th>
                    <th class="py-3 px-4 border">Nombre</th>
                    <th class="py-3 px-4 border">Edad</th>
                    <th class="py-3 px-4 border">Teléfono</th>
                </tr>
            </thead>

            <tbody>
                @foreach($students as $student)
                <tr class="border-b hover:bg-gray-100">
                    <td class="py-3 px-4 text-center">
                        <input type="checkbox"
                               name="students[]"
                               value="{{ $student->id }}"
                               @checked(in_array($student->id, $enrolled))>
                    </td>

                    <td class="py-3 px-4">{{ $student->id }}</td>
                    <td class="py-3 px-4">{{ $student->nombre }}</td>
                    <td class="py-3 px-4">{{ $student->edad }}</td>
                    <td class="py-3 px-4">{{ $student->telefono }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <button type="submit"
        class="mt-5 bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700">
        Guardar Matrículas
    </button>
</form>

@endsection
