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
    <h3 class="box-title">Antojitos</h3>
</div>
<div class="input-group input-group-sm">
    <div class="input-group">
        <input type="text" name="q" class="form-control" id="datos">
        <span class="input-group-btn">
             <button class="btn btn-flat" type="button" onclick="valorAnt();" >Buscar!</button>
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
   @foreach($Antojitos as $Antojitos2)  
   <tr>
      <td>{{$Antojitos2->id}}</td>
      <td>{{$Antojitos2->Nombre}}</td>
      <td>{{$Antojitos2->Sabor}}</td>
      <td>{{$Antojitos2->Descripcion}}</td>
      <td>{{$Antojitos2->Precio}}</td>	
	  <td>
		  <button class="btn  btn-skin-green btn-xs" onclick="mostrarficha({{$Antojitos2->id}});" ><i class="fa fa-fw fa-eye"></i>Ver</button>
	  <td>
		  <form  action="{{Action('AntojitoController@destroy', $Antojitos2->id)}}" method="post">
		  @csrf 
		  <input name="_method" type="hidden"  value="DELETE"/> 
				 <button onclick="return confirmar()" class="btn btn-danger"  type="submit" style="background: red; color:#fff; border: none;">Eliminar</button>
		  </form> 
	  </td>
  </tr>
  @endforeach
  </tbody>
</table>
<?php
if ($dato == "") {
	echo $Antojitos->render();
}
?>


<!-- javascript del sistema laravel -->
   <script src="js/sistemalaravel.js"></script>