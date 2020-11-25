@extends('layout.plantilla')

@section('content')
    <h1>Curso: {{ $curso->name }}</h1>
    <a href="{{ route('cursos.index') }}">Volver a Cursos</a><br>
    <a href="{{ route('cursos.edit',$curso) }}">Editar Curso</a>
    <p>
        {{ $curso->description }}
    </p>
    <span>
        Categoria: {{ $curso->categoria }}
    </span>
@endsection
