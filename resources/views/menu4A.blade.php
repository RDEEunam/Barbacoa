<script type="text/javascript">
function confirmar()
{
	if(confirm('Estas seguro de eliminar la bebida'))
		return true;
	else
		return false;
}
</script>

<div class="box box-primary">

<div class="box-header">
    <h3 class="box-title">Bebidas</h3>
</div>
<div class="input-group input-group-sm">
    <div class="input-group">
        <input type="text" name="q" class="form-control" id="datos">
        <span class="input-group-btn">
             <button class="btn btn-flat" type="button" onclick="valorBeb();" >Buscar!</button>
        </span>
    </div>
</div>
<div class="box-body"> 
             
   <table class="table table-striped">      
   <thead style="color:#fff;font-size: 25px;background-color:black">
      <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Sabor</th>
          <th>Descripcion</th>
          <th>Precio</th>
          <th colspan="2">Acción</th>
      </tr>
   </thead>      
   <tbody style="color:#000;font-size: 20px;background-color:#fff">
   @foreach($Bebidas as $Bebidas2)  
   <tr>
      <td>{{$Bebidas2->id}}</td>
      <td>{{$Bebidas2->Nombre}}</td>
      <td>{{$Bebidas2->Sabor}}</td>
      <td>{{$Bebidas2->Descripcion}}</td>
      <td>{{$Bebidas2->Precio}}</td>
      <td>
		  <button class="btn  btn-skin-green btn-xs" onclick="mostrarficha3({{$Bebidas2->id}});" ><i class="fa fa-fw fa-eye"></i>Ver</button>
	  <td>
		  <form  action="{{Action('BebidaController@destroy', $Bebidas2->id)}}" method="post">
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
	echo $Bebidas->render();
}
?>

