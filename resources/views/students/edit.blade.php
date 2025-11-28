@extends('layouts.main')

@section('title', 'Editar Estudiante')

@section('content')

<h1 class="text-2xl font-bold mb-6">Editar Estudiante</h1>

<form action="{{ route('students.update', $student->id) }}" method="POST" enctype="multipart/form-data"
      class="bg-white p-6 rounded-lg shadow space-y-4">
    @csrf 
    @method('PUT')

    <div>
        <label class="block font-semibold">Nombre</label>
        <input type="text" name="nombre" value="{{ $student->nombre }}"
               class="w-full mt-1 border px-3 py-2 rounded" required>
    </div>

    <div>
        <label class="block font-semibold">Edad</label>
        <input type="number" name="edad" value="{{ $student->edad }}"
               class="w-full mt-1 border px-3 py-2 rounded" required>
    </div>

    <div>
        <label class="block font-semibold">Teléfono</label>
        <input type="text" name="telefono" value="{{ $student->telefono }}"
               class="w-full mt-1 border px-3 py-2 rounded" required>
    </div>

    <div>
        <label class="block font-semibold">Dirección</label>
        <input type="text" name="direccion" value="{{ $student->direccion }}"
               class="w-full mt-1 border px-3 py-2 rounded" required>
    </div>

    <div>
        <label class="block font-semibold">Foto actual</label>
        @if($student->foto)
            <img src="{{ asset('storage/' . $student->foto) }}" class="w-32 mt-2 rounded shadow">
        @else
            <span class="text-gray-500">No hay foto</span>
        @endif
    </div>

    <div>
        <label class="block font-semibold">Subir nueva foto</label>
        <input type="file" name="foto" class="mt-1">
    </div>

    <div class="flex space-x-4 pt-3">
        <button class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
            Actualizar
        </button>

        <a href="{{ route('students.index') }}"
           class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Volver</a>
    </div>

</form>

@endsection
