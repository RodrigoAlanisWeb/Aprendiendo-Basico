@extends('layout.plantilla')

@section('content')
    <h1>Todos los cursos</h1>

    <a href="{{ route('create') }}">Crear Curso</a>

    <ul>
    @foreach ($cursos as $item)
        <li>
            <a href="{{ route('show',$item->id) }}">Nombre: {{ $item->name }}</a>   
        </li>
    @endforeach
    </ul>

    {{ $cursos->links() }}
@endsection
