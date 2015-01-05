            $(function() {
                paginar();
                             function search_tproceso(){
                $.ajax({
                    //data: "q="+q+"&fi="+fi+"&ff="+ff+"&t="+1,
                    type: "POST",
                    dataType: "json",
                    url: URL+"tproceso/buscar_tproceso/"+$('#otracosa').val(),
                        success: function(data){
                            if(data.length > 0){
                                var html ='';
                                $.each(data, function(i,item){
                                    html += '<tr class="rows">\
                                    <td>'+item.id_tp+'</td>\
                                    <td>'+item.tproceso+'</td>\
                                    <td>'+item.descripcion+'</td>\
                                    <td class="options">\
                                    <a class="btn" title="Editar" onclick="tproceso_individual('+item.id_tp+')" href="#"><i class="icon-pencil"></i> Editar</a><a class="btn" title="Eliminar" href="#" onclick="eliminartproceso('+item.id_tp+')"><i class="icon-pencil"></i> Eliminar</a></td>\
        </tr>';
                                });
          console.log(html);

                                $("#paginar").html(html);
                                $("#tabla-otracosa").trigger("update");
                            }
                        }
                  });
             }

            //search_factura($("#empresa").find("option:selected").val(),$("#fechai").val(),$("#fechaf").val());
                        //search_factura();

                        $("#otracosa").on("keyup",(function(){
                search_tproceso();
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

function eliminartproceso(id_tp){
    $("#aceptarEliminar").attr("href",URL+"tproceso/eliminar/"+id_tp);
    $('#eliminartproceso').modal();
}

function tproceso_individual(tproceso){
      $.ajax({
        type: "POST",
        dataType: "json",
        data:{id_tp:tproceso},
        url: URL+"tproceso/buscar_tproceso_individual",
        success: function(data){
          if(data){
            $("#index").fadeOut();
            $("#form-editar").attr("action",URL+"tproceso/guardarEditar/"+data.id_tp);
            $("#id_tp").val(data.id_tp);
            $("#tproceso").val(data.tproceso);
            $("#descripcion").val(data.descripcion);
            $("#editar").fadeIn();
          }
        }
      });
}