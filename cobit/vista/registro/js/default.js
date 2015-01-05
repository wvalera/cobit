$(document).ready(function(){
    paginar();  
    //cargar_combos();

        $("#pais").change(function(){
        //obtener el valor de lo que esta seleccionado
        var id = $("#pais").find(':selected').val();
        
        //limpiar areas
        $("#area").empty();

            $.ajax({
               type:"POST",
               dataType:"json",
               url:"http://localhost/cobit/registro/cargarAreas/"+id,
                success:function(data){
                     $("#area").append("<option value='seleccione'>Seleccione</option>");
                     for (i=0; i < data.length; i++){
                        $("#area").append("<option value=" + data[i].id_area + ">" + data[i].nombre_area + "</option>");
                     }
                }
            });
            
            
        });

            function search_registro(){
                $.ajax({
                    //data: "q="+q+"&fi="+fi+"&ff="+ff+"&t="+1,
                    type: "POST",
                    dataType: "json",
                    url: URL+'registro/buscar_registros/'+$('#registros').val(),
                        success: function(data){
                            if(data.length > 0){
                                var html ='';
                                $.each(data, function(i,item){
                                    html += '<tr ><td>'+item.id_registro+'</td><td>'+item.nombre_apellido+'</td><td>'+item.cedula+'</td><td>'+item.direccion+'</td><td>'+item.telefono+'</td><td>'+item.correo+'</td><td>'+item.nombre_area+'</td><td>'+item.nombre+'</td><td><a  class="btn" title="Editar" onclick="registro_individual('+item.id_registro+')" href="#"><i class="icon-pencil"></i> Editar</a><a  class="btn" title="Eliminar" href="#" onclick="eliminarregistro('+item.id_registro+')"><i class="icon-trash"></i> Eliminar</a></td></tr>';
                                });
                                $("#paginar").html(html);
                                $("#paginar").trigger("update");
                                paginar();
                            }
                        }
                  });
             }

            //search_factura($("#empresa").find("option:selected").val(),$("#fechai").val(),$("#fechaf").val());
                        //search_factura();

            $("#registros").on("keyup",(function(){
                search_registro();
                
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

function eliminarRegistro(id_rg){
    $("#aceptarEliminar").attr("href",URL+"registro/eliminar/"+id_rg);
    $('#eliminarRegistro').modal();
}

function registro_individual(registro){
      $.ajax({
        type: "POST",
        dataType: "json",
        data:{id_rg:registro},
        url: URL+"registro/buscar_registro_individual",
        success: function(data){
          if(data){
            $("#index").fadeOut();
            $("#form-editar").attr("action",URL+"registro/guardarEditar/"+data.id_rg);
            $("#id_rg").val(data.id_rg);
            $("#registro").val(data.registro);
            $("#documentacion").val(data.documentacion);
            $("#procedimiento").val(data.procedimiento);             
            $("#nivel_impacto").val(data.nivel_impacto);
            $("#area").val(data.area);
            $("#statuss").val(data.statuss);
            $("#usuario").val(data.usuario);
            $("#tproceso").val(data.tproceso);
            $("#direccion").val(data.direccion);
            $("#analista").val(data.analista);
            $("#aplicacion").val(data.aplicacion);            
            $("#fecha_creacion").val(data.fecha_creacion);
            $("#fecha_modificacion").val(data.fecha_modificacion);
            $("#editar").fadeIn();
          }
        }
      });
}