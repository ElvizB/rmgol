<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo RUTA_IMG?>ico.ico">
    <?php
    if(!isset($titulo) || empty($titulo)){
      $titulo ='Rmgol';
    }
    
    echo "<title>Rmgol</title>";
    ?>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.8/css/mdb.min.css" rel="stylesheet">

    <link href="<?php echo RUTA_CSS?>inicio/index.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>btn-icons/icon.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>team/card-team.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>floating-action-button/floating.css" rel="stylesheet">
    <link href="<?php echo RUTA_CSS?>slider/slider.css" rel="stylesheet">
   

  </head>

  <body class="oculto">   
    
    <div id="mdb-preloader" class="flex-center">
      <img src="<?php echo RUTA_IMG?>ball.svg" alt="" class="animated bounce infinite ball" >
    </div>