        	$(function() {
                paginar();
                             function search_id_an(){
				$.ajax({
					//data: "q="+q+"&fi="+fi+"&ff="+ff+"&t="+1,
					type: "POST",
					dataType: "json",
					url: URL+"id_an/buscar_id_an/"+$('#id_ans').val(),
						success: function(data){
							if(data.length > 0){
								var html ='';
								$.each(data, function(i,item){
									html += '<tr class="rows">\
                                    <td>'+item.id_id_an+'</td>\
                                    <td>'+item.nombre_id_an+'</td>\
                                    <td>'+item.nombre+'</td>\
                                    <td class="options">\
                                    <a class="btn" title="Editar" onclick="id_an_individual('+item.id_id_an+')" href="#"><i class="icon-pencil"></i> Editar</a><a class="btn" title="Eliminar" href="#" onclick="eliminarid_an('+item.id_id_an+')"><i class="icon-pencil"></i> Eliminar</a></td>\
        </tr>';
								});
          console.log(html);

								$("#paginar").html(html);
								$("#tabla-id_ans").trigger("update");
							}
						}
				  });
			 }

			//search_factura($("#empresa").find("option:selected").val(),$("#fechai").val(),$("#fechaf").val());
                        //search_factura();

                        $("#id_ans").on("keyup",(function(){
				search_id_an();
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


            $(".form_datetime").datetimepicker({
            format: "dd MM yyyy - hh:ii"
            });

			});

function eliminarAnalista(id_an){
    $("#aceptarEliminar").attr("href",URL+"id_an/eliminar/"+id_an);
    $('#eliminaranalista').modal();
}

function buscar_analista_individual(id_an){
      $.ajax({
        type: "POST",
        dataType: "json",
        data:{id_an:id_an},
        url: URL+"id_an/buscar_analista_individual",
        success: function(data){
          if(data){
            $("#index").fadeOut();
            $("#form-editar").attr("action",URL+"id_an/guardarEditar/"+data.id_id_an);
            $("#id_id_an").val(data.id_id_an);
            //$("#id_pais").val(data.id_pais);
            $("#nombre_id_an").val(data.nombre_id_an);
            $("#nombre").val(data.nombre);
            $("#editar").fadeIn();
          }
        }
      });
}


