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
        <h3 class="box-title">Agrega una comida</h3>
    </div>
<!-- /.box-header -->
    <div id="notificacion_resul_fanu"></div>

		<!-- comienzo del formulario -->
		<form id="MasComidaNuevo" method="post" action="{{url('MasComidas')}}" enctype="multipart/form-data" >
		{{ csrf_field() }}
			
			<!-- seccion del nombre -->
		<div class="box-body col-xs-12">
			<div class="form-group col-xs-6">
				<label>
					<i class="fa fa-user" aria-hidden="true"></i> Nombre :</label>
				    <select id="sel" name="Nombre" class="form-control">
                        <option value="Costra">Costra</option>
                        <option value="Queso">Queso</option>
                        <option value="Nacho">Nacho</option>
                        <option value="Desayuno">Desayuno</option>
					</select>
			</div>
			
			<!-- seccion de correo -->
			<div class="form-group col-xs-6">
				<label>
					<i class="fa fa-envelope" aria-hidden="true"></i> Sabor:</label>
				    <select id="sel2" name="Sabor" class="form-control">
                        <option value="Natural">Natural</option>
                        <option value="Barbacoa">Barbacoa</option>
                        <option value="Cochinita">Cochinita</option>
                        <option value="Fundido">Fundido</option>
                        <option value="Champiñones">Champiñones</option>
                        <option value="Picadillo">Picadillo</option>
						<option value="Rajas">Rajas</option>
                        <option value="Nopales">Nopales</option>
                        <option value="Chicharon">Chicharon</option>
                        <option value="Pastor">Pastor</option>
                        <option value="Arrachera">Arrachera</option>
                        <option value="Chorizo">Chorizo</option>
                        <option value="Burritos">Burritos</option>
						<option value="Omelettes">Omelettes</option>
					</select>
			</div>
			<!-- seccion numero de telefono -->
			<div class="form-group col-xs-12">
				<label>
					<i class="fa fa-laptop" aria-hidden="true"></i>Descripcion:</label>
				    <textarea class="form-group col-xs-12" type="text" name="Descripcion" placeholder=" " required=""/></textarea>
			</div>
			<!-- seccion de mensaje-->
			<div class="form-group col-xs-6">
				<label>
					<i class="fa fa-pencil" aria-hidden="true"></i>Precio:</label>
				    <input class="form-group col-xs-12" type="text" name="Precio" class="validanumericos" autocomplete="off" placeholder=" " required=""/>
			</div>
			<div class="form-group col-xs-6"> 
			    <label>
					<i class="fa fa-file" aria-hidden="true"></i>Foto:</label>
                    <input type="file" name="Foto" value="null.jpg">
            </div>
			<div class="form-group col-xs-12">
				<input type="submit" value="Enviar">
			</div>
		</div>
			
		</form>
		<!-- fin del formulario -->
</div>