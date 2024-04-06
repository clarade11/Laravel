@extends('home')

@section('title', 'Mostrar Prestamos')
@endsection
@section('content')
    @if(count($prestamos)>0)
        @foreach ($prestamos as $prestamo)
        <a href="/verPrestamo/{{$prestamo}}">
            <p>{{$prestamo->book_id}} {{$prestamos->fecha_prestamo}}</p>
        </a>
        @endforeach
    @else
@endsection
