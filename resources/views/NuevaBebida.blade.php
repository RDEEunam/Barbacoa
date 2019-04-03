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
        <h3 class="box-title">Agrega una Bebida</h3>
    </div>
<!-- /.box-header -->
    <div id="notificacion_resul_fanu"></div>

		<!-- comienzo del formulario -->
		<form id="BebidasNuevo" method="post" action="{{url('Bebidas')}}" enctype="multipart/form-data" >
		{{ csrf_field() }}
			
			<!-- seccion del nombre -->
		<div class="box-body col-xs-12">
			<div class="form-group col-xs-6">
				<label><i class="fa fa-user" aria-hidden="true"></i> Nombre :</label>
				    <select id="sel" name="Nombre" class="form-control">
                        <option value="Cerveza">Cerveza</option>
                        <option value="Michelada">Michelada</option>
                        <option value="Bebida">Bebida</option>
                        <option value="Otros">Otros</option>
					</select>	
			</div>
			
			<!-- seccion de correo -->
			<div class="form-group col-xs-6">
				<label>
					<i class="fa fa-envelope" aria-hidden="true"></i> Sabor:</label>
				    <select id="sel2" name="Sabor" class="form-control">
                        <option value="Corona">Corona</option>
                        <option value="Victoria">Victoria</option>
                        <option value="Modelo especial">Modelo especial</option>
                        <option value="Negra modelo">Negra modelo</option>
                        <option value="Chamoy">Chamoy</option>
                        <option value="Tamarindo">Tamarindo</option>
						<option value="Mango">Mango</option>
                        <option value="Maracuya o piña">Maracuya o piña</option>
                        <option value="Aguas frescas">Aguas frescas</option>
                        <option value="Refrescos">Refrescos</option>
                        <option value="Agua">Agua</option>
                        <option value="Clamato Natural">Clamato Natural</option>
                        <option value="Sangria">Sangria</option>
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