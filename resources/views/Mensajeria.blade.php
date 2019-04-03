
  <!-- platillos del restauran -->


<section id="menu-list" class="section-padding"> 
@foreach($contactanos as $productos)
<div class="container">
        <div class="form-group col-md-6 ">			
			<div class="form-group text-center col">
			        <div class="form-group col" style="color:#fff; background-color: black;">
			             <h1>{{$productos->id}}</h1>
		            </div>
			        <div class="form-group col"style="background-color: #fff;">
		                 <div class="form-groupb col">
                              <label style="color:red;">Nombre:</label><br>					 
                              <h3 style="color:red;">{{$productos->Nombre}}</h3><br>
                         </div>
		                 <div class="form-grup">
						      <label style="color:#000;">Correo:</label><br>
							  <h4 style="color:#000;">{{$productos->Correo}}</h4><br>
		                      <label style="color:#000;">Numero:</label><br>
							  <h4 style="color:#000;">{{$productos->Numero}}</h4><br>
		                      <label style="color:#000;">Mensaje:</label><br>
		                      <h4 style="color:#000;">{{$productos->Mensaje}}</h4>
                         </div>
				   </div>						
			</div>
        </div>
</div>
@endforeach
</section>
