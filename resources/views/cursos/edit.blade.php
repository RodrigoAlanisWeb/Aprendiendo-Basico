@extends('layout.plantilla')

@section('content')
    <h1>Edicion de el Curso Llamado: {{ $curso->name }}</h1>
    <form action="{{ route('cursos.update',$curso) }}" class="p-2" method="POST">
        @csrf

        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="name" class="border border-black" value="{{ $curso->name }}">
        </label>
        <br>
        <label>
            Description: <br>
            <textarea name="description"rows="5" class="border border-black">{{ $curso->description }}</textarea>
        </label>
        <br>
        <label>
            Categoria: <br>
            <input type="text" name="categoria" class="border border-black" value="{{ $curso->categoria }}">
        </label>
        <br>
        <input type="submit" value="Actualizar" class="mt-3 w-48">
    </form>
@endsection