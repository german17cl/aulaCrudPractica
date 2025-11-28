@extends('layouts.main')

@section('title', 'Detalle Profesor')

@section('content')

<h1 class="text-3xl font-bold mb-6">Profesor: {{ $teacher->nombre }}</h1>

<div class="bg-white shadow-md rounded-lg p-6 space-y-4">
    <p><strong>Teléfono:</strong> {{ $teacher->telefono }}</p>
    <p><strong>Grado:</strong> {{ $teacher->grado }}</p>
    <p><strong>Profesión:</strong> {{ $teacher->profesion }}</p>
</div>

<div class="mt-6 flex gap-4">
    <a href="{{ route('teachers.index') }}" 
       class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
        Volver a la lista
    </a>

    <a href="{{ route('teachers.edit', $teacher->id) }}" 
       class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">
        Editar
    </a>
</div>

@endsection
