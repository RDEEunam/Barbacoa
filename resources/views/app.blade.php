<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Barbacoa</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy|Bree+Serif|Candal|PT+Sans">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">

  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- =======================================================
    Theme Name: Barbacioa de la tulum
    ======================================================= -->
</head>

<!-- Back to top button -->

<body>
    <div id="app">
      <!--menu desplegable-->
      <section>
      <div class="parallax">
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
     
      </div>
      <!-- info del restauran -->
      <div class="container">
        <div class="row">
          <div class="inner text-center">
            <h1 class="logo-name">Barbacoa De La Tulum</h1>
            <h2>Nuestra mision es mantener la calidad total de nuestros productos y servicios, buscando obtener la satisfacción total del cliente las 24 horas del día</h2>
            <p>La Mejor Barbacoa De Todo Cancún!!</p>
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
            @yield('content')
            
        </main>
    </div>

    
    <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/main.js"></script>
  </body>
  </html>