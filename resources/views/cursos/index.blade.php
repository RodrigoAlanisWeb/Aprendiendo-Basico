@extends('layout.plantilla')

@section('content')
    <h1 class="text-2xl mb-3 font-thin">Todos los cursos</h1>

    <a href="{{ route('cursos.create') }}" class="block font-thin text-xl mb-3 bg-green-500 p-2 w-64 text-center text-white">Crear Curso</a>

    <ul>
    @foreach ($cursos as $item)
        <li>
            <a href="{{ route('cursos.show',$item->slug) }}" class="block mb-1 text-lg">Nombre: {{ $item->name }}</a>   
        </li>
    @endforeach
    </ul>

    {{ $cursos->links() }}
@endsection
