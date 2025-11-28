@extends('layouts.main')

@section('title', 'Detalle del Curso')

@section('content')

<h1 class="text-3xl font-bold mb-6">Curso: {{ $course->nombre }}</h1>

<div class="bg-white shadow-md rounded-lg p-6 space-y-4">

    <p><strong>Descripción:</strong> {{ $course->descripcion }}</p>

    <p>
        <strong>Profesor:</strong>
        {{ $course->teacher ? $course->teacher->nombre : 'Sin profesor asignado' }}
    </p>

</div>

<div class="mt-6 flex gap-4">
    <a href="{{ route('courses.index') }}" 
       class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
        Volver a la lista
    </a>

    <a href="{{ route('courses.edit', $course->id) }}" 
       class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">
        Editar
    </a>
</div>

@endsection
