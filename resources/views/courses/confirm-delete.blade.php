@extends('layouts.main')

@section('title', 'Confirmar Eliminación')

@section('content')

<h1 class="text-3xl font-bold mb-4">Confirmar Eliminación</h1>

<p class="mb-6">
    ¿Seguro que deseas eliminar el curso 
    <strong>{{ $course->nombre }}</strong>?
</p>

<form action="{{ route('courses.destroy', $course->id) }}" method="POST"
      class="space-x-4">
    @csrf
    @method('DELETE')

    <button type="submit" 
            class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700">
        Sí, eliminar
    </button>

    <a href="{{ route('courses.index') }}" 
       class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
        Cancelar
    </a>
</form>

@endsection
