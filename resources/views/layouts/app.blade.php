<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{url('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Styles -->
    {!! Html::style('css/app.css')!!}
    {!! Html::style('css/toast.css') !!}
    {!! Html::style('css/datatable.css') !!}
    @yield('css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-danger navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                  <i class="fa fa-cubes"> </i>  {{ config('Punto Arte & Hobby', 'Punto Arte & Hobby') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Panel Principal</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{route('product.index')}}">Productos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Ofertas</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Usuarios</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Ventas</a>
                      </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name.' '.Auth::user()->lastname.' '.Auth::user()->lastnamesec }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<!-- Scripts -->
  {!! Html::script('js/app.js')!!}
  {!! Html::script('js/jQuery.js') !!}
  {!! Html::script('select2/js/select2.min.js') !!}
  {!! Html::script('js/datatable.js') !!}
  {!! Html::script('js/toast.js') !!}
@if (session('mensaje'))
  <script type="text/javascript">
    toastr.success('{{session('mensaje')}}');
  </script>
@endif
@if (session('mensaje2'))
  <script type="text/javascript">
    toastr.warning('{{session('mensaje2')}}');
  </script>
@endif
@if (session('mensaje3'))
  <script type="text/javascript">
    toastr.error('{{session('mensaje3')}}');
  </script>
@endif
@yield('js')
</html>
