<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Mickel Loza') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<style>
    #img{

        background-image: url("https://d6scj24zvfbbo.cloudfront.net/710e1df8432290b7021c40a519d02eae/200000017-db315dc288/fondo%20real.jpg?ph=fb2e822fdb");
    }
</style>

<body class="" id="img">
<nav class="" style="background:#0f0f0f">


    
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background: #E5E5E5">
            <div class="container" >
                <a class="navbar-brand text-dark" href="{{ url('/') }}">
                  <img src="https://hiraoka.com.pe/media/mageplaza/blog/post/q/u/qu_es_una_tarjeta_gr_fica_y_como_funciona.jpg" width="75">
      𝙑𝙚𝙣𝙩𝙖 𝙙𝙚 𝙘𝙤𝙢𝙥𝙤𝙣𝙚𝙣𝙩𝙚𝙨 𝙞𝙣𝙛𝙤𝙧𝙢𝙖́𝙩𝙞𝙘𝙤𝙨
                </a>

                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
  <div  class="collapse navbar-collapse" style="margin-left: 30%; ">
    <div class="navbar-nav">

     @guest
     @else
    
       <a class="btn btn-dark text-white" href="{{route('usuarios')}}">Usuarios</a> &nbsp

      <a class="btn btn-dark text-white" href="{{route('clientes')}}">Clientes</a> &nbsp

      <a class=" btn btn-dark text-white" href="{{route('componentes')}}">Componentes</a> &nbsp

     <a class="btn btn-dark text-white" href="{{route('ventas')}}">Ventas</a> &nbsp

      <a class="btn btn-dark text-white" href="{{route('facturas.index')}}">Facturas</a> &nbsp

    
    
     @endguest

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
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
          </div>
      </nav>
  </div>

          </nav>

        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    
</body>
</html>
