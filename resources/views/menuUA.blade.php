<script type="text/javascript">
function confirmar()
{
	if(confirm('Estas seguro de eliminar al usuario'))
		return true;
	else
		return false;
}
 </script>
<div class="box box-primary">

<div class="box-header">
    <h3 class="box-title">Usuarios</h3>
</div>

<div class="box-body">              

   <table class="table table-striped">      
   <thead style="color:#fff;font-size: 25px;background-color:black">
      <tr>
          <th>Id</th>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Telefono</th>
          <th colspan="2">Acción</th>
      </tr>
   </thead>      
   <tbody style="color:#000;font-size: 20px;background-color:#fff">
   @foreach($users as $Antojitos2)  
   <tr>
      <td>{{$Antojitos2->id}}</td>
      <td>{{$Antojitos2->name}}</td>
      <td>{{$Antojitos2->email}}</td>
      <td>{{$Antojitos2->Movil}}</td>
	  <td>
		  <button class="btn  btn-skin-green btn-xs" onclick="mostrarficha4({{$Antojitos2->id}});" ><i class="fa fa-fw fa-eye"></i>Ver</button>
	  <td>
		  <form  action="{{Action('UserController@destroy', $Antojitos2->id)}}" method="post">
		  @csrf 
		  <input name="_method" type="hidden"  value="DELETE"/> 
				 <button onclick="return confirmar()" class="btn btn-danger"  type="submit" style="background: red; color:#fff; border: none;">Eliminar</button>
		  </form> 
	  </td>
  </tr>
  @endforeach
  </tbody>
</table>


<!-- javascript del sistema laravel -->
   <script src="js/sistemalaravel.js"></script>