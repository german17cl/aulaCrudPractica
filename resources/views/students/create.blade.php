@extends('layouts.main')

@section('title', 'Nuevo Estudiante')

@section('content')

<h1 class="text-2xl font-bold mb-6">Nuevo Estudiante</h1>

<form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data"
      class="bg-white p-6 rounded-lg shadow space-y-4">
    @csrf 

    <div>
        <label class="block font-semibold">Nombre</label>
        <input type="text" name="nombre"
               class="w-full mt-1 border px-3 py-2 rounded" required>
    </div>

    <div>
        <label class="block font-semibold">Edad</label>
        <input type="number" name="edad"
               class="w-full mt-1 border px-3 py-2 rounded" required>
    </div>

    <div>
        <label class="block font-semibold">Teléfono</label>
        <input type="text" name="telefono"
               class="w-full mt-1 border px-3 py-2 rounded" required>
    </div>

    <div>
        <label class="block font-semibold">Dirección</label>
        <input type="text" name="direccion"
               class="w-full mt-1 border px-3 py-2 rounded" required>
    </div>

    <div>
        <label class="block font-semibold">Foto</label>
        <input type="file" name="foto">
    </div>

    <div class="flex space-x-4 pt-3">
        <button class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Guardar
        </button>

        <a href="{{ route('students.index') }}"
           class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Volver</a>
    </div>
</form>

@endsection
