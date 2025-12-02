@extends('layouts.main')
@section('title', 'Lista de Estudiantes')

@section('content')

<h1 class="text-3xl font-bold mb-5">Lista de Estudiantes</h1>

<a href="{{ route('students.create') }}"
   class="inline-block mb-4 bg-blue-950 text-white px-4 py-2 rounded-lg hover:bg-blue-900">
    Nuevo estudiante
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
            <tr class="hover:bg-gray-50 border-b">
                <td class="px-4 py-2 border">{{ $student->id }}</td>
                <td class="px-4 py-2 border">{{ $student->nombre }}</td>
                <td class="px-4 py-2 border">{{ $student->edad }}</td>
                <td class="px-4 py-2 border">{{ $student->telefono }}</td>
                <td class="px-4 py-2 border">{{ $student->direccion }}</td>
                <td class="px-4 py-2 border space-x-3">
                
                <div class="flex gap-3">

                    <a href="{{ route('students.show', $student->id) }}" 
                        class="text-white hover:bg-blue-900 p-2 bg-blue-950 px-2 rounded-lg">
                        Ver
                    </a>
                    
                    <a href="{{ route('students.edit', $student->id) }}" 
                        class="text-white hover:bg-amber-300 p-2 bg-amber-400 px-2 rounded-lg">
                        Modificar
                    </a>
                
                    <a href="{{ route('students.confirmDelete', $student->id) }}" 
                        class="text-white hover:bg-red-800 p-2 bg-red-900 px-2 rounded-lg ">
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
    {{ $students->links() }}
</div>

@endsection
