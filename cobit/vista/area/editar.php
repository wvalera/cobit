<div class="block_head">
        <div class="bheadl"></div>
        <div class="bheadr"></div>
        
        <h2>Editar AreaSS</h2>
        
        <ul class="tabs">
            <li class="active nobg"><a href="javascript: history.back()">Atras</a></li>
<!--            <li><a href="<?php echo URL;?>producto">Nuevo Producto</a></li>-->
        </ul>
    </div>
<div class="block_content">
    <form novalidate="novalidate" method="post" action="<?php echo URL ?>area/guardarEditar/<?php echo $this->verarea['id_area']?>" enctype="multipart/form-data" id="form_">
          
     <p>
        <label for="nombre">Edite  Area</label><br>
        <input type="text" name="id_area" id="id_area" value="<?php echo $this->verarea['id_area'] ?>" size="55" class="text required"/>
    </p>
    <p>
        <label for="nombre">Edite Nombre Area</label><br>
        <input type="text" name="nombre_area" id="nombre_area" value="<?php echo $this->verarea['nombre_area'] ?>" size="55" class="text required"/>
    </p>
    
     <p>
        <label for="descripcion">Descripcion</label><br>
        <textarea id="descripcion" class="text" style="height:40px" name="descripcion" value="<?php echo $this->verarea['descripcion'] ?>"></textarea>
    </p>

    <p>
        <label for="modelo">Pais</label>
         <select name="id_pais" id="id_pais">
            <option value="seleccione">Seleccione</option>
            <?php foreach ($this->pais as $key => $value) {?>
            <option value="<?php echo $value['id_pais']?>" <?php if ($this->verarea['id_pais'] == $value['id_pais']) echo 'selected' ?>><?php echo utf8_decode($value['nombre'])?></option>
             <?php }?>
        </select>
    </p>
   
       
        <p>
       <input class="btn" type="submit" value="Actualizar"/> 
    </p>
    
    </form>
</div>