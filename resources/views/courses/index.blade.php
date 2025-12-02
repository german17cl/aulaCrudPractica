@extends('layouts.main')

@section('title', 'Cursos')

@section('content')

<h1 class="text-3xl font-bold mb-5">Lista de Cursos</h1>

<a href="{{ route('courses.create') }}"
   class="inline-block mb-4 bg-blue-950 text-white px-4 py-2 rounded-lg hover:bg-blue-900">
    Nuevo Curso
</a>

<div class="overflow-x-auto">
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-blue-950 text-white">
            <tr>
                <th class="py-3 px-4 border">ID</th>
                <th class="py-3 px-4 border">Nombre</th>
                <th class="py-3 px-4 border">Descripción</th>
                <th class="py-3 px-4 border">Profesor</th>
                <th class="py-3 px-4 border">Alumnos del curso</th>
                <th class="py-3 px-4 border">Matrículas</th>
                <th class="py-3 px-4 border">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($courses as $course)
            <tr class="border-b hover:bg-gray-100">
                <td class="py-3 px-4">{{ $course->id }}</td>
                <td class="py-3 px-4">{{ $course->nombre }}</td>
                <td class="py-3 px-4">{{ $course->descripcion }}</td>

                <td class="py-3 px-4">
                    {{ $course->teacher ? $course->teacher->nombre : 'Sin profesor' }}
                </td>

                <td class="py-3 px-4">
                    
                    <a href="{{ route('courses.students', $course->id) }}"
                        class="text-white hover:bg-gray-500 p-2 bg-gray-700 px-2 rounded-lg">
                        Ver alumnos
                    </a>

                </td>
                <td class="py-3 px-4">
                    <a href="{{ route('courses.enroll', $course->id) }}" 
                        class="text-white hover:bg-blue-900 p-2 bg-blue-950 px-2 rounded-lg">
                        Matrículas
                    </a>

                </td>
                <td class="py-3 px-4">

                    <div class="flex gap-3">

                        <a href="{{ route('courses.show', $course->id) }}"
                           class="text-white hover:bg-blue-900 p-2 bg-blue-950 px-2 rounded-lg">
                            Ver
                        </a>

                        <a href="{{ route('courses.edit', $course->id) }}"
                            class="text-white hover:bg-amber-300 p-2 bg-amber-400 px-2 rounded-lg">
                            Modificar
                        </a>

                        <a href="{{ route('courses.confirmDelete', $course->id) }}"
                           class="text-white hover:bg-red-800 p-2 bg-red-900 px-2 rounded-lg">
                            Eliminar
                        </a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $courses->links() }}
</div>

@endsection
