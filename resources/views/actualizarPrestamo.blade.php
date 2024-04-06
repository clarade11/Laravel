@extends('home')

@section('title', 'Actualizar Prestamo')

@section('content')

<form action="{{ route('actualizarPrestamo') }}" method="POST">
    @csrf
    <label for="">Usuario</label>
    <input type="text" name="user_id">
    <label for="">Book</label>
    <input type="text" name="book_id">
    <label for="">Fecha Prestamo</label>
    <input type="date" name="fecha_prestamo">
    <label for="">Devuelto</label>
    <input type="text" name="devuelto">
    <label for="">fecha devolucion</label>
    <input type="date" name="fecha_devolucion">

    <button type="submit">Actualizar libro</button>

</form>
@endsection
