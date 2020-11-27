<header>
    <h1 class=" text-3xl font-thin ml-3 mt-2">Cursos</h1>
    <nav>
        <ul class=" grid grid-cols-4 ml-3 w-3/12">

            <li>
                <a href="{{ route('home') }}" class="block text-xl text-gray-400 mt-3 {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
            </li>
            
            <li>
                <a href="{{ route('cursos.index') }}" class="block text-xl text-gray-400 mt-3  {{ request()->routeIs('cursos.*') ? 'active' : '' }}">Cursos</a>
            </li>
            <li>
                <a href="{{ route('nosotros') }}" class="block text-xl text-gray-400 mt-3 mb-5  {{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a>
            </li>
            <li>
                <a href="{{ route('contactanos.index') }}" class="block text-xl text-gray-400 mt-3 mb-5  {{ request()->routeIs('contactanos.*') ? 'active' : '' }}">Contactanos</a>
            </li>
        </ul>
    </nav>
</header>