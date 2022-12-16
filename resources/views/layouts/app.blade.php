<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Comedores Universitarios') }}</title>
    @vite(['resources/js/app.js'])
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://use.fontawesome.com/releases/v6.2.0/css/all.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/image/logo-voluntariado.png" height="40"
                        alt="Logo" loading="lazy" />
                </a>
                
            </div>

            <!-- Right elements -->
            <div class="d-flex align-items-center">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto"></ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Acceder') }}</a>
                                </li>
                            @endif
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                                </li>
                            @endif
                        @else
                            @if(Auth::user()->hasRole('Admin'))
                                <li><a class="nav-link" href="{{ route('products.index') }}">Productos</a></li>
                                <li><a class="nav-link" href="/construccion">Ingresos</a></li>
                                <li><a class="nav-link" href="{{ route('egresos.index') }}">Egresos</a></li>
                                <li><a class="nav-link" href="/construccion">Reportes</a></li>
                                <li><a class="nav-link" href="/construccion">Becados</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Administración
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <li><a class="nav-link" href="{{ route('users.index') }}">Usuarios</a></li>
                                        <li><a class="nav-link" href="{{ route('roles.index') }}">Roles</a></li>
                                    </ul>
                            @endif
                            @if(Auth::user()->hasRole('chef'))
                                <li><a class="nav-link" href="{{ route('products.index') }}">Productos</a></li>
                            @endif
                            @if(Auth::user()->hasRole('moderador'))
                            <li><a class="nav-link" href="{{ route('roles.index') }}">Roles</a></li>

                            @endif

                            
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->roles->pluck('name')->implode(' ') }}: {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Salir') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>

        </div>

    </nav>
    <main class="py-4">
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>

</html>
