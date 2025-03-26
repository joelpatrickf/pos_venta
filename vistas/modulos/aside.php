<?php 
if(isset($_SESSION)){ }else{ session_start(); } 
    //require_once "constantes/constantes.php";
    //$menuUsuario = UsuariosControlador::ctrObtenerMenuUsuario($_SESSION['usuario']->au_inc);
    // echo "<pre>";
    // print_r($menuUsuario);
    // echo "<pre>";
    // exit;

?>

    <div class="sidebar sidebar-dark sidebar-fixed border-end" id="sidebar">
      
      <div class="sidebar-header border-bottom">
        <div class="sidebar-brand">
          <svg class="sidebar-brand-full" width="88" height="32" alt="CoreUI Logo">
            <use xlink:href="dist/assets/brand/coreui.svg#full"></use>
          </svg>
          <svg class="sidebar-brand-narrow" width="32" height="32" alt="CoreUI Logo">
            <use xlink:href="dist/assets/brand/coreui.svg#signet"></use>
          </svg>
        </div>
        <button class="btn-close d-lg-none" type="button" data-coreui-theme="dark" aria-label="Close" onclick="coreui.Sidebar.getInstance(document.querySelector(&quot;#sidebar&quot;)).toggle()">
        </button>
      </div>

      <ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
        <li class="nav-item"><a class="nav-link" href="index.html">
            <svg class="nav-icon">
              <use xlink:href="vistas/assets/node_modules/@coreui/icons/sprites/free.svg#cil-speedometer"></use>
            </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a>
          </li>

        <li class="nav-item"><a class="nav-link" href="colors.html">
            <svg class="nav-icon">
              <use xlink:href="vistas/assets/node_modules/@coreui/icons/sprites/free.svg#cil-drop"></use>
            </svg> Colors</a>
        </li>
        <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
            <svg class="nav-icon">
              <use xlink:href="vistas/assets/node_modules/@coreui/icons/sprites/free.svg#cil-puzzle"></use>
            </svg> Base</a>
          <ul class="nav-group-items compact">
            <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"><span class="nav-icon-bullet"></span></span> Accordion</a>
            </li>
          </ul>
        </li>
      </ul>

    </div>