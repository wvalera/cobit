<div id="index">
    <div class="container">

        <div class="bs-docs-example row" style="height: 500px;">
            <div class="descriptionForm">Tipo Proceso</div>
            <div>
                <a href="<?php print URL.'tproceso/nuevo'; ?>" class="btn"><i class="icon-plus-sign"></i> Nuevo</a>
            </div>

            <hr>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-search"></i></span>
                <input class="span2" id="otracosa" type="text" placeholder="Texto a buscar">
            </div>

            <table id="tabla-otracosa" class="table table-bordered table-hover sortable" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>nombre</th>
                        <th>descripcion</th>
                        
                    </tr>
                </thead>
                <tbody id="paginar">
                <?php 
foreach ($this->listaTproceso as $key => $value) {
?>
   <tr>
        <td>
                <?php echo $value['id_tp'];?>
       </td>
       <td>
                <?php echo $value['tproceso'];?>
       </td>
        <td>
                <?php echo $value['descripcion'];?> 
        </td>       

        <td class="options">
                
            <a class="btn" title="Editar" onclick="tproceso_individual(<?php echo $value['id_tp'] ?>)" href="#">
                <i class="icon-pencil"></i> Editar
            </a> 
            <a class="btn" title="Eliminar" href="#" onclick="eliminartproceso('<?php echo $value['id_tp'] ?>')">
                <i class="icon-pencil"></i> Eliminar
            </a>
        </td>
        
    </tr>
<?php } ?>
                </tbody>
            </table>
            <div  class="pagination pagination-centered">
                <ul id="paginacion">
                </ul>
            </div>
        </div>
    </div>   
</div>

<div id="eliminartproceso" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Eliminar Tipo Proceso</h3>
    </div>
    <div class="modal-body">
        <p>¿Desea Eliminar esta tproceso?</p>
        </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
        <a id="aceptarEliminar" href="#" class="btn btn-primary">Aceptar</a>
    </div>
</div>



<div id="editar" style="display:none">
<div class="container">
    <div class="bs-docs-example row">
        <div class="descriptionForm">Editar->tproceso</div>
        <form id="form-editar" action="#" class="form-horizontal" method="POST">
               <!-- <div class="control-group">
                    <label for="nacionalidad" class="control-label">Id</label>
                    <div class="controls">
                        <input name="id_tp" type="hidden" id="id_tp" value="<?php echo $this->t_proceso['id_tp'] ?>">
                    </div>
                </div>-->

                <div class="control-group">
                    <label for="nacionalidad" class="control-label">Nombre tproceso</label>
                    <div class="controls">
                        <input name="tproceso" id="tproceso" type="text" value="<?php echo $this->t_proceso['tproceso'] ?>" >
                    </div>
                </div> 

               <div class="control-group">
                    <label for="nacionalidad" class="control-label">Descripcion</label>
                    <div class="controls">
                        <input name="descripcion" id="descripcion" type="text" value="<?php echo $this->t_proceso['descripcion'] ?>" >
                    </div>
                </div>       
         
                <div class="control-group">
                    <div class="controls">
                        <input class="btn btn-primary" type="submit" value="Actualizar" />
                      <input id="atras" class="btn btn-primary" type="button" value="Atras" />
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>