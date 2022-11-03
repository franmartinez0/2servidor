<?php
session_start();
?>
<?php
include("cabecera.php");
?>

<div class="text-center">
  <h1 class="h4 text-gray-900 mb-4">NUEVO PROYECTO</h1>
</div>
<form class="user" action="controlador.php" method="post">
  <div class="form-group">




  
    <input type="text" class="form-control form-control-user" name="nombre" id="nombre" aria-describedby="" placeholder="Nombre del proyecto" />
  </div>
  <div class="form-group">
    <input type="date" class="form-control form-control-user" name="fechaini" id="fechaini" aria-describedby="" placeholder="Fecha de inicio" />
  </div>
  <div class="form-group">
    <input type="date" class="form-control form-control-user" name="fechafin" id="fechafin" aria-describedby="" placeholder="Fecha de finalizacion" />
  </div>
  
  <div class="form-group">
    <input type="text" class="form-control form-control-user" id="porcentaje" name="porcentaje" placeholder="Porcentaje completado" />
  </div>
  <div class="form-group">
    <input type="number" min="1" max="5" class="form-control form-control-user" id="importancia" name="importancia" placeholder="Importancia" />
  </div>
  <div class="form-group">
    <div class="custom-control custom-checkbox small">
      <input type="checkbox" class="custom-control-input" id="customCheck" />
    </div>
  </div>
  

  <input type="hidden" name="accion" value="formulario" />

  <button type="submit" name="nuevoProyecto" class="btn btn-primary btn-user btn-block" value="nuevoProyecto">CREAR PROYECTO</button>

</form>
<hr />
<div class="text-center"></div>
<div class="text-center"></div>
</div>