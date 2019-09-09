<style rel="stylesheet">
  /* TEMPLATE STYLES */
  /* Necessary for full page carousel*/

  html,
  body {
    height: 100%;
  }
  /* Navigation*/

  .navbar {
    background-color: #0081c2 !important;
  }

  .top-nav-collapse {
    background-color: #0081c2 !important;
  }

  @media only screen and (max-width: 768px) {
    .navbar {
      background: #0081c2 !important;
    }
  }

  .scrolling-navbar {
    -webkit-transition: background 0.5s ease-in-out, padding 0.5s ease-in-out;
    -moz-transition: background 0.5s ease-in-out, padding 0.5s ease-in-out;
    transition: background 0.5s ease-in-out, padding 0.5s ease-in-out;
  }
  /* Carousel*/

  .carousel {
    height: 85%;
  }

  @media (max-width: 776px) {
    .carousel {
      height: 100%;
    }
  }

  .carousel-item,
  .active {
    height: 100%;
  }

  .carousel-inner {
    height: 100%;
  }
</style>

<div
  id="carousel-example-3"
  class="carousel slide carousel-fade"
  data-ride="carousel"
  data-interval="false"
>
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-3" data-slide-to="1"></li>
    <li data-target="#carousel-example-3" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner z-depth-2" role="listbox">
    <!-- First slide -->
    <div class="carousel-item active banner_uno view">
      <div class="mask flex-center rgba-black-light text-white">
        <ul class="list-style">
          <li>
            <p class="display-1 font-weight-bold animated fadeIn delay-1s season">TEMPORADA 2019</p>
          </li>
        </ul>    
      </div>
    </div>
    <!--/.First slide-->

    <!-- Second slide -->
    <div class="carousel-item banner_dos view">
      <div class="mask flex-center rgba-black-light text-white slider-title">
        <ul class="list-style">
          <li><h1 class="display-2 font-weight-bold data-title animated fadeInDown delay-1s">LUNES Y MIÉRCOLES</h1>  </li>
          <li><p class="h1-responsive data-sutitile font-weight-bold animated fadeInUp delay-2s">DE 8:00 A 9:00 P.M.</p></li>
          <li class="pt-md-0 pt-5">
            <a target="_blank" href="<?php echo RUTA_PADULTO ?>" class="btn btn-info animated zoomIn navbar-background delay-3s " rel="nofollow">Programa adultos</a>
          </li>
        </ul>          
      </div>
    </div>
    <!--/.Second slide -->

    <!-- Third slide -->
    <div class="carousel-item banner_uno view">
      <div class="mask flex-center rgba-black-light text-white slider-title">
        <ul class="list-style">
          <li><h1 class="display-2 font-weight-bold data-title animated fadeInLeftBig delay-1s">MARTES Y JUEVES</h1> </li>
          <li> <p class="h1-responsive data-sutitile font-weight-bold animated fadeInRightBig delay-2s">DE 6:20 A 7:20 A.M.</p></li>
          <li class="pt-md-0 pt-5">
            <a target="_blank" href="<?php echo RUTA_PADULTO ?>" class="btn btn-info animated zoomIn navbar-background delay-3s " rel="nofollow">Programa adultos</a>
          </li>
        </ul>          
      </div>
      
    </div>
    <!--/.Third slide-->
  </div>
  <!--/.Slides-->

  <!--Controls-->
  <a
    class="carousel-control-prev"
    href="#carousel-example-3"
    role="button"
    data-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a
    class="carousel-control-next"
    href="#carousel-example-3"
    role="button"
    data-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
