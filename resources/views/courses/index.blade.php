@extends('layouts.main')

@section('title', 'Cursos')

@section('content')

<h1 class="text-3xl font-bold mb-5">Lista de Cursos</h1>

<a href="{{ route('courses.create') }}"
   class="inline-block mb-4 bg-blue-950 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
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

                <td class="py-3 px-4 flex gap-3">
                    <a href="{{ route('courses.show', $course->id) }}" class="text-blue-600 hover:underline">
                        Ver
                    </a>

                    <a href="{{ route('courses.edit', $course->id) }}" class="text-yellow-600 hover:underline">
                        Editar
                    </a>

                    <a href="{{ route('courses.confirmDelete', $course->id) }}" 
                       class="text-red-600 hover:underline">
                        Eliminar
                    </a>
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
