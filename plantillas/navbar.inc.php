<!--Navbar-->
<header class="container">
  <nav class="navbar navbar-background navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
    <!-- Navbar brand -->
    <a
        class="text-white font-weight-bold h2-responsive pl-md-5 pl-1"
        href="<?php echo SERVIDOR ?>"
      >
        <!--   <img src="<?php echo RUTA_IMG?>logo_andean.png" class="LogoI wow pulse" />-->
        RMGOL
      </a>

    <!-- Collapse button -->
    <button
      class="navbar-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#basicExampleNav"
      aria-controls="basicExampleNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav">
      <!-- Links -->
      <ul class="navbar-nav ml-auto" id="botones">
        <li class="nav-item">
          <a class="nav-link font-weight-normal" href="<?php echo SERVIDOR ?>"
            >INICIO
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-normal" href="<?php echo RUTA_NOSOTROS ?>">NOSOTROS</a>
        </li>
            <!-- Dropdown -->
        <li class="nav-item dropdown" id="open">
          <a
            class="nav-link dropdown-toggle font-weight-normal"
            >PROGRAMA DE ENTRENAMIENTO</a
          >
          <div
            class="navbar-background dropdown-menu dropdown-primary" 
            id="prueba"
          >
            <a class="dropdown-item font-weight-normal white-text" href="<?php echo RUTA_PADULTO ?>"><i class="fas fa-caret-right px-2"></i>Programa de Adultos</a>
            <a class="dropdown-item font-weight-normal white-text" href="<?php echo RUTA_CATEGORIA ?>"><i class="fas fa-caret-right px-2"></i>Categoría 2007</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-normal" href="<?php echo RUTA_CONTACTO ?>">CONTÁCTANOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-normal" href="<?php echo RUTA_TOQUE ?>">TOQUE FINAL</a>
        </li>
  
      </ul>
      <!-- Links -->
    </div>
    <!-- Collapsible content -->
  </nav>
</header>
  <!--/.Navbar-->
