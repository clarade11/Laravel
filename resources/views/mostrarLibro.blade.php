@extends('home')

@section('title', 'Mostrar Libro')
@endsection
@section('content')
    @if(count($libros)>0)
        @foreach ($libros as $libro)
        <a href="/verLibro/{{$libro}}">
            <p>{{$libro->titulo}} {{$libro->autor}}</p>
        </a>
        @endforeach
    @else
@endsection
