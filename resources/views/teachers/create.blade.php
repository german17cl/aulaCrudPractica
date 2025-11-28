@extends('layouts.main')

@section('title', 'Nuevo Profesor')

@section('content')

<h1 class="text-3xl font-bold mb-6">Nuevo Profesor</h1>

<form method="post" action="{{ route('teachers.store') }}"
      class="bg-white shadow-md p-6 rounded-lg space-y-6">
    @csrf

    <div>
        <label class="font-semibold">Nombre y apellidos:</label>
        <input type="text" name="nombre" class="w-full border rounded-lg p-2">
    </div>

    <div>
        <label class="font-semibold">Profesión:</label>
        <select name="profesion" class="w-full border rounded-lg p-2">
            @foreach ($profesiones as $profesion)
                <option value="{{ $profesion }}">
                    {{ $profesion }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="font-semibold">Grado académico:</label>
        <select name="grado" class="w-full border rounded-lg p-2">
            @foreach ($grados as $grado)
                <option value="{{ $grado }}">
                    {{ $grado }}
                </option>
            @endforeach
        </select>
    </div>

    <div>
        <label class="font-semibold">Teléfono:</label>
        <input type="text" name="telefono" class="w-full border rounded-lg p-2">
    </div>

    <div class="flex gap-4">
        <button type="submit"
                class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            Guardar
        </button>

        <a href="{{ route('teachers.index') }}" 
           class="bg-gray-600 text-white px-4 py-2 rounded-lg hover:bg-gray-700">
            Volver a la lista
        </a>
    </div>
</form>

@endsection
