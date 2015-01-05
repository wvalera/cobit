<?php 

$variable = Session::get('rol') == 'administrador';//echo $variable;

?>



<div id="index">
    <div class="container">

        <div class="bs-docs-example row" style="height: 500px;">
            <div class="descriptionForm">Analistas</div>
            <div>
                <a href="<?php print URL.'analista/nuevo'; ?>" class="btn"><i class="icon-plus-sign"></i> Nuevo</a>
            </div>

            <hr>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-search"></i></span>
                <input class="span2" id="analistas" type="text" placeholder="Texto a buscar">
            </div>




            <table id="tabla-analistas" class="table table-bordered table-hover sortable" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Analista</th>
                        <th>Fecha Ingreso</th>
                        <th>Correo</th>
                        <th>Contacto</th>
                        <th>Area</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody id="paginar">
                <?php 
foreach ($this->listadoanalistas as $key => $value) {
?>
   <tr>
        <td>
                <?php echo $value['id_an'];?>
       </td>
        <td>
                <?php echo $value['analista'];?> 
        </td>
        <td>
                <?php echo $value['fecha_ingreso'];?> 
        </td>
        <td>
                <?php echo $value['correo'];?> 
        </td>
        <td>
                <?php echo $value['contacto'];?> 
        </td>
        <td>
                <?php echo $value['nombre_area'];?> 
        </td>

        <td class="options" id="options">
            
            <?php if (Session::get('rol')=='administrador') {?>
                
            <a class="btn" title="Editar" onclick="buscar_analista_individual(<?php echo $value['id_an'] ?>)" href="#">
                <i class="icon-pencil"></i> Editar
            </a> 
            <a class="btn" title="Eliminar" href="#" onclick="eliminarAnalista('<?php echo $value['id_an'] ?>')">
                <i class="icon-pencil"></i> Eliminar
            </a>
            <?php } ?>
           
        </td>
        
    </tr>
<?php } ?>
                </tbody>
            </table>

            <!--<table id="tabla-analistas" class="table table-bordered table-hover sortable" >
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre analista</th>
                        <th>Fecha</th>
                        <th>Correo<th>
                        <th>Contacto<th>
                        <th>Area<th>
                        <th>Acciones</th>

                     </tr>
                </thead>
                <tbody id="paginar">
                <?php 
foreach ($this->listadoanalistas as $key => $value) {
?>
   <tr>
        <td>
                <?php echo $value['id_an'];?>
       </td>
        <td>
                <?php echo $value['analista'];?> 
        </td>
        <td>
                <?php echo $value['fecha_ingreso'];?> 
        </td>
        <td>
                <?php echo $value['correo'];?> 
        </td>
         <td>
                <?php echo $value['contacto'];?> 
        </td>
         <td>
                <?php echo $value['nombre_area'];?> 
        </td>       

        <td class="options">
            <?php if(Session::get('rol') == 'administrador') { ?>
                               
            <a class="btn" title="Editar" onclick="analista_individual(<?php echo $value['id_an'] ?>)" href="#">
                <i class="icon-pencil"></i> Editar
            </a> 
            <a class="btn" title="Eliminar" href="#" onclick="eliminaranalista('<?php echo $value['id_an'] ?>')">
                <i class="icon-pencil"></i> Eliminar
            </a>
           <?php }?>
        </td>
        
    </tr>
<?php } ?>
                </tbody>
            </table>-->
            <div  class="pagination pagination-centered">
                <ul id="paginacion">
                </ul>
            </div>
        </div>
    </div>   
</div>

<div id="eliminaranalista" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Eliminar analista</h3>
    </div>
    <div class="modal-body">
        <p>¿Desea Eliminar esta analista?</p>
        </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cerrar</button>
        <a id="aceptarEliminar" href="#" class="btn btn-primary">Aceptar</a>
    </div>
</div>



<div id="editar" style="display:none">
<div class="container">
    <div class="bs-docs-example row">
        <div class="descriptionForm">Editar->analista</div>
        <form id="form-editar" action="#" class="form-horizontal" method="POST">
                <div class="control-group">
                    <label for="nacionalidad" class="control-label">Id</label>
                    <div class="controls">
                        <input name="id_an" type="text" id="id_an" value="<?php echo $this->veranalista['id_an'] ?>">
                    </div>
                </div>


                <div class="control-group">
                    <label for="nacionalidad" class="control-label">Nombre analista</label>
                    <div class="controls">
                        <input name="nombre_analista" id="nombre_analista" type="text" value="<?php echo $this->veranalista['nombre_analista'] ?>" >
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


<script type="text/javascript">


var variablejs = "<?php echo $variable; ?>" ;
var text = "Inactivo";

    if (variablejs!=1) {

        document.getElementById("options").innerHTML = text;
        
    };    

</script>