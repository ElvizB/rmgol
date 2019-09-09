<?php

$componentes_url = parse_url($_SERVER['REQUEST_URI']);

$ruta = $componentes_url['path'];

$partes_ruta = explode('/', $ruta);
$partes_ruta = array_filter($partes_ruta);
$partes_ruta = array_slice($partes_ruta, 0);

$ruta_elegida = 'vistas/404.php';

if($partes_ruta[0] == 'rmgol'){
  if (count($partes_ruta) == 1){
    $ruta_elegida = 'vistas/home.php';
  }else if (count($partes_ruta) == 2){
    switch($partes_ruta[1]){
      case 'Nosotros':
        $ruta_elegida = 'vistas/Nosotros.php';
        break;
      case 'programas-de-adultos':
        $ruta_elegida = 'vistas/Programas/programas-de-adultos.php';
        break;
      case 'categoria-2007':
        $ruta_elegida = 'vistas/Programas/categoria-2007.php';
        break;
      case 'Contacto':
        $ruta_elegida = 'vistas/Contacto.php';
        break;
      case 'toque-final':
        $ruta_elegida = 'vistas/toque-final.php';
        break;

    }
  }
}

include_once $ruta_elegida;