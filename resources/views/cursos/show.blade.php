@extends('layout.plantilla')

@section('content')
    <h1>Curso: {{ $curso->name }}</h1>
    <p>
        {{ $curso->description }}
    </p>
    <span>
        Categoria: {{ $curso->categoria }}
    </span>
@endsection
