@extends('layout.plantilla')

@section('content')
    <h1>Edicion de el Curso Llamado: {{ $curso->name }}</h1>
    <form action="{{ route('cursos.update',$curso) }}" class="p-2" method="POST">
        @csrf

        @method('put')
        <label>
            Nombre:
            <br>
            <input type="text" name="name" class="border border-black w-48 p-2" value="{{ old('name',$curso->name) }}">
        </label>
        @error('name')
            <div class=" bg-red-700 w-64 p-2 font-light text-white mt-2 -mb-5 capitalize">
                {{ $message }}
            </div>
        @enderror
        <br>
        <label>
            Description: <br>
            <textarea name="description"rows="5" class="border border-black w-48 p-2">{{ old('description',$curso->description) }}</textarea>
        </label>
        @error('description')
            <div class=" bg-red-700 w-64 p-2 font-light text-white mt-2 -mb-5 capitalize">
                {{ $message }}
            </div>
        @enderror
        <br>
        <label>
            Categoria: <br>
            <input type="text" name="categoria" class="border border-black w-48 p-2" value="{{ old('categoria',$curso->categoria) }}">
        </label>
        @error('categoria')
            <div class=" bg-red-700 w-64 p-2 font-light text-white mt-2 -mb-5 capitalize">
                {{ $message }}
            </div>
        @enderror
        <br>
        <input type="submit" value="Actualizar" class="mt-3 w-48">
    </form>
@endsection