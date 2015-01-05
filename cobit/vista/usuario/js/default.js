        	$(function() {
                paginar();
                             function search_usuario(){
				$.ajax({
					//data: "q="+q+"&fi="+fi+"&ff="+ff+"&t="+1,
					type: "POST",
					dataType: "json",
					url: URL+"usuario/buscar_usuarios/"+$('#usuarios').val(),
						success: function(data){
							if(data.length > 0){
								var html ='';
								$.each(data, function(i,item){
						  html += '<tr class="rows">\
                                        <td>'+item.id+'</td>\
                                        <td>'+item.nombre+'</td>\
                                        <td>'+item.apellido+'</td>\
                                        <td>'+item.login+'</td>\
                                        <td>'+item.rol+'</td>\
                                        <td class="options">\
                                        <a class="btn" title="Editar" onclick="usuario_individual('+item.id+')" href="#"><i class="icon-pencil"></i> Editar</a><a class="btn" title="Eliminar" href="#" onclick="eliminarUsuario('+item.id+')"><i class="icon-pencil"></i> Eliminar</a></td>\
                                    </tr>';
								});
                                console.log(html);

								$("#paginar").html(html);
								$("#tabla-usuarios").trigger("update");
							}
						}
				  });
			 }

			//search_factura($("#empresa").find("option:selected").val(),$("#fechai").val(),$("#fechaf").val());
                        //search_factura();

                        $("#usuarios").on("keyup",(function(){
				search_usuario();
			}));


            function paginar(){
              $("#paginacion").jPages({
                containerID: "paginar",
                perPage:5,
                previous: "Anterior",
                next: "Siguiente"
              });            
            }

            $("#atras").on("click",function(){
                $("#editar").fadeOut();
                $("#index").fadeIn();
            });

			});

function eliminarUsuario(id){
    $("#aceptarEliminar").attr("href",URL+"usuario/eliminar/"+id);
    $('#eliminarUsuario').modal();
}

function usuario_individual(usuario){
      $.ajax({
        type: "POST",
        dataType: "json",
        data:{id:usuario},
        url: URL+"usuario/buscar_usuario_individual",
        success: function(data){
          if(data){
            $("#index").fadeOut();
            $("#form-editar").attr("action",URL+"usuario/guardarEditar/"+data.id);
            $("#nombre").val(data.nombre);
            $("#apellido").val(data.apellido);
            $("#login").val(data.login);
            $("#rol").val(data.rol);
            $("#editar").fadeIn();
          }
        }
      });
}