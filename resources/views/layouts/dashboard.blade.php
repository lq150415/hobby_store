<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Punto Arte & Hobby - @yield('title')</title>
  <base href="/">
  <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
  <meta name="robots" content="all,follow">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="{{url('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="{{url('assets/vendor/font-awesome/css/font-awesome.min.css')}}">
  <!-- Google fonts - Roboto-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
  <!-- Bootstrap Select-->
  <link rel="stylesheet" href="{{url('assets/vendor/bootstrap-select/css/bootstrap-select.min.css')}}">
  <!-- owl carousel-->
  <link rel="stylesheet" href="{{url('assets/vendor/owl.carousel/assets/owl.carousel.css')}}">
  <link rel="stylesheet" href="{{url('assets/vendor/owl.carousel/assets/owl.theme.default.css')}}">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="{{url('assets/css/style.default.css')}}" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="{{url('assets/css/custom.css')}}">
  @yield('css')
  <!-- Favicon and apple touch icons-->
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="assets/img/apple-touch-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-touch-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/apple-touch-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/img/apple-touch-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/img/apple-touch-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/img/apple-touch-icon-152x152.png">
  <!-- Tweaks for older IEs--><!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  <style media="screen">
    body {
      font-family: 'Raleway', sans-serif;
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
</head>
<body>
  <div id="all">
    <!-- Top bar-->
    <div class="top-bar">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-md-6 d-md-block d-none">
            <p>¡Chatea por medio de nuestras redes sociales (Facebook o Whatsapp) en este mismo instante!</p>
          </div>
          <div class="col-md-6">
            <div class="d-flex justify-content-md-end justify-content-between">
              <ul class="list-inline contact-info d-block d-md-none">
                <li class="list-inline-item"><a href="#"><i class="fa fa-phone"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="fa fa-envelope"></i></a></li>
              </ul>
              @if (Route::has('login'))
                <div class="login">
                      @auth
                        <a class="login-btn" href="{{ url('/home') }}">
                          <i class="fa fa-columns"></i><span class="d-none d-md-inline-block">Panel de usuario</span></a>
                      @else
                        <a href="#" data-toggle="modal" data-target="#login-modal" class="login-btn">
                          <i class="fa fa-sign-in"></i><span class="d-none d-md-inline-block">Ingresar</span></a>

                      @endauth
                </div>
              @endif
              <ul class="social-custom list-inline">
                <li class="list-inline-item"><a target="_blank" href="https://m.me/1906067489475543"><i class="fa fa-facebook"></i></a></li>
                <li class="list-inline-item"><a target="_blank" href="https://api.whatsapp.com/send?phone=59160522919&text=¡Hola!%20Deseo%20mas%20información%20acerca%20de%20los%20productos."><i class="fa fa-whatsapp"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Top bar end-->
    <!-- Login Modal-->
    <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="login-modalLabel" class="modal-title">Ingresa - Punto Arte & Hobby</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form action="{{route('login')}}" method="post">
              @csrf
              <div class="form-group">
                <input  type="text" placeholder="Correo electronico" name="email" class="form-control">
              </div>
              <div class="form-group">
                <input  type="password" placeholder="Contraseña" name="password" class="form-control">
              </div>
              <p class="text-center">
                <button type="submit" class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Validar</button>
              </p>
            </form>
            <p class="text-center text-muted">¿Aún no estas registrado?</p>
            <p class="text-center text-muted"><a [routerLink]="['/register']"><strong>Registrate ahora</strong></a>! Descubre el mundo de Punto Arte y Hobby ahora!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Login modal end-->
    <!-- Register Modal-->
    <div id="register-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
      <div role="document" class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 id="login-modalLabel" class="modal-title">Ingresa - Punto Arte & Hobby</h4>
            <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
          </div>
          <div class="modal-body">
            <form action="customer-orders.html" method="post">
              <div class="form-group">
                <input id="email_modal" type="text" placeholder="Correo electronico" class="form-control">
              </div>
              <div class="form-group">
                <input id="password_modal" type="password" placeholder="Contraseña" class="form-control">
              </div>
              <p class="text-center">
                <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Validar</button>
              </p>
            </form>
            <p class="text-center text-muted">¿Aún no estas registrado?</p>
            <p class="text-center text-muted"><a [routerLink]="['/register']"><strong>Registrate ahora</strong></a>! Descubre el mundo de Punto Arte y Hobby ahora!</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Register modal end-->
    <!-- Navbar Start-->
    <header class="nav-holder make-sticky">
      <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
        <div class="container"><a href="{{route('dashboard.index')}}" class="navbar-brand home"><img src="assets/img/logo2.png" width="98px" alt="HobbyBlue - Modelismo y coleccionismo" class="d-none d-md-inline-block"><img src="assets/img/logo2.png" height="50px" alt="Universal logo" class="d-inline-block d-md-none"><span class="sr-only">Punto Arte & Hobby</span></a>
          <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
          <div id="navigation" class="navbar-collapse collapse">
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item dropdown active"><a href="javascript: void(0)" >Inicio</a>
              </li>
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Categorias<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-lg-6"><img src="assets/img/template-easy-customize.png" alt="" class="img-fluid d-none d-lg-block"></div>
                      <div class="col-lg-3 col-md-6">
                        <h5>Diecast</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="{{route('dashboard.planes')}}" class="nav-link">Aviones</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.helicopters')}}" class="nav-link">Helicopteros</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.cars')}}" class="nav-link">Automoviles</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.enginery')}}" class="nav-link">Maquinaria</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.boats')}}" class="nav-link">Barcos</a></li>
                        </ul>
                      </div>
                      <div class="col-lg-3 col-md-6">
                        <h5>Modelismo</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="{{route('dashboard.planes')}}" class="nav-link">Aviones</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.helicopters')}}" class="nav-link">Helicopteros</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.cars')}}" class="nav-link">Automoviles</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.boats')}}" class="nav-link">Barcos</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.tanks')}}" class="nav-link">Tanques</a></li>
                          <h5>Arte vintage</h5>
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="{{route('dashboard.vintage')}}" class="nav-link">Productos</a></li>
                          </ul>
                          <h5>3D Metal assembly</h5>
                          <ul class="list-unstyled">
                            <li class="nav-item"><a href="{{route('dashboard.metal')}}" class="nav-link">Productos</a></li>
                          </ul>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>

              <!-- ========== FULL WIDTH MEGAMENU ==================-->
              <li class="nav-item dropdown menu-large"><a href="#" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle">Todas las paginas <b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-6">
                        <h5>Marcas destacadas</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="#" class="nav-link">Aviones</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Automoviles</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Helicopteros</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Barcos</a></li>
                          <li class="nav-item"><a href="#" class="nav-link">Tanques</a></li>
                        </ul>
                        <h5>Categorias</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="{{route('dashboard.modelism')}}" class="nav-link">Modelismo</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.diecast')}}" class="nav-link">Diecast</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.vintage')}}" class="nav-link">Arte Vintage</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.metal')}}" class="nav-link">3D Metal Assembly</a></li>
                        </ul>
                        <h5>Ofertas</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="{{route('dashboard.offers')}}" class="nav-link">¡Paquetes y descuentos!</a></li>
                        </ul>
                      </div>

                      <div class="col-md-6 col-lg-6">
                        <h5>Tienda</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="{{route('dashboard.about_us')}}" class="nav-link">¿Quienes somos?</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.we_offer')}}" class="nav-link">¿Qué ofrecemos?</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.mission')}}" class="nav-link">Misión</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.sight')}}" class="nav-link">Visión</a></li>
                        </ul>
                        <!-- ========== FULL WIDTH MEGAMENU END ==================-
                        <h5>Pedidos y reservas</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="{{route('dashboard.order')}}" class="nav-link">Realiza tu pedido</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.whatsapp')}}" class="nav-link">Consultas al whatsapp</a></li>
                          <li class="nav-item"><a href="{{route('dashboard.cart')}}" class="nav-link">Mis productos</a></li>
                        </ul>
                      </div> -->
                      <div class="col-md-6 col-lg-6">
                        <h5>Contactos</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a target="_blank" href="https://m.me/269710593792740" class="nav-link">Messenger</a></li>
                          <li class="nav-item"><a target="_blank" href="https://api.whatsapp.com/send?phone=59160522919&text=¡Hola!%20Deseo%20mas%20información%20acerca%20de%20los%20productos." class="nav-link">Whatsapp</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- ========== FULL WIDTH MEGAMENU END ==================-->
              <!-- ========== Contact dropdown ==================-->
              <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">Contactos <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="nav-item"><a target="_blank" href="https://m.me/1906067489475543" class="nav-link">Messenger</a></li>
                  <li class="nav-item"><a target="_blank" href="https://api.whatsapp.com/send?phone=59160522919&text=¡Hola!%20Deseo%20mas%20información%20acerca%20de%20los%20productos." class="nav-link">Whatsapp</a></li>
                </ul>
              </li>
              <!-- ========== Contact dropdown end ==================-->
            </ul>
          </div>
          <div id="search" class="collapse clearfix">
            <form role="search" class="navbar-form">
              <div class="input-group">
                <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
                  <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </header>
    <!-- Navbar End-->
    @yield('content')
  </div>

</body>
<!-- Javascript files-->
<script src="{{url('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('assets/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{url('assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{url('assets/vendor/waypoints/lib/jquery.waypoints.min.js')}}"> </script>
<script src="{{url('assets/vendor/jquery.counterup/jquery.counterup.min.js')}}"> </script>
<script src="{{url('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src="{{url('assets/vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.min.js')}}"></script>
<script src="{{url('assets/js/jquery.parallax-1.1.3.js')}}"></script>
<script src="{{url('assets/vendor/bootstrap-select/js/bootstrap-select.min.js')}}"></script>
<script src="{{url('assets/vendor/jquery.scrollto/jquery.scrollTo.min.js')}}"></script>
<script src="{{url('assets/js/front.js')}}"></script>
@yield('js')
</html>
