@extends('layouts.main')

@section('title', 'Profesores')

@section('content')

<h1 class="text-3xl font-bold mb-5">Lista de Profesores</h1>

<a href="{{ route('teachers.create') }}" 
   class="inline-block mb-4 bg-blue-950 text-white px-4 py-2 rounded-lg hover:bg-blue-900">
    Nuevo Profesor
</a>

<div class="overflow-x-auto">
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-blue-950 text-white">
            <tr>
                <th class="py-3 px-4 border">ID</th>
                <th class="py-3 px-4 border">Nombre</th>
                <th class="py-3 px-4 border">Profesión</th>
                <th class="py-3 px-4 border">Grado</th>
                <th class="py-3 px-4 border">Teléfono</th>
                <th class="py-3 px-4 border">Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($teachers as $teacher)
            <tr class="border-b hover:bg-gray-100">
                <td class="py-3 px-4">{{ $teacher->id }}</td>
                <td class="py-3 px-4">{{ $teacher->nombre }}</td>
                <td class="py-3 px-4">{{ $teacher->profesion }}</td>
                <td class="py-3 px-4">{{ $teacher->grado }}</td>
                <td class="py-3 px-4">{{ $teacher->telefono }}</td>
                <td class="py-3 px-4 flex gap-3">
                    <a href="{{ route('teachers.show', $teacher->id) }}" 
                      class="text-white hover:bg-blue-900 p-2 bg-blue-950 px-2 rounded-lg"> 
                        Ver
                    </a>

                    <a href="{{ route('teachers.edit', $teacher->id) }}"
                        class="text-white hover:bg-amber-300 p-2 bg-amber-400 px-2 rounded-lg">

                        Modificar
                    </a>

                    <a href="{{ route('teachers.confirmDelete', $teacher->id) }}" 
                       class="text-white hover:bg-red-800 p-2 bg-red-900 px-2 rounded-lg">
                        Eliminar
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="mt-4">
    {{ $teachers->links() }}
</div>

@endsection
