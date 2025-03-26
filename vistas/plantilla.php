<?php 
session_start();
require_once "constantes.php";
if(isset($_GET['cerrar_sesion']) && $_GET['cerrar_sesion'] == 1){
    header('location:'.RUTA);
    session_unset();
    session_destroy();        
}

$v_id_modulo = isset($_SESSION['usuario']->id_perfil)?$_SESSION['usuario']->id_perfil:"";

?>
<!DOCTYPE html>


<html lang="en">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>Pos-Venta</title>


    <link rel="manifest" href="vistas/assets/dist/assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="dist/assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Vendors styles-->
    <link rel="stylesheet" href="vistas/assets/node_modules/simplebar/dist/simplebar.css">
    <link rel="stylesheet" href="vistas/assets/dist/css/vendors/simplebar.css">
    <!-- Main styles for this application-->
    <link href="vistas/assets/dist/css/style.css" rel="stylesheet">
    <!-- We use those styles to show code examples, you should remove them in your application.-->
    <link href="vistas/assets/dist/css/examples.css" rel="stylesheet">
    <script src="vistas/assets/dist/js/config.js"></script>
    
    <link href="vistas/assets/node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css" rel="stylesheet">



    <!--  ------------------------------- plugins JS ------------------------------- -->
    
    <!-- CoreUI and necessary plugins-->
    <script src="vistas/assets/node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
    <script src="vistas/assets/node_modules/simplebar/dist/simplebar.min.js"></script>
    
    <!-- Plugins and scripts required by this view-->
    <script src="vistas/assets/node_modules/chart.js/dist/chart.umd.js"></script>
    <script src="vistas/assets/node_modules/@coreui/chartjs/dist/js/coreui-chartjs.js"></script>
    <script src="vistas/assets/node_modules/@coreui/utils/dist/umd/index.js"></script>

    

  </head>
  <?php if(isset($_SESSION['usuario'])): ?>

    <body>
      <?php include "modulos/aside.php";?>
      
      <div class="wrapper d-flex flex-column min-vh-100">
        <?php include "modulos/header.php";?>

        <div class="body flex-grow-1">
          <div class="container-lg px-4">
            <?php include "dashboard.php";?>

          </div>
        </div>
        

        
      </div>
      <script src="vistas/assets/dist/js/main.js"></script>
      <script src="vistas/assets/dist/js/color-modes.js"></script>
  </body>

<?php else: ?>
    <body>
       <?php include "vistas/login.php";?> 
    </body>
<?php endif; ?>  
</html>
