<div id="index">
    <div class="container">

        <div class="bs-docs-example row" style="height: 500px;">
            <div class="descriptionForm">Areas</div>
            <div>
                <a href="<?php print URL.'area/nuevo'; ?>" class="btn"><i class="icon-plus-sign"></i> Nuevo</a>
            </div>

            <hr>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-search"></i></span>
                <input class="span2" id="areas" type="text" placeholder="Texto a buscar">
            </div>

            <table id="tabla-areas" class="table table-bordered table-hover sortable" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Area</th>
                        <th>Pais</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="paginar">
                <?php 
foreach ($this->listadoAreas as $key => $value) {
?>
   <tr>
        <td>
                <?php echo $value['id_area'];?>
       </td>
        <td>
                <?php echo $value['nombre_area'];?> 
        </td>
        <td>
                <?php echo $value['nombre'];?> 
        </td>

        <td class="options">
                
            <a class="btn" title="Editar" onclick="area_individual(<?php echo $value['id_area'] ?>)" href="#">
                <i class="icon-pencil"></i> Editar
            </a> 
            <a class="btn" title="Eliminar" href="#" onclick="eliminarArea('<?php echo $value['id_area'] ?>')">
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

<div id="eliminarArea" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Eliminar Area</h3>
    </div>
    <div class="modal-body">
        <p>¿Desea Eliminar esta Area?</p>
        </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
        <a id="aceptarEliminar" href="#" class="btn btn-primary">Aceptar</a>
    </div>
</div>



<div id="editar" style="display:none">
<div class="container">
    <div class="bs-docs-example row">
        <div class="descriptionForm">Editar->Area</div>
        <form id="form-editar" action="#" class="form-horizontal" method="POST">
                <div class="control-group">
                    <label for="nacionalidad" class="control-label">Id</label>
                    <div class="controls">
                        <input name="id_area" type="text" id="id_area" value="<?php echo $this->verarea['id_area'] ?>">
                    </div>
                </div>


                <div class="control-group">
                    <label for="nacionalidad" class="control-label">Nombre Area</label>
                    <div class="controls">
                        <input name="nombre_area" id="nombre_area" type="text" value="<?php echo $this->verarea['nombre_area'] ?>" >
                    </div>
                </div>

                <div class="control-group">
                    <label for="nacionalidad" class="control-label">Nombre Pais</label>
                    <div class="controls"> 

        <select  name="id_pais" id="id_pais">
            <option value="seleccione">Seleccione</option>
            <?php foreach ($this->paises as $key => $value) {?>
            <option value="<?php echo $value['id_pais']?>"><?php echo utf8_decode($value['nombre'])?></option>
             <?php }?>
        </select>
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