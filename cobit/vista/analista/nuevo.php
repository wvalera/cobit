<div class="container">
    <div class="bs-docs-example row">
        <div class="descriptionForm">Nuevo->Analista</div>
        <form action="<?php echo URL ?>analista/crear" class="form-horizontal" method="POST">
                

                <div class="control-group">
                    <label for="nombre_analista" class="control-label">Nombre analista</label>
                    <div class="controls">
                        <input type="text" name="nombre_analista" id="nombre_analista" value="" size="55" required/>
                    </div>
                </div>

                 <div class="control-group">
                    <label for="nombre_analista" class="control-label">Fecha Ingreso:</label>
                   
                <div class="input-append date form_datetime">
                    <input size="5" type="text" value="" readonly name="fecha" id="fecha">
                     <span class="add-on"><i class="icon-th"></i></span>
                </div>
                </div>       


                <div class="control-group">
                    <label for="correo" class="control-label">Correo</label>
                    <div class="controls">
                        <input type="text" name="correo" id="correo" value="" size="55" required/>
                    </div>
                </div>

                 <div class="control-group">
                    <label for="correo" class="control-label">Contacto</label>
                    <div class="controls">
                        <input type="text" name="correo" id="correo" value="" size="55" required/>
                    </div>
                </div>

                 <div class="control-group">
                    <label for="correo" class="control-label">Descripcion</label>
                    <div class="controls">
                        <input type="text" name="correo" id="correo" value="" size="55" required/>
                    </div>
                </div>


                
                <div class="control-group">
                    <label for="pais" class="control-label">Area</label>
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
                        <input class="btn btn-primary" type="submit" value="enviar" />   
                    </div>
                </div>

            </form>
        </div>
    </div>
