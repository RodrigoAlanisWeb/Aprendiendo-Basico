@extends('layout.plantilla')

@section('content')
    <h1 class="text-2xl mb-3 font-thin">Dejanos Un Mensaje</h1>

    <form action="{{ route('contactanos.store') }}" class=" w-2/5 shadow p-5 mt-5" method="POST">
        @if (session('Info'))
        <div class=" bg-green-600 p-2 font-light text-white mb-5 capitalize w-full text-center">
            <?=session('Info')?>
        </div>
        @endif
        @csrf
        <label for="" class="block w-full text-xl">
            Nombre:
            <input type="text" name="name" class=" border-b-2 border-gray-300 w-full p-1 rounded-sm mt-2 mb-2 text-xs">
        </label>

        @error('name')
            <div class=" bg-red-700 p-2 font-light text-white mb-5 capitalize w-full text-center">
                {{ $message }}
            </div>
        @enderror

        <label for="" class="block w-full text-xl">
            Correo:
            <input type="text" name="email" class=" border-b-2 border-gray-300 w-full p-1 rounded-sm mt-2 mb-2 text-xs">
        </label>

        @error('email')
            <div class=" bg-red-700 p-2 font-light text-white mb-5 capitalize w-full text-center">
                {{ $message }}
            </div>
        @enderror

        <label for="" class="block w-full text-xl">
            Mensaje:
            <textarea name="mensaje" id="" class=" border-b-2 border-gray-300 w-full p-1 rounded-sm mt-2 mb-2 text-xs"></textarea>
        </label>

        @error('mensaje')
            <div class=" bg-red-700 p-2 font-light text-white mb-5 capitalize w-full text-center">
                {{ $message }}
            </div>
        @enderror

        <button type="submit" class=" shadow-md p-2 w-full">Enviar</button>

    </form>
@endsection
