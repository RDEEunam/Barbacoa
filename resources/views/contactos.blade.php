@extends('app2')

@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Elite Contact Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">

	<link href="css/font-awesomeC.css" rel="stylesheet">
	<link href="css/styleC.css" rel='stylesheet' type='text/css' />


</head>

<!-- Funcion para invalidar las letras en la seleccion del numero -->
<script>
onload = function(){ 
  var ele = document.querySelectorAll('.validanumericos')[0];
  ele.onkeypress = function(e) {
     if(isNaN(this.value+String.fromCharCode(e.charCode)))
        return false;
  }
  ele.onpaste = function(e){
     e.preventDefault();
  }
}
</script>
	

<body>
	<h1>Contactanos Para Tus Eventos </h1>
	
	<!-- Mensaje de envio correcto-->
	<div class="col">
	    @if (Session::has('success'))
            <h1 style="color:#fff">{{ \Session::get('success') }}</h2> 
        @endif 
	</div>
	<div class="w3ls-contact">
		<!-- comienzo del formulario -->
		<form method="post" action="{{url('contactanos')}}" enctype="multipart/form-data">
		{{ csrf_field() }}
			
			<!-- seccion del nombre -->
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Nombre :</label>
				<input type="text" name="Nombre" placeholder=" " required="" />
			</div>
			<!-- seccion de correo -->
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-envelope" aria-hidden="true"></i> Correo Electronico :</label>
				<input type="email" name="Correo" placeholder=" " required="" />
			</div>
			<!-- seccion numero de telefono -->
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-laptop" aria-hidden="true"></i>Numero Telefonico :</label>
				<input type="text" name="Numero" class="validanumericos" autocomplete="off" placeholder=" " required=""/>
			</div>
			<!-- seccion de mensaje-->
			<div class="agile-field-txt">
				<label>
					<i class="fa fa-pencil" aria-hidden="true"></i>Mensaje :</label>
				<textarea name="Mensaje" placeholder=" " required=""></textarea>
			</div>
			<div class="w3ls-contact  w3l-sub">
				<input type="submit" value="Enviar">
			</div>
			
		</form>
		<!-- fin del formulario -->
	</div>

	@endsection