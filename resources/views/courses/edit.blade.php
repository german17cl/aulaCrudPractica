@extends('layouts.main')

@section('title', 'Editar Curso')

@section('content')

<h1 class="text-3xl font-bold mb-6">Editar Curso</h1>

<form action="{{ route('courses.update', $course->id) }}" method="POST"
      class="bg-white shadow-md p-6 rounded-lg space-y-6">
    @csrf
    @method('PUT')

    <div>
        <label for="nombre" class="font-semibold">Nombre del curso:</label>
        <input type="text" name="nombre" id="nombre"
               class="w-full border rounded-lg p-2"
               value="{{ $course->nombre }}" required>
    </div>

    <div>
        <label for="descripcion" class="font-semibold">Descripción:</label>
        <textarea name="descripcion" id="descripcion"
                  class="w-full border rounded-lg p-2"
                  required>{{ $course->descripcion }}</textarea>
    </div>

    <div>
        <label for="teacher_id" class="font-semibold">Profesor:</label>
        <select name="teacher_id" id="teacher_id"
                class="w-full border rounded-lg p-2">

            <option value="">-- Seleccionar profesor --</option>

            @foreach ($teachers as $teacher)
                <option value="{{ $teacher->id }}"
                    @selected($course->teacher_id == $teacher->id)>
                    {{ $teacher->nombre }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
        Actualizar
    </button>

</form>

<div class="mt-4">
    <a href="{{ route('courses.index') }}" 
       class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
        Volver
    </a>
</div>

@endsection
