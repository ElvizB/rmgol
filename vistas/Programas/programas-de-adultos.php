<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Andean Tours';
?>
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="waves-effect waves-light z-depth-3" style="cursor: auto;">
      <img class="d-block w-100 " src="<?php echo RUTA_IMG?>fotoinicio.png" alt="First slide" style="height:50vh;">
    </div>
    <!--/First slide-->
  </div>
  <!--/.Slides-->
</div>
<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>