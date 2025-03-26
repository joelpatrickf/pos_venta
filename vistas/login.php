<!DOCTYPE html>


<html lang="en" data-coreui-theme="dark">
  <head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>



  </head>

  <body>
    <div class="bg-body-tertiary min-vh-100 d-flex flex-row align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card-group d-block d-md-flex row">

              <div class="card col-md-7 p-4 mb-0">
                <div class="card-body">
                  <h1>Login</h1>
                  <p class="text-body-secondary">Ingrese sus credenciales</p>
                  <div class="input-group mb-3"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="vistas/assets/node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                      </svg></span>
                    <input class="form-control" id="iptUsuario" type="text" placeholder="Correo Electrónico">
                  </div>
                  <div class="input-group mb-4"><span class="input-group-text">
                      <svg class="icon">
                        <use xlink:href="vistas/assets/node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                      </svg></span>
                    <input class="form-control" id="iptPassword" type="password" placeholder="Contraseña">
                  </div>
                  <div class="row">
                    <div class="col-6">
                      <button class="btn btn-primary px-4" id="btnLogin" type="button">Entrar</button>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.js" ></script>    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->

  </body>
</html>


<script>
  $(document).ready(function(){
    $("#btnLogin").on('click',function(e){
      e.preventDefault();
      var usuario = $("#iptUsuario").val();
      var pass = $("#iptPassword").val();
      $.ajax({
        url:"ajax/usuarios.ajax.php",
        type: "POST",
        data: {
          'accion': 2,
          'usuario': usuario ,
          'clave': pass
        },
        dataType: 'json',
        success:function(respuesta){
            console.log(respuesta);            
            // if (respuesta === 'no'){
            //   //toastr["error"](" Credenciales Incorrectas", "!Atención!");
            //   alert("credenciall incorrect");
            //   $("#iptUsuario").val("");
            //   $("#iptPassword").val("");
            //   return;
              
            // }else{
            //   var rutaJs = '<?php echo RUTA ?>';
            //   window.location = rutaJs;
                
            // }
        }
    });
    });  
  }); 
  </script>