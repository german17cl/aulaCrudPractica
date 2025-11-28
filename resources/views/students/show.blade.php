@extends('layouts.main')

@section('title', 'Detalle del Estudiante')

@section('content')

<h1 class="text-2xl font-bold mb-6">Detalle del Estudiante</h1>

<div class="bg-white p-6 rounded-lg shadow space-y-4">

    <div>
        <strong class="font-semibold">Nombre:</strong> {{ $student->nombre }}
    </div>

    <div>
        <strong class="font-semibold">Edad:</strong> {{ $student->edad }}
    </div>

    <div>
        <strong class="font-semibold">Teléfono:</strong> {{ $student->telefono }}
    </div>

    <div>
        <strong class="font-semibold">Dirección:</strong> {{ $student->direccion }}
    </div>

    <div>
        <strong class="font-semibold">Foto:</strong><br>
        @if($student->foto)
            <img src="{{ asset('storage/' . $student->foto) }}" class="mt-2 w-40 rounded shadow">
        @else
            <span class="text-gray-500">No hay foto</span>
        @endif
    </div>
</div>

<div class="mt-6 flex space-x-4">
    <a href="{{ route('students.index') }}"
       class="px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">Volver</a>

    <a href="{{ route('students.edit', $student->id) }}"
       class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Editar</a>
</div>

@endsection
