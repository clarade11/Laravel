@extends('home')

@section('title', 'Crear Prestamo')

@section('content')

<form action="{{ route('addPrestamo') }}" method="POST">
    @csrf
    <label for="">Usuario</label>
    <input type="text" name="user_id">
    <label for="">Book</label>
    <input type="text" name="book_id">
    <label for="">Fecha prestamo</label>
    <input type="date" name="fecha_prestamo">
    <label for="">Devuelto</label>
    <input type="text" name="devuelto">
    <label for="">Fecha devolucion</label>
    <input type="date" name="fecha_devolucion">

    <button type="submit">Guardar prestamo</button>

</form>
@endsection
