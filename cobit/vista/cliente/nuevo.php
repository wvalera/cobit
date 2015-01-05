
<div class="container">
    <div class="bs-docs-example row">
        <div class="descriptionForm">Cliente->Nuevo</div>
    
        <form class="form-horizontal" method="post" action="<?php echo URL ?>cliente/crear">
            <!--<div class="control-group">
                <label class="control-label" for="nacionalidad">Nacionalidad</label>
                <div class="controls">
                    <select name="nacionalidad" required>
                        <option value="V">Venezolano</option>
                        <option value="E">Extranjero</option>
                    </select>
                </div>
            </div>-->
            
            <div class="control-group">
                <label class="control-label" for="nombre">Nombre Apellido</label>
                <div class="controls">
                    <input type="text" name="nombre_apellido" id="nombre_apellido" required>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="nombre">Cedula</label>
                <div class="controls">
                    <input type="text" name="cedula" id="cedula">
                </div>
            </div>

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

            </div>
            
            <div class="control-group">
                <label class="control-label" for="area">Area</label>
                <div class="controls">
                    <select class="area" name="area" id="area">
                        <option value="seleccione"></option>
                    </select>        
                </div>

            </div>

            <div class="control-group">
                <label class="control-label" for="direccion">Direccion</label>
                <div class="controls">
                    <input class="texto" type="text" name="direccion" id="direccion" value="" required>                    
                </div>

            </div>

            <div class="control-group">
                <label class="control-label" for="direccion">Correo</label>
                <div class="controls">
                    <input class="texto" type="text" name="correo" id="correo" value="" required>                    
                </div>

            </div>

            <div class="control-group">
                <label class="control-label" for="password">Telefono</label>
                <div class="controls">
                    <input class="texto" type="text" name="telefono" id="telefono" value="" required>        

                </div>
                <div class="controls">
                    <input class="btn btn-primary" type="submit" />   
                </div>

            </div>
            
            

        </form>
    </div>
</div>