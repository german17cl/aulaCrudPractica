@extends('layouts.main')
@section('title', 'Lista de Estudiantes')

@section('content')

<h1 class="text-2xl font-bold mb-6">Lista de Estudiantes</h1>

<a href="{{ route('students.create') }}"
   class="inline-block mb-4 bg-blue-950 text-white px-4 py-2 rounded hover:bg-blue-700">
    + Nuevo estudiante
</a>

<div class="overflow-x-auto">
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-blue-950 text-white">
            <tr>
                <th class="px-3 py-4 border">ID</th>
                <th class="px-3 py-4 border">Nombre</th>
                <th class="px-3 py-4 border">Edad</th> 
                <th class="px-3 py-4 border">Teléfono</th>
                <th class="px-3 py-4 border">Dirección</th>
                <th class="px-3 py-4 border">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($students as $student)
            <tr class="hover:bg-gray-50">
                <td class="px-4 py-2 border">{{ $student->id }}</td>
                <td class="px-4 py-2 border">{{ $student->nombre }}</td>
                <td class="px-4 py-2 border">{{ $student->edad }}</td>
                <td class="px-4 py-2 border">{{ $student->telefono }}</td>
                <td class="px-4 py-2 border">{{ $student->direccion }}</td>
                <td class="px-4 py-2 border space-x-3">
                    <a href="{{ route('students.show', $student->id) }}" class="text-blue-600 hover:underline">Ver</a>
                    <a href="{{ route('students.edit', $student->id) }}" class="text-yellow-600 hover:underline">Editar</a>
                    <a href="{{ route('students.confirmDelete', $student->id) }}" class="text-red-600 hover:underline">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $students->links() }}
</div>

@endsection
