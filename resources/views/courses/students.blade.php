@extends('layouts.main')

@section('title', 'Alumnos del curso')

@section('content')

<h1 class="text-3xl font-bold mb-5">
    Alumnos del curso: {{ $course->nombre }}
</h1>

<a href="{{ route('courses.index') }}"
   class="inline-block mb-4 bg-gray-700 text-white px-4 py-2 rounded-lg hover:bg-gray-600">
    ← Volver a cursos
</a>

@if($students->isEmpty())
    <p class="text-gray-600">Este curso no tiene alumnos inscritos.</p>
@else

<div class="overflow-x-auto">
    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden">
        <thead class="bg-blue-950 text-white">
            <tr>
                <th class="py-3 px-4 border">ID</th>
                <th class="py-3 px-4 border">Nombre</th>
                <th class="py-3 px-4 border">Teléfono</th>
                <th class="py-3 px-4 border">Edad</th>
                <th class="py-3 px-4 border">Dirección</th>

                
            </tr>
        </thead>

        <tbody>
            @foreach($students as $student)
            <tr class="border-b hover:bg-gray-100">
                <td class="py-3 px-4">{{ $student->id }}</td>
                <td class="py-3 px-4">{{ $student->nombre }}</td>
                <td class="py-3 px-4">{{ $student->telefono }}</td>
                <td class="py-3 px-4">{{ $student->edad }}</td>
                <td class="py-3 px-4">{{ $student->direccion }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endif

@endsection
