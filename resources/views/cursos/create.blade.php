@extends('layout.plantilla')

@section('content')
    <h1 class="text-2xl mb-3 font-thin">Aqui podras crear el curso</h1>
    <form action="{{ route('cursos.store') }}" class="p-2" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" class="border border-black w-48 p-2" value="{{ old('name') }}">
        </label>

        @error('name')
            <div class=" bg-red-700 w-64 p-2 font-light text-white mt-2 -mb-5 capitalize">
                {{ $message }}
            </div>
        @enderror

        <br>
        <label>
            Description: <br>
            <textarea name="description"rows="5" class="border border-black w-48 p-2">{{ old('description') }}</textarea>
        </label>
        @error('description')
            <div class=" bg-red-700 w-64 p-2 font-light text-white mt-2 -mb-5 capitalize">
                {{ $message }}
            </div>
        @enderror
        <br>
        <label>
            Categoria: <br>
            <input type="text" name="categoria" class="border border-black w-48 p-2" value="{{ old('categoria') }}">
        </label>
        @error('categoria')
            <div class=" bg-red-700 w-64 p-2 font-light text-white mt-2 -mb-5 capitalize">
                {{ $message }}
            </div>
        @enderror
        <br>
        <input type="submit" value="Enviar" class="w-48 mt-5">
    </form>
@endsection