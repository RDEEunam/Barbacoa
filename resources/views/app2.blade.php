<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Barbacoa</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <!-- =======================================================
    Theme Name: Barbacioa de la tulum
  ======================================================= -->
</head>

<body>
    <div id="app">
      <!--menu desplegable-->
      <section id="banner">
      <div class="bg-color">
      <header id="header">
        <div class="container">
          <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            @guest
                <a class="nav-link" href="{{ route('login') }}">Iniciar sesión</a>
                @else
                    <a class="dropdown-item" href="/home">Administrador</a>
            @endguest
            <a href="/">Inicio</a>
            <a href="/menu">Menú</a>
            <a href="/paquetes">Paquetes</a>
            <a href="/contactos">Contactos</a>

            <!-- whatsapp -->
            <div class="social-links">
              <a target="_blank" href="https://es-la.facebook.com/choperiacancun/" class="facebook"><i class="fa fa-facebook"></i></a>
              <a target="_blank" href=https://web.whatsapp.com/send?phone=9841561788&amp;text= class="whatsapp" aria-hidden="true"><i class="fa fa-whatsapp"></i></a>
            </div>
</div>
          <!-- boton para abrir el menu -->
          <span onclick="openNav()" class="pull-right menu-icon">☰</span>
        </div>
      </header>
      <div class="container">
        <div class="row">
          <div class="inner text-center">
           @yield('content')
          </div>
        </div>
      </div>
      </div>
      </section>
            <!-- / banner -->
  
          <main class="py-4">
            @if(session('info'))
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-md-offser-2">
                        <div class="alert alert-success">
                            {{ session('info') }}
                        </div>
                        
                    </div>
                </div>
            </div>
            @endif
            
            
        </main>
    </div>
    
  <script src="{{ asset('js/jquery.min.js') }}"></script>
  <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>

  </body>
  </html>