
<head>
     
</head>

<div class="box box-primary col-xs-12">
    <div class="box-header">
        <h3 class="box-title">Editar un Usuario</h3>
    </div>
<!-- /.box-header -->
    <div id="notificacion_resul_fanu"></div>

		<!-- comienzo del formulario -->
		<form id="UserEditar" method="post" action="{{Action('UserController@update', $id)}}" enctype="multipart/form-data">
		<input name="_method" type="hidden" value="PATCH">  
		{{ csrf_field() }}
			
			<!-- seccion del nombre -->
		<div class="form-group has-feedback">
            <label>nombre</label>
            <input type="text" class="form-control" name="name" value="{{$users->name}}">
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>


           <div class="form-group has-feedback">
             <label>correo</label>
            <input type="email" class="form-control" name="email" value="{{$users->email}}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
                <label>Telefono</label>
            <input type="text" class="form-control" name="Movil" >
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
                <label>Contraseña</label>
            <input type="password" class="form-control" name="password" >
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  
		  <div class="form-group has-feedback">
                <label>Confirmar contraseña</label>
            <input type="password" class="form-control" name="password_confirmation" >
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  
		  <div class="form-group has-feedback">
                <label>Foto perfil</label>
            <input type="file" class="form-control" name="Photo" value="null.png" >
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
		  
         
          <div class="row">
             
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
            </div><!-- /.col -->
          </div>
			
		</form>
		<!-- fin del formulario -->
</div>