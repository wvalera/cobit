<div id="index">
    <div class="container">

        <div class="bs-docs-example row" style="height: 500px;">
            <div class="descriptionForm">Clientes</div>
            <div>
                <a href="<?php print URL.'cliente/nuevo'; ?>" class="btn"><i class="icon-plus-sign"></i> Nuevo</a>
            </div>

            <hr>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-search"></i></span>
                <input class="span2" id="clientes" type="text" placeholder="Texto a buscar">
            </div>

            <table id="tabla-clientes" class="table table-bordered table-hover sortable" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre_Apellido</th>
                        <th>cedula</th>
                        <th>Direccion</th>
                        <th>Telefono</th>
                        <th>Correo</th>
                        <th>Area</th>
                        <th>Pais</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="paginar">
                <?php 
                    foreach ($this->listaClientes as $key => $value) {
                ?>
                    <tr>
                        <td><?php echo $value['id_cliente'];?></td>
                        <td><?php echo $value['nombre_apellido'];?></td>
                        <td><?php echo $value['cedula'];?> </td>
                        <td><?php echo $value['direccion'];?> </td>
                        <td><?php echo $value['telefono'];?></td>
                        <td><?php echo $value['correo'];?></td>
                        <td><?php echo $value['nombre_area'];?></td>
                        <td><?php echo $value['nombre'];?></td>


                   <td class="options">
                
                         <a class="btn" title="Editar" onclick="cliente_individual(<?php echo $value['id_cliente'] ?>)" href="#">
                            <i class="icon-pencil"></i> Editar
                        </a> 
                        <a class="btn" title="Eliminar" href="#" onclick="eliminarCliente('<?php echo $value['id_cliente'] ?>')">
                            <i class="icon-pencil"></i> Eliminar
                        </a>
                    </td>
                        <!--<td>
                            <a  class="btn" title="Editar" href="<?php echo URL ?>cliente/editar/<?php echo $value['id'] ?>" ><i class="icon-pencil"></i> Editar</a>
                            <a   class="btn" title="Eliminar" href="#" onclick="eliminarClientes('<?php print $value['id']?>')" ><i class="icon-trash"></i> Eliminar</a>
                        </td>-->



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


<div id="eliminarCliente" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Eliminar Cliente</h3>
    </div>
    <div class="modal-body">
        <p>¿Desea Eliminar este Cliente?</p>
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
            <div class="descriptionForm">Cliente->Editar</div>
        
            <form id="form-editar" class="form-horizontal" method="post" action="#" enctype="multipart/form-data" id="form_">
                
                 <div class="control-group">
                    <label for="nacionalidad" class="control-label">Nombre, Apellido</label>
                    <div class="controls">
                        <input name="nombre_apellido" id="nombre_apellido" type="text" value="<?php echo $this->cliente['nombre_apellido'] ?>" required >
                    </div>
                </div>
                
                <div class="control-group">
                    <label class="control-label" for="nombre">Cedula</label>
                    <div class="controls">
                        <input type="text" name="cedula" id="cedula" value="<?php echo($this->cliente['cedula'])?>" required >
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="direccion">Direccion</label>
                    <div class="controls">
                        <input type="text" name="direccion" id="direccion" value="<?php echo($this->cliente['direccion'])?>" requred>                
                    </div>
                </div>

                <div class="control-group">
                    <label class="control-label" for="telefono">Telefono</label>
                    <div class="controls">
                        <input  type="text" name="telefono" id="telefono" value="<?php echo($this->cliente['telefono'])?>" required >   

                </div><br>


                <div class="control-group">
                    <label class="control-label" for="correo">Correo</label>
                    <div class="controls">
                        <input  type="text" name="correo" id="correo" value="<?php echo($this->cliente['correo'])?>" required >   

                </div><br>



                <div class="control-group">
                <label class="control-label" for="pais">Pais</label>
                <div class="controls">
                    <select class="pais" name="pais" id="pais">
            <option value="seleccione">Seleccione</option>
            <?php foreach ($this->paises as $key => $value) {?>
            <option value="<?php echo $value['id_pais']?>"><?php echo utf8_decode($value['nombre'])?></option>
             <?php }?>

                    </select>
                </div>

            </div><br>

            <div class="control-group">
                <label class="control-label" for="area">Area</label>
                <div class="controls">
                    <select class="area" name="area" id="area">
                        <option value="seleccione"></option>
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