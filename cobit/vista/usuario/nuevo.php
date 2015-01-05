<div class="container">
    <div class="bs-docs-example row">
        <div class="descriptionForm">Nuevo->Usuario</div>
<form class="formulario" method="post" action="<?php echo URL ?>usuario/crear">

   <div class="control-group">
    <label  for="nombre">Nombre</label>
    <div>        
        <input type="text" name="nombre" id="nombre" class="texto" required/>
    </div>
    </div>
    <div class="control-group">
    <label  for="apellido">Apellido</label>
    <div>        
        <input type="text" name="apellido" id="apellido" class="texto"/>
    </div>
    </div>
    
    <div class="control-group">
        <label  for="login">Login</label>
    <div>        
        <input type="text" name="login" id="login" class="texto"/>
    </div>
    </div>
    
    <div class="control-group">
        <label  for="password">Password</label>
    <div>        
        <input type="password" name="password" id="password" class="texto"/>
    </div>
    </div>

    <div class="control-group">
        <label  for="rol">Rol</label>
    <div>        
        <select class="select" id="rol" name="rol">
            <option value="por defecto">Default</option>
            <option value="administrador">Administrador</option>
            <option value="usuario">Usuario</option>
        </select>
    </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <input class="btn btn-primary" type="submit" value="Enviar" />
            <!--<input id="atras" class="btn btn-primary" type="button" value="Atras" />-->
        </div>
     </div> 
   
</form>
</div>
</div>
</div>
