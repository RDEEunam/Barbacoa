@extends('errors::layout')

@section('title','403')
   <!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Muli:400" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Passion+One" rel="stylesheet">

	<!-- Font Awesome Icon -->
	<link type="text/css" rel="stylesheet" href="css/font-awesome2.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style2.css" />

    <body>
      <div id="notfound">
        <div class="notfound-bg"></div>
        <div class="notfound">
          <div class="notfound-404">
            <h1>404</h1>
          </div>
          <h2>Lo Sentimos, Página no encontrada</h2>
          <div class="notfound-social">
				<a href="/">Inicio</a>
				<a href="/menu">Menú</i></a>
				<a href="/paquetes">Paquetes</a>				
			</div>
			<div class="notfound-social">
				<a href="/contactos">Contactos</i></a>
			</div>		
          <a href="/">VOLVER A LA PÁGINA DE INICIO</a>
        </div>
      </div>
</body>