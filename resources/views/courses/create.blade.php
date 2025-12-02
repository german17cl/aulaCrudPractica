@extends('layouts.main')

@section('title', 'Crear Curso')

@section('content')

<h1 class="text-3xl font-bold mb-6">Crear Curso</h1>

<form action="{{ route('courses.store') }}" method="POST"
      class="bg-white shadow-md p-6 rounded-lg space-y-6">
    @csrf

    <div>
        <label class="font-semibold">Nombre</label>
        <input type="text" name="nombre"
               class="w-full border rounded-lg p-2" required>
    </div>

    <div>
        <label class="font-semibold">Descripción</label>
        <textarea name="descripcion"
                  class="w-full border rounded-lg p-2"></textarea>
    </div>

    <div>
        <label class="font-semibold">Profesor</label>
        <select name="teacher_id" class="w-full border rounded-lg p-2" required>
            <option value="">-- Selecciona un profesor --</option>

            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}">
                    {{ $teacher->nombre }}
                </option>
            @endforeach

        </select>
        
    </div>

    <button class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
        Crear Curso
    </button> <a href="{{ route('courses.index') }}"
           class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Volver a la lista</a>
</form>

@endsection
