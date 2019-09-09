<?php
include_once 'app/config.inc.php';
include_once 'app/Conexion.inc.php';

include_once 'plantillas/documento-declaracion.inc.php';
include_once 'plantillas/navbar.inc.php';

$titulo = 'Rmgol';
?>
<section class="pt-4"></section>
<!-- Section: Contact v.1 linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%) -->
<section class="wow fadeInUp mt-5" data-wow-delay="0.2s">  
  <!--Google map-->
  <div id="map-container-section" class="z-depth-3 map-container-section mb-4 wow fadeIn" data-wow-delay="0.1s"  style="height: 500px">
    <iframe 
        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15607.622494716392!2d-76.9434993!3d-12.0500142!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe8765f76db125899!2sOkinawense!5e0!3m2!1sen!2spe!4v1566844673215!5m2!1sen!2spe" 
        width="100%" 
        height="100%" 
        frameborder="0" 
        style="border:0;" 
        allowfullscreen="">
    </iframe>
  </div>
</section>

<!-- Section: Contact v.3 -->
<section class="contact-section my-5 container ">

 <!-- Section heading -->
 <div class="divider-new wow fadeIn" data-wow-delay="0.4s">
  <h1 class="text-center h1-responsive font-weight-normal">CONTACTÁNOS</h1>
 </div>
  <!-- Section description -->
  <p class="text-justify text-md-center w-responsive mx-auto pb-5 wow fadeIn" data-wow-delay="0.6s">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
    Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam
    eum porro a pariatur veniam.</p>

  <!-- Form with header -->
  <div class="card wow fadeIn z-depth-1" data-wow-delay="0.8s">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-lg-8">

        <div class="card-body form">

          <!-- Header -->
          <h3 class="mt-4"><i class="fas fa-envelope pr-2"></i>Escríbenos:</h3>

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-name" class="form-control">
                <label for="form-contact-name" class="">Nombre</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-email" class="form-control">
                <label for="form-contact-email" class="">Email</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row">

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-phone" class="form-control">
                <label for="form-contact-phone" class="">Celular</label>
              </div>
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-md-6">
              <div class="md-form mb-0">
                <input type="text" id="form-contact-company" class="form-control">
                <label for="form-contact-company" class="">Asunto</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <!-- Grid row -->

          <!-- Grid row -->
          <div class="row ">

            <!-- Grid column -->
            <div class="col-md-12">
              <div class="md-form mb-0">
                <textarea id="form-contact-message" class="form-control md-textarea" rows="3"></textarea>
                <label for="form-contact-message">Mensaje</label>
              </div>
            </div>
            <!-- Grid column -->

          </div>
          <div class="text-center">
            <button 
                type="button" 
                class="btn btn-default btn-md waves-effect waves-light navbar-background font-weight-bold boton-v2">Enviar
                <i class="far fa-paper-plane ml-2"></i></i>
            </button>
          </div>
          <!-- Grid row -->

        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-4">

        <div class="card-body contact text-center h-100 white-text gradient-blue" >

          <h5 class="my-4 pb-2">Información del contacto</h5>
          <ul class="text-lg-left list-unstyled ml-4">
            <li>
              <p><i class="fas fa-map-marker-alt pr-2"></i>Asturias, Ate 15012</p>
            </li>
            <li>
              <p><i class="fas fa-phone pr-2"></i>954 924 335</p>
            </li>
            <li>
              <p><i class="fas fa-envelope pr-2"></i>contact@example.com</p>
            </li>
          </ul>
          <hr class="hr-light my-4">
          <ul class="list-inline text-center list-unstyled">
            <li class="list-inline-item">
              <a class="p-2 fa-md li-ic">
              <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-md tw-ic">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="p-2 fa-md ins-ic">
                <i class="fab fa-instagram"> </i>
              </a>
            </li>
          </ul>

        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Form with header -->

</section>
<!-- Section: Contact v.3 -->
<!-- Section: Contact v.1 -->



<?php
include_once 'plantillas/footer.php';
include_once 'plantillas/documento-cierre.inc.php';
?>