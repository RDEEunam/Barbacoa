<script type="text/javascript">
function confirmar()
{
	if(confirm('Estas seguro de eliminar el antojito'))
		return true;
	else
		return false;
}
</script>

<div class="box box-primary">

<div class="box-header">
    <h3 class="box-title">Mensajeria</h3>
</div>
<div class="input-group input-group-sm">
    <div class="input-group">
        <input type="text" name="q" class="form-control" id="datos">
        <span class="input-group-btn">
             <button class="btn btn-flat" type="button" onclick="valorC();" >Buscar!</button>
        </span>
    </div>
</div>
<div class="box-body">              

   <table class="table table-striped">      
   <thead style="color:#fff;font-size: 25px;background-color:black">
      <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Numero</th>
          <th>Mensaje</th>
          <th colspan="2">Acción</th>
      </tr>
   </thead>      
   <tbody style="color:#000;font-size: 20px;background-color:#fff">
   @foreach($contactanos as $contactanos2)  
   <tr>
      <td>{{$contactanos2->id}}</td>
      <td>{{$contactanos2->Nombre}}</td>
      <td>{{$contactanos2->Correo}}</td>
      <td>{{$contactanos2->Numero}}</td>
      <td>{{$contactanos2->Mensaje}}</td>	
	  <td>
		  <button class="btn  btn-skin-green btn-xs" onclick="mostrarfichaC({{$contactanos2->id}});" ><i class="fa fa-fw fa-info"></i>Ver</button>
	  <td>
		  <form  action="{{Action('ContactoController@destroy', $contactanos2->id)}}" method="post">
		  @csrf 
		  <input name="_method" type="hidden"  value="DELETE"/>
				 <button onclick="return confirmar()" class="btn btn-danger"  type="submit" style="background: red; color:#fff; border: none;"><i class="fa fa-trash"></i>Eliminar</button>
		  </form> 
	  </td>
  </tr>
  @endforeach
  </tbody>
</table>
<?php
if ($dato == "") {
	echo $contactanos->render();
}
?>
