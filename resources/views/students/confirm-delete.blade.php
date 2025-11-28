@extends('layouts.main')

@section('title', 'Confirmar Eliminación')

@section('content')

<div class="bg-white p-6 rounded-lg shadow">

    <h1 class="text-2xl font-bold mb-4 text-red-600">Confirmar Eliminación</h1>

    <p class="mb-4 text-lg">
        ¿Estás seguro que quieres eliminar al alumno
        <strong>{{ $student->nombre }}</strong>?
    </p>

    <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="flex space-x-4">
        @csrf
        @method('DELETE')

        <button type="submit"
                class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700">
            Sí, eliminar
        </button>

        <a href="{{ route('students.index') }}"
           class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">
            Cancelar
        </a>
    </form>

</div>

@endsection
