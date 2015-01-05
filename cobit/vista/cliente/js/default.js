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
               url:"http://localhost/cobit/cliente/cargarAreas/"+id,
                success:function(data){
                     $("#area").append("<option value='seleccione'>Seleccione</option>");
                     for (i=0; i < data.length; i++){
                        $("#area").append("<option value=" + data[i].id_area + ">" + data[i].nombre_area + "</option>");
                     }
                }
            });
            
            
        });

            function search_cliente(){
                $.ajax({
                    //data: "q="+q+"&fi="+fi+"&ff="+ff+"&t="+1,
                    type: "POST",
                    dataType: "json",
                    url: URL+'cliente/buscar_clientes/'+$('#clientes').val(),
                        success: function(data){
                            if(data.length > 0){
                                var html ='';
                                $.each(data, function(i,item){
                                    html += '<tr ><td>'+item.id_cliente+'</td><td>'+item.nombre_apellido+'</td><td>'+item.cedula+'</td><td>'+item.direccion+'</td><td>'+item.telefono+'</td><td>'+item.correo+'</td><td>'+item.nombre_area+'</td><td>'+item.nombre+'</td><td><a  class="btn" title="Editar" onclick="cliente_individual('+item.id_cliente+')" href="#"><i class="icon-pencil"></i> Editar</a><a  class="btn" title="Eliminar" href="#" onclick="eliminarCliente('+item.id_cliente+')"><i class="icon-trash"></i> Eliminar</a></td></tr>';
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

            $("#clientes").on("keyup",(function(){
                search_cliente();
                
            }));

            function paginar(){
              $("#paginacion").jPages({
                containerID: "paginar",
                perPage:1,
                previous: "Anterior",
                next: "Siguiente"
              });            
            }

            $("#atras").on("click",function(){
                $("#editar").fadeOut();
                $("#index").fadeIn();
            });




});

function eliminarCliente(id){
    $("#aceptarEliminar").attr("href",URL+"cliente/eliminar/"+id);
    $('#eliminarCliente').modal();
}

function cliente_individual(cliente=""){
      $.ajax({
        type: "POST",
        dataType: "json",
        data:{id_cliente:cliente},
        url: URL+"cliente/buscar_cliente_individual",
        success: function(data){
          if(data){
            $("#index").fadeOut();
            $("#form-editar").attr("action",URL+"cliente/guardarEditar/"+data.id_cliente);
            $("#nombre_apellido").val(data.nombre_apellido);
            $("#cedula").val(data.cedula);
            //cargar_combos(data.id_pais,data.id_area);
            $("#direccion").val(data.direccion);
            $("#telefono").val(data.telefono);
            $("#nacionalidad").val(data.nacionalidad);
            $("#correo").val(data.correo);
            //$("#id_pais").val(data.id_pais);
            //$("#area").val(data.id_area);
            $("#editar").fadeIn();
          }
        }
      });
}