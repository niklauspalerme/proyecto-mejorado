<?php

  require_once("controladores/funciones.php");

  if (isset($_SESSION["avatar"])){
    $imagen="fotosPerfil/".$_SESSION["avatar"];
  }else{
  $imagen="http://ssl.gstatic.com/accounts/ui/avatar_2x.png";
  }

  if($_POST){

    $errores = validar($_POST,'login');

    if(count($errores) == 0){

      $usuario = buscarPorEmail($_POST["email"]);

      if($usuario == null){
        $errores["email"]= "Usuario / Contraseña invalidos";
      }else{
        if(password_verify($_POST["password"],$usuario["password"])==false){
          $errores["password"]="Usuario / Contraseña invalidos";
        }else {

          seteoUsuario($usuario,$_POST);
          if(validarAcceso()){
            header("location: perfil.php");
            exit;
          }else{
            header("location: login.php");
            exit;
          }

        }
      }

      }
  }

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.3/js/mdb.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Chivo&display=swap" rel="stylesheet">

    <!--Nuestra pagina de estilo-->
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/login.css">

  <title>BAST</title>

</head>

  <body>

    <!--Parte 1 del header-navbar -->
    <?php require 'assets/navbar.php'; ?>

    <!--Parte del Jumbotron Formulario-->
    <div class="container container-login">
      <div class="jumbotron">
        <div class="container">
          <div class="row text-center">
            <h1 class="display-4 col-md-12 h1-logueate">Logueate</h1>

            <p class="lead col-md-12">Para poder realizar reservas y busquedas personalizadas.</p>

            <hr class="my-4 col-md-11">

          </div>
        </div>


        <div class="container"> <!-- Ini div container-->
          <div class="row justify-content-center"> <!-- Ini div row-->
            <div> <!-- Ini div -->

              <!-- FORMULARIO REGISTRO -->
              <form class="form-signin" method="POST" action="">
                <!-- <img class="mb-4" src="img/bootstrap-solid.svg" alt="" width="72" height="72"> -->
                <!-- <h1 class="h3 mb-3 font-weight-normal">Loguearse..</h1> -->
                <?php
                if(isset($errores)):?>
                  <ul class="alert alert-danger">
                    <?php foreach ($errores as $key => $value) :?>
                      <li><?=$value;?></li>
                    <?php endforeach;?>
                  </ul>

                <?php endif;?>

                <!--Email-->
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fas fa-envelope"></i>
                      </div>
                  </div>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="email@ejemplo.com" value="">
                </div>

                <!--Password-->
                <div class="input-group mb-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      <i class="fas fa-lock"></i>
                    </div>
                  </div>
                  <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
                </div>

                <!--Recuerdame-->
                <div class="form-group form-check">
                  <label>
                      <input type="checkbox" value="remember-me"> Recordarme
                  </label>
                </div>

                <!--Boton loguerase-->
                <button class="btn button-login btn-lg btn-block" type="submit">
                  Loguearse
                </button>

                <p class="mt-3 mb-3 text-center"><a href="signin.php">Registrarse </a></p>

                <p class="mt-3 mb-3 text-muted text-center">&copy; 2019</p>

              </form>  <!-- FIN FORMULARIO REGISTRO -->

            </div><!-- fin div -->
          </div> <!-- fin div row-->
        </div> <!-- fin div container-->

        <!--   <p>Recuerda que regitrandote estas aceptando las politicas de privacidad..</p> -->

      </div>  <!--Fin del Jumbotron Formulario-->
    </div>

    <!--Parte X del footer -->
    <?php require 'assets/footer.php'; ?>

</body>

</html>
