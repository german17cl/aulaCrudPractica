@extends('layouts.main')

@section('title', 'Editar Profesor')

@section('content')

<h1 class="text-3xl font-bold mb-6">Editar Profesor</h1>

<form action="{{ route('teachers.update', $teacher->id) }}" method="POST"
      class="bg-white shadow-md p-6 rounded-lg space-y-6">
    @csrf
    @method('PUT')

    <div>
        <label class="font-semibold">Nombre:</label>
        <input type="text" name="nombre" value="{{ $teacher->nombre }}"
               class="w-full border rounded-lg p-2" required>
    </div>

    <div>
        <label class="font-semibold">Teléfono:</label>
        <input type="text" name="telefono" value="{{ $teacher->telefono }}"
               class="w-full border rounded-lg p-2">
    </div>

    <div>
        <label class="font-semibold">Profesión:</label>
        <select name="profesion" class="w-full border rounded-lg p-2">
            @foreach ($profesiones as $profesion)
                <option value="{{ $profesion }}" 
                    @selected($teacher->profesion == $profesion)>
                    {{ $profesion }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="font-semibold">Grado académico:</label>
        <select name="grado" class="w-full border rounded-lg p-2">
            @foreach ($grados as $grado)
                <option value="{{ $grado }}"
                    @selected($teacher->grado == $grado)>
                    {{ $grado }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="flex gap-4">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            Actualizar
        </button>

        <a href="{{ route('teachers.index') }}" 
           class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
            Volver a la lista
        </a>
    </div>
</form>

@endsection
