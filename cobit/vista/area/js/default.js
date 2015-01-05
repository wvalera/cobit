        	$(function() {
                paginar();
                             function search_area(){
				$.ajax({
					//data: "q="+q+"&fi="+fi+"&ff="+ff+"&t="+1,
					type: "POST",
					dataType: "json",
					url: URL+"area/buscar_area/"+$('#areas').val(),
						success: function(data){
							if(data.length > 0){
								var html ='';
								$.each(data, function(i,item){
									html += '<tr class="rows">\
                                    <td>'+item.id_area+'</td>\
                                    <td>'+item.nombre_area+'</td>\
                                    <td>'+item.nombre+'</td>\
                                    <td class="options">\
                                    <a class="btn" title="Editar" onclick="area_individual('+item.id_area+')" href="#"><i class="icon-pencil"></i> Editar</a><a class="btn" title="Eliminar" href="#" onclick="eliminarArea('+item.id_area+')"><i class="icon-pencil"></i> Eliminar</a></td>\
        </tr>';
								});
          console.log(html);

								$("#paginar").html(html);
								$("#tabla-areas").trigger("update");
							}
						}
				  });
			 }

			//search_factura($("#empresa").find("option:selected").val(),$("#fechai").val(),$("#fechaf").val());
                        //search_factura();

                        $("#areas").on("keyup",(function(){
				search_area();
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

function eliminarArea(id_area){
    $("#aceptarEliminar").attr("href",URL+"area/eliminar/"+id_area);
    $('#eliminarArea').modal();
}

function area_individual(area){
      $.ajax({
        type: "POST",
        dataType: "json",
        data:{id_area:area},
        url: URL+"area/buscar_area_individual",
        success: function(data){
          if(data){
            $("#index").fadeOut();
            $("#form-editar").attr("action",URL+"area/guardarEditar/"+data.id_area);
            $("#id_area").val(data.id_area);
            $("#id_pais").val(data.id_pais);
            $("#nombre_area").val(data.nombre_area);
            $("#nombre").val(data.nombre);
            $("#editar").fadeIn();
          }
        }
      });
}