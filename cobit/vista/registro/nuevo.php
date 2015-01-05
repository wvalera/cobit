<div class="container">
    <div class="bs-docs-example row">
        <div class="descriptionForm">Registro->Nuevo</div>
    
        <form class="form-horizontal" method="post" action="<?php echo URL ?>registro/crear">
                       
            <div class="control-group">
                <label class="control-label" for="nombre">Registro</label>
                <div class="controls">
                    <input type="text" name="registro" id="registro" required>
                </div>
            </div>
            
            <div class="control-group">
                <label class="control-label" for="nombre">Documentacion</label>
                <div class="controls">
                    <input type="text" name="documentacion" id="documentacion">
                </div>
            </div>

             <div class="control-group">
                <label class="control-label" for="nombre">Procedimiento</label>
                <div class="controls">
                    <input type="text" name="procedimiento" id="procedimiento">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="nivel_impacto">Nivel Impacto</label>
                <div class="controls">
                    <input type="radio" name="nivel_impacto" value="alto">Alto
                    <input type="radio" name="nivel_impacto" value="medio">Medio
                    
                </div>

            </div>

            <div class="control-group">
                <label class="control-label" for="status">Status</label>
                <div class="controls">
                    <input type="radio" name="statuss" value="PRODUCCION" required>Produccion
                    <input type="radio" name="statuss" value="DESARROLLO" required>Desarrollo
                    <input type="radio" name="statuss" value="PRUEBA" required>Prueba
                    
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
                    <select class="area" name="id_area" id="area">
                        <option value="seleccione"></option>
                    </select>        
                </div>

            </div>       

            

            <div class="control-group">
                <label class="control-label">Usuario</label>
                <div class="controls">
                    <select class="usuario" name="id_usuario" id="usuario">
                        <option value="seleccione">Seleccione</option>
                        <?php foreach ($this->showUsers as $key => $value) {?>

                        <option value="<?php echo $value['id']?>"><?php echo utf8_decode($value['login'])?></option>

                        <?php }?>
                    </select>
                </div>
            </div>          

           <div class="control-group">
                <label class="control-label">Tipo_Proceso</label>
                <div class="controls">
                    <select class="tproceso" name="id_tp" id="tproceso">
                        <option value="seleccione">Seleccione</option>
                        <?php foreach ($this->showTprocess as $key => $value) {?>

                        <option value="<?php echo $value['id_tp']?>"><?php echo utf8_decode($value['tproceso'])?></option>

                        <?php }?>
                    </select>
                </div>
            </div>



            <div class="control-group">
                <label class="control-label">Cliente</label>
                <div class="controls">
                    <select class="cliente" name="id_cliente" id="cliente">
                        <option value="seleccione">Seleccione</option>
                        <?php foreach ($this->showCustomers as $key => $value) {?>

                        <option value="<?php echo $value['id_cliente']?>"><?php echo utf8_decode($value['nombre_apellido'])?></option>

                        <?php }?>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Desarrollador Soft</label>
                <div class="controls">
                    <select class="desarrollador" name="id_dev" id="desarrollador">
                        <option value="seleccione">Seleccione</option>
                        <?php foreach ($this->showDevelopers as $key => $value) {?>

                        <option value="<?php echo $value['id_dev']?>"><?php echo utf8_decode($value['desarrollador'])?></option>

                        <?php }?>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Aplicacion</label>
                <div class="controls">
                    <select class="aplicacion" name="id_ap" id="aplicacion">
                        <option value="seleccione">Seleccione</option>
                        <?php foreach ($this->showApplications as $key => $value) {?>

                        <option value="<?php echo $value['id_ap']?>"><?php echo utf8_decode($value['aplicacion'])?></option>

                        <?php }?>
                    </select>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Analista</label>
                <div class="controls">
                    <select class="analista" name="id_an" id="analista">
                        <option value="seleccione">Seleccione</option>
                        <?php foreach ($this->showAnalysts as $key => $value) {?>

                        <option value="<?php echo $value['id_an']?>"><?php echo utf8_decode($value['analista'])?></option>

                        <?php }?>
                    </select>
                </div>
            </div>

             <div class="control-group">
                    <label for="nombre_analista" class="control-label">Fecha Creacion:</label>
                   
                <div class="input-append date form_datetime">
                    <input size="5" type="text" value=""  name="fecha" id="fecha">
                     <span class="add-on"><i class="icon-th"></i></span>
                </div>
                </div>

                <div class="control-group">
                    <label for="nombre_analista" class="control-label">Fecha Actualizacion:</label>
                   
                <div class="input-append date form_datetime">
                    <input size="5" type="text" value=""  name="fecha_ac" id="fecha">
                     <span class="add-on"><i class="icon-th"></i></span>
                </div>
                </div>

           <!-- 


            


            

           

                <div class="control-group">
                    <label for="nombre_analista" class="control-label">Fecha Actualizacion:</label>
                   
                <div class="input-append date form_datetime">
                     <input size="5" type="text" value="" readonly name="fecha_modificacion" id="fecha_modificacion">
                     <span class="add-on"><i class="icon-th"></i></span>
                </div>
                </div>-->
            
                <div class="controls">
                    <input class="btn btn-primary" type="submit" />   
                </div>

            </div>
            
            

        </form>
    </div>
</div>

 </div>

<!--<div class="container">
    <div class="bs-docs-example row">
        <div class="descriptionForm">Nueva->registro</div>
        <form action="<?php echo URL ?>registro/crear" class="form-horizontal" method="POST">
                
                <div class="control-group">
                    <label for="idregistro" class="control-label">Registro</label>
                    <div class="controls">
                        <input type="text" name="registro_nombre" id="registro_nombre" value="" size="55" required/>
                    </div>
                </div>               

              
                <div class="control-group">
                    <div class="controls">
                        <input class="btn btn-primary" type="submit" value="enviar" />   
                    </div>
                </div>

            </form>
        </div>
    </div>-->