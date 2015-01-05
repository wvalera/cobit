<div id="index">
    <div class="container">

        <div class="bs-docs-example row" style="height: 500px;">
            <div class="descriptionForm">registros</div>
            <div>
                <a href="<?php print URL.'registro/nuevo'; ?>" class="btn"><i class="icon-plus-sign"></i> Nuevo</a>
            </div>

            <hr>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-search"></i></span>
                <input class="span2" id="registros" type="text" placeholder="Texto a buscar">
            </div>

            <table id="tabla-registros" class="table table-bordered table-hover sortable" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Registro</th>
                        <!--<th>Documentancion</th>
                        <th>Procedimiento</th>-->
                        <th>Nivel_Impacto</th>
                        <th>Status</th>
                        <th>Nombre_Area</th>
                        <th>Usuario</th>
                        <th>Tipo_Proceso</th>
                        <th>Nombre_registro</th>
                        <th>Analista</th>
                        <th>Fecha Creacion</th>
                        <th>Fecha Actualizacion</th>
                    </tr>
                </thead>
                <tbody id="paginar">
                <?php 
                    foreach ($this->listarDatos as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo $value['id_rg'];?></td>
                        <td><?php echo $value['registro'];?></td>
                        <!--<td><?php echo $value['documentacion'];?></td>
                        <td><?php echo $value['procedimiento'];?> </td>-->
                        <td><?php echo $value['nivel_impacto'];?> </td>
                        <td><?php echo $value['statuss'];?></td>
                        <td><?php echo $value['nombre_area'];?></td>
                        <td><?php echo $value['login'];?></td>
                        <td><?php echo $value['tproceso'];?></td>
                        <td><?php echo $value['nombre_apellido'];?></td>
                        <td><?php echo $value['analista'];?></td>
                        <td><?php echo $value['fecha'];?></td>
                        <td><?php echo $value['fecha_ac'];?></td>



                   <td class="options">
                
                         <a class="btn" title="Editar" onclick="registro_individual(<?php echo $value['id_rg'] ?>)" href="#">
                            <i class="icon-pencil"></i> Editar
                        </a> 
                        <a class="btn" title="Eliminar" href="#" onclick="eliminarRegistro('<?php echo $value['id_rg'] ?>')">
                            <i class="icon-pencil"></i> Eliminar
                        </a>
                    </td>

                    </tr>
                <?php }?>
                </tbody>
            </table>
            <div  class="pagination pagination-centered">
                <ul id="paginacion">
                </ul>
            </div>
        </div>
    </div>   
</div>


<div id="eliminarRegistro" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Eliminar registro</h3>
    </div>
    <div class="modal-body">
        <p>¿Desea Eliminar este registro?</p>
        </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
        <a id="aceptarEliminar" href="#" class="btn btn-primary">Aceptar</a>
    </div>
</div>
<!--Inicia el formulario de edicion-->

<div id="editar" style="display:none">
    <div class="container">
        <div class="bs-docs-example row">
            <div class="descriptionForm">registro->Editar</div>
        
            <form id="form-editar" class="form-horizontal" method="post" action="#" enctype="multipart/form-data" id="form_">
                
                 <div class="control-group">
                    <label for="nacionalidad" class="control-label">Registro</label>
                    <div class="controls">
                        <input name="registro" id="registro" type="text" value="<?php echo $this->registro['registro'] ?>" required >
                    </div>
                </div>

                 <div class="control-group">
                    <label for="nacionalidad" class="control-label">Documentacion</label>
                    <div class="controls">
                        <input name="documentacion" id="documentacion" type="text" value="<?php echo $this->registro['documentacion'] ?>" required >
                    </div>
                </div>
                
                <div class="control-group">
                    <label for="nacionalidad" class="control-label">Procedimiento</label>
                    <div class="controls">
                        <input name="procedimiento" id="procedimiento" type="text" value="<?php echo $this->registro['procedimiento'] ?>" required >
                    </div>
                </div>

                <div class="control-group">
                    <label for="nacionalidad" class="control-label">Nivel_impacto</label>
                    <div class="controls">
                        <input name="nivel_impacto" id="nivel_impacto" type="text" value="<?php echo $this->registro['nivel_impacto'] ?>" required >
                    </div>
                </div>   

                

                <div class="control-group">
                    <div class="controls">
                        <input class="btn btn-primary" type="submit" value="Actualizar" />
                        <input id="atras" class="btn btn-primary" type="button" value="Atras" />
                    </div>
                </div>

                <IMG SRC="http://localhost/cobit/public/images/constr.png" WIDTH=178 HEIGHT=180 ALT="Obra de K. Haring">
            </form>
        </div>
    </div>
</div>