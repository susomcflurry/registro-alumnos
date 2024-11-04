@extends('layout')

@section('title', 'Registrar Alumno')

@section('content')
    <h1>Registro de Alumnos</h1>
    <form action="{{ route('alumnos.store') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="telefono">Teléfono:</label>
        <input type="text" id="telefono" name="telefono" required>
        <br><br>
        <button type="submit">Guardar</button>
    </form>
@endsection
