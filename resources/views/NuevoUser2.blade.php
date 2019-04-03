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

<head>
        <script type="text/javascript">
        function add(){
        var text = document.getElementById("text");
        var sel = document.getElementById("sel");
        
        var opt = document.createElement("option");
        
        opt.appendChild(document.createTextNode(text.value));
        opt.setAttribute("value", text.value);
        
        sel.appendChild(opt);
        }
		function add2(){
        var text = document.getElementById("text");
        var sel = document.getElementById("sel2");
        
        var opt = document.createElement("option");
        
        opt.appendChild(document.createTextNode(text.value));
        opt.setAttribute("value", text.value);
        
        sel.appendChild(opt);
        }
        </script>
</head>

<div class="box box-primary col-xs-12">
    <div class="box-header">
        <h3 class="box-title">Agrega un Usuario</h3>
    </div>
<!-- /.box-header -->
    <div id="notificacion_resul_fanu"></div>

		<!-- comienzo del formulario -->
		<form id="UserNuevo" method="post" action="{{url('user')}}" enctype="multipart/form-data" >
		{{ csrf_field() }}
			
			<!-- seccion del nombre -->
		<div class="form-group has-feedback">
            <label>nombre</label>
            <input type="text" class="form-control" name="name" >
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>


           <div class="form-group has-feedback">
             <label>correo</label>
            <input type="email" class="form-control" name="email" >
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
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


         
          <div class="row">
            

            
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
            </div><!-- /.col -->
          </div>
			
		</form>
		<!-- fin del formulario -->
</div>