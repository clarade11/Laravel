@extends('home')
@section('title', 'Lista de autores')
    @livewire('component', ['user' => $user], key($user->id))

@section('content')
<livewire:autores/>
@endsection
