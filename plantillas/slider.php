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
        <h1 class="display-3 font-weight-bold data-title">LUNES Y MIÉRCOLES</h1>      
        <p class="h1-responsive data-sutitile font-weight-bold">DE 8:00 A 9:00 P.M.</p>
        <a target="" href="" class="btn btn-info" rel="nofollow">See more!</a>
      </div>
    </div>
    <!--/.First slide-->

    <!-- Second slide -->
    <div class="carousel-item banner_uno view">
      <div class="mask flex-center rgba-black-light text-white">
        <h1 class="display-3 font-weight-bold data-title">MARTES Y JUEVES</h1>      
        <p class="h1-responsive data-sutitile font-weight-bold">DE 6:20 A 7:20 A.M.</p>
        <a target="" href="" class="btn btn-info" rel="nofollow">See more!</a>
      </div>
    </div>
    <!--/.Second slide -->

    <!-- Third slide -->
    <div class="carousel-item banner_uno view">
      <div class="mask flex-center rgba-black-light text-white">
        <h1 class="display-3 font-weight-bold data-title">MARTES Y JUEVES</h1>      
        <p class="h1-responsive data-sutitile font-weight-bold">DE 6:20 A 7:20 A.M.</p>
        <a target="" href="" class="btn btn-info" rel="nofollow">See more!</a>
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
