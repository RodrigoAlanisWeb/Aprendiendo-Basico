@extends('layout.plantilla')

@section('content')
    <h1>Todos los cursos</h1>

    <a href="{{ route('cursos.create') }}">Crear Curso</a>

    <ul>
    @foreach ($cursos as $item)
        <li>
            <a href="{{ route('cursos.show',$item->id) }}">Nombre: {{ $item->name }}</a>   
        </li>
    @endforeach
    </ul>

    {{ $cursos->links() }}
@endsection
