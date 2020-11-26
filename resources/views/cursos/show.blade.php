@extends('layout.plantilla')

@section('content')
    <h1 class="text-2xl mb-3 font-thin">Curso: {{ $curso->name }}</h1>
    <a href="{{ route('cursos.edit',$curso) }}" class="block font-thin text-xl mb-3 mt-3 bg-green-500 p-2 w-64 text-center text-white">Editar Curso</a>
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
        <input type="submit" class="block font-thin text-xl mb-3 mt-3 bg-red-500 p-2 w-64 text-center text-white hover:cursor-pointer" value="Eliminar">
    </form>
    
@endsection
