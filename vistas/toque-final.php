<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Rmgol';
?>
  <section class="navbar-background mt-5 polygon-full pb-5 z-depth-3">
    <div class="container pt-5 ">
      <div class="row align-items-center">
        <div class="col-lg-12">
          <div class="text-white text-justify wow fadeInUp" data-wow-delay="0.2s">
            <h1 class="font-weight-normal h1-responsive pb-5 pt-5">BLOG</h1>          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Blog v.3 -->
<section class="my-5 container">

    <!-- Section heading -->
    <h2 class="h1-responsive font-weight-bold text-center my-5 divider-new wow fadeInUp" data-wow-delay="0.2s">Noticias Recientes</h2>
    <!-- Section description -->
    <p class="text-center dark-grey-text w-responsive mx-auto mb-5 wow fadeInUp" data-wow-delay="0.4s">Duis aute irure dolor in reprehenderit in
    voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <!-- Grid row -->
    <div class="row wow fadeInUp" data-wow-delay="0.6s">

    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <img class="img-fluid" src="<?php echo RUTA_IMG?>fotoinicio.png" alt="Sample image">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">

        <!-- Post title -->
        <h3 class="font-weight-bold mb-3"><strong>Title of the news</strong></h3>
        <!-- Excerpt -->
        <p class="dark-grey-text">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit
        quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus
        et aut officiis debitis cum soluta nobis est eligendi placeat facere aut rerum.</p>
        <!-- Post data -->
        <p><a class="font-weight-bold"></a> 19/04/2018</p>
        <!-- Read more button -->
        <a  href="" class="btn btn-default btn-md navbar-background boton-v2">Leer Más<i class="fas fa-angle-double-right ml-3"></i></a>

    </div>
    <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-5">

    <!-- Grid row -->
    <div class="row wow fadeInUp" data-wow-delay="0.8s">

    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <img class="img-fluid" src="<?php echo RUTA_IMG?>fotoinicio.png" alt="Sample image">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">

        <!-- Post title -->
        <h3 class="font-weight-bold mb-3"><strong>Title of the news</strong></h3>
        <!-- Excerpt -->
        <p class="dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis
        praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
        cupiditate non provident et accusamus iusto odio dignissimos et dolorum fuga.</p>
        <!-- Post data -->
        <p><a class="font-weight-bold"></a> 16/04/2018</p>
        <!-- Read more button -->
        <a  href="" class="btn btn-default btn-md navbar-background boton-v2">Leer Más<i class="fas fa-angle-double-right ml-3"></i></a>


    </div>
    <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-5">

    <!-- Grid row -->
    <div class="row wow fadeInUp" data-wow-delay="1s">

    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <img class="img-fluid" src="<?php echo RUTA_IMG?>fotoinicio.png" alt="Sample image">
        <a>
            <div class="mask rgba-white-slight"></div>
        </a>
        </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">

        <!-- Post title -->
        <h3 class="font-weight-bold mb-3"><strong>Title of the news</strong></h3>
        <!-- Excerpt -->
        <p class="dark-grey-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed
        quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est,
        qui dolorem ipsum quia dolor sit amet, psam voluptatem quia consectetur.</p>
        <!-- Post data -->
        <p><a class="font-weight-bold"></a> 12/04/2018</p>
        <!-- Read more button -->
        <a  href="" class="btn btn-default btn-md navbar-background boton-v2">Leer Más<i class="fas fa-angle-double-right ml-3"></i></a>


    </div>
    <!-- Grid column -->

    </div>
    <!-- Grid row -->

</section>
<!-- Section: Blog v.3 -->

<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>