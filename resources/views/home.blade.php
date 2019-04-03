<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema Administrador Barbacoa</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

    <link rel="stylesheet" href="css/sistemalaravel.css">
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href=" " class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>B</b>T</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Barbacoa</b>Tulum</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">         
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="img/usuarios/{{ Auth::user()->Photo }}" class="user-image" alt="User Image">
                  <span class="hidden-xs">{{ Auth::user()->name }}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="img/usuarios/{{ Auth::user()->Photo }}" class="img-circle" alt="User Image">
                    <p>
                     {{ Auth::user()->name }}
                      <small>{{ Auth::user()->created_at }}</small>
                    </p>
                  </li>
              
                  <!-- Menu Footer-->
                  <li class="user-footer">
				    <div class="pull-left">
                        <a style="color:#000;" class="dropdown-item" href="/">Inicio</a>
                    </div>
                    <div class="pull-right">
					  
					  <a style="color:#000;" class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        cerrar sesion </a>
					  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                             @csrf
                      </form>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="img/usuarios/{{ Auth::user()->Photo }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Usuario: {{ Auth::user()->name }}</p>
              <a href=""><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENÚ</li>
			@if(Auth::user()->hasRole('admin'))
			<li class="active treeview">
              <a href="#">
                <i class="fa fa-envelope"></i> <span>Usuarios</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
			    <li class="active"><a href="javascript:void(0);" onclick="Añadir(1);"><i class="fa fa-file"></i>Agregar</a></li>
                <li class="active"><a href="javascript:void(0);" onclick="Mostrar(1);"><i class="fa fa-table"></i>Lista</a></li>
			  </ul>
            </li>
			@endif
			<li class="active treeview">
              <a href="#">
                <i class="fa fa-envelope"></i> <span>Perfil</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
			    <li class="active"><a href="javascript:void(0);" onclick="Editar({{ Auth::user()->id }})"><i class="fa fa-file"></i>Editar</a></li>
			  </ul>
            </li>
            <li class="active treeview">
              <a href="#">
                <i class="fa fa-apple"></i> <span>Antojitos</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="javascript:void(0);" onclick="Añadir(2);"><i class="fa fa-file"></i>Agregar</a></li>
                <li class="active"><a href="javascript:void(0);" onclick="Mostrar(2);"><i class="fa fa-table"></i>Lista</a></li>
			  </ul>
            </li>
			<li class="active treeview">
              <a href="#">
                <i class="fa fa-apple"></i> <span>Especialidades</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="javascript:void(0);" onclick="Añadir(3);"><i class="fa fa-file"></i>Agregar</a></li>
                <li class="active"><a href="javascript:void(0);" onclick="Mostrar(3);"><i class="fa fa-table"></i>Lista</a></li>
			  </ul>
            </li>
			<li class="active treeview">
              <a href="#">
                <i class="fa  fa-coffee"></i> <span>Bebidas</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="javascript:void(0);" onclick="Añadir(4);"><i class="fa  fa-file"></i>Agregar</a></li>
                <li class="active"><a href="javascript:void(0);" onclick="Mostrar(4);"><i class="fa fa-table"></i>Lista</a></li>
			  </ul>
            </li>
			<li class="active treeview">
              <a href="#">
                <i class="fa fa-envelope"></i> <span>Mensajeria</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li class="active"><a href="javascript:void(0);" onclick="Mostrar(5);"><i class="fa fa-table"></i>Lista</a></li>
			  </ul>
            </li>
          </ul>
          
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" style="min-height:2000px !important;">
        <!-- Content Header (Page header) -->
        <section class="content-header"> 
          <h1>
            Escritorio
            <small>Control panel</small>
          </h1>
      <!--<ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Inicio</a></li>
            <li class="active">cargador_empresa</li>
          </ol>-->
        </section>

        <!-- contenido principal -->
        <section class="content"  id="contenido_principal">        	   
        </section>
    
      <!-- cargador empresa -->
        <div style="display: none;" id="cargador_empresa" align="center">
            <br>        

         <label style="color:#FFF; background-color:#ABB6BA; text-align:center">&nbsp;&nbsp;&nbsp;Espere... &nbsp;&nbsp;&nbsp;</label>

         <img src="img/cargando.gif" align="middle" alt="cargador"> &nbsp;<label style="color:#ABB6BA">Realizando tarea solicitada ...</label>

          <br>
         <hr style="color:#003" width="50%">
         <br>
       </div>
      </div><!-- /.content-wrapper -->
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script>  $("#content-wrapper").css("min-height","2000px"); </script>
   
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>	 
    <!-- javascript del sistema laravel -->
    <script src="js/sistemalaravel.js"></script>

	


  </body>
</html>
