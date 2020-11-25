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
    <br>
    <form action="{{ route('cursos.destroy', $curso) }}" method="POST">
        @csrf
        @method('delete')
        <input type="submit" class="block bg-red-600 p-1 mt-3 w-64 text-center text-white rounded-sm" value="Eliminar">
    </form>
    
@endsection
