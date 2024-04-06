@extends('home')

@section('title', 'Detalle Libro')
@endsection
@section('content')
            <p>{{$libro->titulo}}</p>
            <p>{{$libro->autor}}</p>
            <p>{{$libro->genero}}</p>
        @endforeach
    @else
@endsection
