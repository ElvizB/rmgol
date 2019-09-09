<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';
include_once 'plantillas/slider.php';



$titulo = 'Rmgol';
?>


  <section class="container">
    <div class="mt-4">
      <h1 class="h1-responsive font-weight-normal mt-5 wow fadeInUp" data-wow-delay="0.2s">PROGRAMAS DE FÚTBOL</h2>
      <hr />
    </div>
    <div class="row wow">
        <!-- Grid column -->
        <div class="col-lg-4 col-md-6 col-sm-12 pb-5 wow fadeIn" data-wow-delay="0.4s">
          <!--Card-->
          <div class="card z-depth-1" >
            <!--Card image-->
            <div class="view overlay zoom waves-effect waves-light" style="cursor:auto">
            <img class="card-img-top" src="<?php echo RUTA_IMG?>fotoinicio.png" alt="Card image cap">
          </div>
            <!--Card content-->
            <div class="card-body">

              <!--Title-->
              <h4 class="card-title">Programa de Adultos</h4>
              <!--Text-->
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <div class="text-center">
                <a  href="<?php echo RUTA_PADULTO ?>" class="btn btn-default btn-md navbar-background boton-v2">Leer Más<i class="fas fa-angle-double-right ml-3"></i></a>
              </div>
          </div>
          </div>
          <!--/.Card-->
        </div>
        <!-- Grid column --> 

         <!-- Grid column -->
         <div class="col-lg-4 col-md-6 col-sm-12 pb-5 wow fadeIn" data-wow-delay="0.6s">
          <!--Card-->
          <div class="card z-depth-1">
            <!--Card image-->
            <div class="view overlay zoom waves-effect waves-light" style="cursor:auto">
              <img class="card-img-top" src="<?php echo RUTA_IMG?>fotoinicio.png" alt="Card image cap">
            </div>
            <!--Card content-->
            <div class="card-body">

              <!--Title-->
              <h4 class="card-title">Categoría 2007</h4>
              <!--Text-->
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <div class="text-center">
                <a  href="<?php echo RUTA_CATEGORIA?>" class="btn btn-default btn-md navbar-background boton-v2" >Leer Más<i class="fas fa-angle-double-right ml-3"></i></a>
              </div>
          </div>
          </div>
          <!--/.Card-->
        </div>
        <!-- Grid column --> 

         <!-- Grid column -->
         <div class="col-lg-4 col-md-6 col-sm-12 pb-5 wow fadeIn" data-wow-delay="0.8s">
          <!--Card-->
          <div class="card z-depth-1">
            <!--Card image-->
            <div class="view overlay zoom waves-effect waves-light" style="cursor:auto">
            <img class="card-img-top" src="<?php echo RUTA_IMG?>fotoinicio.png" alt="Card image cap">
          </div>
            <!--Card content-->
            <div class="card-body">

              <!--Title-->
              <h4 class="card-title">Programa</h4>
              <!--Text-->
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <div class="text-center">
                <a  href="#" class="btn btn-default btn-md navbar-background boton-v2">Leer Más<i class="fas fa-angle-double-right ml-3"></i></a>
              </div>
          </div>
          </div>
          <!--/.Card-->
        </div>
        <!-- Grid column --> 

    </div>
    
  </section>
  
  <!-- Start your project here-->
  <section class="container">
    <div class="mt-4">
      <h1 class="h1-responsive font-weight-normal mt-5 wow fadeInUp" data-wow-delay="0.2s">OTROS SERVICIOS</h2>
      <hr />
    </div>

    <div class="row wow">

      <!-- Grid column -->
        <div class="col-lg-4 col-md-6 col-sm-12 pb-5 wow fadeIn" data-wow-delay="0.4s">
          <!--Card-->
          <div class="card z-depth-1">
            <!--Card image-->
            <div class="view overlay zoom waves-effect waves-light" style="cursor:auto">
            <img class="card-img-top" src="<?php echo RUTA_IMG?>fotoinicio.png" alt="Card image cap">
          </div>
            <!--Card content-->
            <div class="card-body">

              <!--Title-->
              <h4 class="card-title">Entrena tu equipo con nosotros</h4>
              <!--Text-->
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <!-- Provides extra visual weight and identifies the primary action in a set of buttons -->
              <div class="text-center">
                <a  href="<?php echo RUTA_PADULTO ?>" class="btn btn-default btn-md navbar-background boton-v2">Leer Más<i class="fas fa-angle-double-right ml-3"></i></a>
              </div>
          </div>
          </div>
          <!--/.Card-->
        </div>
        <!-- Grid column --> 
      </div>
  
  
  
  </section>


<?php
  include_once 'plantillas/footer.php';
   include_once 'plantillas/documento-cierre.inc.php';
?>