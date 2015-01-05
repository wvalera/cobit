<div id="index">
    <div class="container">

        <div class="bs-docs-example row" style="height: 500px;">
            <div class="descriptionForm">Usuarios</div>
            <div>
                <a href="<?php print URL.'usuario/nuevo'; ?>" class="btn"><i class="icon-plus-sign"></i> Nuevo</a>
            </div>

            <hr>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-search"></i></span>
                <input class="span2" id="usuarios" type="text" placeholder="Texto a buscar">
            </div>

            <table id="tabla-usuarios" class="table table-bordered table-hover sortable" >
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Loin</th>
                        <th>Rol</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="paginar">
                <?php 
foreach ($this->listaUsuario as $key => $value) {
?>
   <tr>
        <td>
                <?php echo $value['id'];?>
       </td>
        <td>
                <?php echo $value['nombre'];?> 
        </td>
        <td>
                <?php echo $value['apellido'];?> 
        </td>
        <td>
                <?php echo $value['login'];?> 
        </td>
        <td>
                <?php echo $value['rol'];?> 
        </td>
        
        <td class="options">
                       
            <a class="btn" title="Editar" onclick="usuario_individual(<?php echo $value['id'] ?>)" href="#">
                <i class="icon-pencil"></i> Editar
            </a> 
            <a class="btn" title="Eliminar" href="#" onclick="eliminarUsuario('<?php echo $value['id'] ?>')">
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

<div id="eliminarUsuario" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Eliminar Usuario</h3>
    </div>
    <div class="modal-body">
        <p>¿Desea Eliminar este Usuario?</p>
        </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
        <a id="aceptarEliminar" href="#" class="btn btn-primary">Aceptar</a>
    </div>
</div>



<div id="editar" style="display:none">
<div class="container">
    <div class="bs-docs-example row">
        <div class="descriptionForm">Editar->Usuario</div>
        <form id="form-editar" action="#" class="form-horizontal" method="POST">
                <div class="control-group">
                    <label for="nombre" class="control-label">Nombre</label>
                    <div class="controls">
                        <input name="nombre" type="text" id="nombre" value="<?php echo $this->usuario['nombre'] ?>">
                    </div>
                </div>


                <div class="control-group">
                    <label for="apellido" class="control-label">Apellido</label>
                    <div class="controls">
                        <input name="apellido" id="apellido" type="text" value="<?php echo $this->usuario['apellido'] ?>" >
                    </div>
                </div>

                <div class="control-group">
                    <label for="login" class="control-label">Login</label>
                    <div class="controls">
                        <input type="text" name="login" id="login" value="<?php echo $this->usuario['login'] ?>">
                    </div>
                </div>


                <div class="control-group">
                    <label for="rol" class="control-label">Rol</label>
            <div class="controls">        
            <select  class="select" name="role" id="role">
                        <option value="por defecto">Por Defecto</option>
                        <option value="administrador">Administrador</option>
                        <option value="usuario">Usuario</option>
           </select>
            </div>
                </div>
                <!--Fin del div  bs-docs-example row-->
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
</div>
