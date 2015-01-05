<div class="container">
    <div class="bs-docs-example row">
        <div class="descriptionForm">Nueva->Area</div>
        <form action="<?php echo URL ?>area/crear" class="form-horizontal" method="POST">
                
                <div class="control-group">
                    <label for="idArea" class="control-label">IdArea</label>
                    <div class="controls">
                        <input type="text" name="id_area" id="id_area" value="" size="55" required/>
                    </div>
                </div>

                <div class="control-group">
                    <label for="nombre_area" class="control-label">Nombre Area</label>
                    <div class="controls">
                        <input type="text" name="nombre_area" id="nombre_area" value="" size="55" required/>
                    </div>
                </div>


                <div class="control-group">
                    <label for="descripcion" class="control-label">Descripcion</label>
                    <div class="controls">
                        <textarea id="descripcion" class="text" style="height:40px" name="descripcion"></textarea>
                    </div>

                </div>

                <div class="control-group">
                    <label for="pais" class="control-label">Pais</label>
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
                        <input class="btn btn-primary" type="submit" value="enviar"/>   
                    </div>
                </div>

            </form>
        </div>
    </div>
