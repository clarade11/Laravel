@extends('home')

@section('title', 'Detalle Prestamo')
@endsection
@section('content')
            <p>{{$prestamo->book_id}}</p>
            <p>{{$prestamo->user_id}}</p>
            <p>{{$prestamo->fecha_prestamo}}</p>

            <p>{{$prestamo->devuelto}}</p>

            <p>{{$prestamo->fecha_devolucion}}</p>
        @endforeach
    @else
@endsection
