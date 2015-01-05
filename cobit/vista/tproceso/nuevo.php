<div class="container">
    <div class="bs-docs-example row">
        <div class="descriptionForm">Nueva->tproceso</div>
        <form action="<?php echo URL ?>tproceso/crear" class="form-horizontal" method="POST">
                
                
                <div class="control-group">
                    <label for="nombre_tproceso" class="control-label">Nombre tproceso</label>
                    <div class="controls">
                        <input type="text" name="tproceso" id="tproceso" value="" size="55" required/>
                    </div>
                </div>


                <div class="control-group">
                    <label for="descripcion" class="control-label">Descripcion</label>
                    <div class="controls">
                        <textarea id="descripcion" class="text" style="height:40px" name="descripcion"></textarea>
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
