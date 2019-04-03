function Añadir(arg){
//funcion que carga todos los formularios del sistema

		if(arg==1){ var url = "user/create"; }
		if(arg==2){ var url = "Antojitos/create"; }
		if(arg==3){ var url = "MasComidas/create"; }
		if(arg==4){ var url = "Bebidas/create"; }
		$("#contenido_principal").html($("#cargador_empresa").html());
		   
		    $.get(url,function(resul){
		        $("#contenido_principal").html(resul);

		    })
}

function Editar(arg){
//funcion que carga todos los formularios del sistema

		if(arg){ var url = "user/"+arg+"/edit"; }
		$("#contenido_principal").html($("#cargador_empresa").html());
		   
		    $.get(url,function(resul){
		        $("#contenido_principal").html(resul);

		    })
}

function EditarCon(arg){
//funcion que carga todos los formularios del sistema

		if(arg){ var url = "user/"+arg+"/editarContraseña"; }
		$("#contenido_principal").html($("#cargador_empresa").html());
		   
		    $.get(url,function(resul){
		        $("#contenido_principal").html(resul);

		    })
}

function Mostrar(listado){
//funcion que carga todos los formularios del sistema
	
		if(listado==1){ var url = "user"; }
		if(listado==2){ var url = "Antojitos/index2"; }
		if(listado==3){ var url = "MasComidas/index2"; }
		if(listado==4){ var url = "Bebidas/index2"; }
		if(listado==5){ var url = "contactanos/index2"; }
		
		$("#contenido_principal").html($("#cargador_empresa").html());
		   
		    $.get(url,function(resul){
		        $("#contenido_principal").html(resul);

		    })
}




 $(document).on("submit","form_entrada",function(e){

//funcion para atrapar los formularios y enviar los datos

       e.preventDefault();
        
        $('html, body').animate({scrollTop: '0px'}, 200);
        
        var formu=$(this);
        var quien=$(this).attr("id");
        
        if(quien=="AntojitosNuevo"){ var varurl="Antojitos/create"; var divresul="notificacion_resul_fanu"; }
		if(quien=="AntojitoEditar"){ var varurl="Antojitos/"+id+"/edit"+" "; var divresul="notificacion_resul_fanu"; }
		if(quien=="MasComidaNuevo"){ var varurl="MasComidas/create"; var divresul="notificacion_resul_fanu"; }
		if(quien=="MasComidaEditar"){ var varurl="MasComidas/"+id+"/edit"+" "; var divresul="notificacion_resul_fanu"; }
		if(quien=="BebidasNuevo"){ var varurl="Bebidas/create"; var divresul="notificacion_resul_fanu"; }
		if(quien=="BebidasEditar"){ var varurl="Bebidas/"+id+"/edit"+" "; var divresul="notificacion_resul_fanu"; }
		if(quien=="UserNuevo"){ var varurl="user/create"; var divresul="notificacion_resul_fanu"; }
		if(quien=="UserEditar"){ var varurl="user/"+id+"/edit"+" "; var divresul="notificacion_resul_fanu"; }
		if(quien=="UserEditarContra"){ var varurl="user/"+id+"/editarContraseña"+" "; var divresul="notificacion_resul_fanu"; }
   
        $("#"+divresul+"").html($("#cargador_empresa").html());
              $.ajax({
                    type: "POST",
                    url : varurl,
                    datatype:'json',
                    data : formu.serialize(),
                    success : function(resul){

                        $("#"+divresul+"").html(resul);
						$('#'+quien+'').trigger("reset");
                    }
                });
})

$(document).on("click",".pagination li a",function(e){
//para que la pagina se cargen los elementos
 e.preventDefault();
 var url =$( this).attr("href");
 $("#contenido_principal").html($("#cargador_empresa").html());
 $.get(url,function(resul){
    $("#contenido_principal").html(resul); 
 })

})

function mostrarficha(id) {
  //funcion para mostrar y etditar la informacion del usuario

  var url = "Antojitos/"+id+"/edit"; 
  $("#contenido_principal").html($("#cargador_empresa").html());
		   
		    $.get(url,function(resul){
		        $("#contenido_principal").html(resul);

		    })
}

function mostrarficha2(id) {
  //funcion para mostrar y etditar la informacion del usuario

  var url = "MasComidas/"+id+"/edit"; 
  $("#contenido_principal").html($("#cargador_empresa").html());
		   
		    $.get(url,function(resul){
		        $("#contenido_principal").html(resul);

		    })

}

function mostrarficha3(id) {
  //funcion para mostrar y etditar la informacion del usuario
  
  var url = "Bebidas/"+id+"/edit"; 
  $("#contenido_principal").html($("#cargador_empresa").html());
		   
		    $.get(url,function(resul){
		        $("#contenido_principal").html(resul);

		    })

}
function mostrarficha4(id) {
  //funcion para mostrar y etditar la informacion del usuario

  var url = "user/"+id+"/edit"; 
  $("#contenido_principal").html($("#cargador_empresa").html());
		   
		    $.get(url,function(resul){
		        $("#contenido_principal").html(resul);

		    })
}

function mostrarficha5(id) {
  //funcion para mostrar y etditar la informacion del usuario

  var url = "user/"+id+"/editarContraseña"; 
  $("#contenido_principal").html($("#cargador_empresa").html());
		   
		    $.get(url,function(resul){
		        $("#contenido_principal").html(resul);

		    })
}

function mostrarfichaC(id) {
  //funcion para mostrar y etditar la informacion del usuario
  var url = "contactanos/"+id; 
  $("#contenido_principal").html($("#cargador_empresa").html());
		   
		    $.get(url,function(resul){
		        $("#contenido_principal").html(resul);

		    })

}

function valorAnt(){

  var dato=$("#datos").val();
  if(dato == " ")
  {
     var url="Antojitos/index2";
  }
  else
  {
     var url="Antojitos/index2/"+dato;
  }
  
  $("#contenido_principal").html($("#cargador_empresa").html());
  $.get(url,function(resul){
  $("#contenido_principal").html(resul);  
  })
  
}

function valorCom(){

  var dato=$("#datos").val();
  if(dato == " ")
  {
     var url="MasComidas/index2";
  }
  else
  {
     var url="MasComidas/index2/"+dato;
  }
  
  $("#contenido_principal").html($("#cargador_empresa").html());
  $.get(url,function(resul){
  $("#contenido_principal").html(resul);  
  })
  
}

function valorBeb(){

  var dato=$("#datos").val();
  if(dato == " ")
  {
     var url="Bebidas/index2";
  }
  else
  {
     var url="Bebidas/index2/"+dato;
  }
  
  $("#contenido_principal").html($("#cargador_empresa").html());
  $.get(url,function(resul){
  $("#contenido_principal").html(resul);  
  })
  
}

function valorC(){

  var dato=$("#datos").val();
  if(dato == " ")
  {
     var url="contactanos/index2";
  }
  else
  {
     var url="contactanos/index2/"+dato;
  }
  
  $("#contenido_principal").html($("#cargador_empresa").html());
  $.get(url,function(resul){
  $("#contenido_principal").html(resul);  
  })
  
}


$(document).on("click",".div_modal",function(e){
 //funcion para ocultar las capas modales
 $("#capa_modal").hide();
 $("#capa_para_edicion").hide();
 $("#capa_para_edicion").html("");
})


  
