@extends('layout.plantilla')

@section('content')
    <h1>Aqui podras crear el curso</h1>
    <form action="{{ route('cursos.store') }}" class="p-2" method="POST">
        @csrf
        <label>
            Nombre:
            <br>
            <input type="text" name="name" class="border border-black">
        </label>
        <br>
        <label>
            Description: <br>
            <textarea name="description"rows="5" class="border border-black"></textarea>
        </label>
        <br>
        <label>
            Categoria: <br>
            <input type="text" name="categoria" class="border border-black">
        </label>
        <br>
        <input type="submit" value="Enviar" >
    </form>
@endsection