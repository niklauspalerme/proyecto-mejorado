
<?php

require_once("helpers.php");
require_once("controladores/funciones.php");

if($_POST){
  $errores = validar($_POST,'registro');
  if(count($errores)== 0){
    $avatar = armarAvatar($_FILES);
    $usuario = armarUsuario($_POST,$avatar);
    guardarUsuario($usuario);
    header("location: login.php");
    exit;
  }
}

if (isset($_SESSION["avatar"])){
  $imagen="fotosPerfil/".$_SESSION["avatar"];
}else{
$imagen="http://ssl.gstatic.com/accounts/ui/avatar_2x.png";
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

  <title>BAST</title>

</head>

<body>

  <!--Parte 1 Header-Navbar -->
  <header>
    <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar"  style="background-color: indigo;">

        <div class="container">

              <!-- Navbar brand -->
              <a class="navbar-brand" href="index.php" target="_blank">
                <strong>BAST</strong>
              </a>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <!-- Collapsible content -->
              <div class="collapse navbar-collapse" id="navbarNav">

                <!-- Links Parte Izquier -->
                <ul class="navbar-nav mr-auto smooth-scroll">
                             <li class="nav-item">
                                 <a class="nav-link" href="lugares.php">Lugares</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="actividades.php">Actividades</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="gastronomia.php">Gastronomia</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="hoteles.php">Hoteles</a>
                             </li>

                             <li class="nav-item">
                                 <a class="nav-link" href="preguntas.php">FAQ
                                 <i class="far fa-question-circle"></i>
                                 </a>
                             </li>

                         </ul>

                <!-- Links Parte dere -->
                <ul class="navbar-nav nav-flex-icons">



                  <!-- USUARIOS -->
                  <!-- SI ESTA SIN LOGUEAR MOSTRAR ESTO -->

                  <!--  USUARIO LOGUEADO MOSTRAR ESTO-->
                  <li class="nav-item avatar dropdown">

                    <!-- Foto de usuario -->
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink-40" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <img src="<?= $imagen ;?>" class="rounded-circle z-depth-0 avatar" alt="avatar">
                    </a>

                    <!-- Parte del menu dropdown -->
                    <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary" aria-labelledby="navbarDropdownMenuLink-40" style="background-color: #3f51b5ad;">

                      <a class="dropdown-item nav-link" href="perfil.php">
                        <i class="fas fa-address-card"></i>
                        Perfil y Cuenta
                      </a>

                      <a class="dropdown-item nav-link" href="#">
                        <i class="fas fa-cogs"></i>
                        Preferencias
                      </a>

                      <div class="dropdown-divider"></div>

                      <a class="dropdown-item nav-link" href="logout.php">
                      <i class="fas fa-sign-out-alt"></i>
                      Salir
                      </a>

                    </div>

                  </li>

                  <!--Login-->
                  <?php if(!isset($_SESSION["email"])):?>
                  <li class="nav-item">
                      <a class="nav-link" href="login.php">
                        <i class="fas fa-sign-in-alt"></i>
                        Login
                        <span class="sr-only">(current)</span>
                      </a>
                  </li>
                <?php endif; ?>

                </ul>

              </div>
                <!-- Collapsible content -->

                 </div>
                 <!-- Container -->

            </nav> <!-- Fin de Navbar-->
  </header>

<div class="jumbotron">
  <h1 class="display-4">Registrate</h1>
  <p class="lead">Para poder realizar reservas y busquedas personalizadas.</p>
  <hr class="my-4">


  <div class="container">
  <div class="row justify-content-center">
  <div>

<!-- FORMULARIO REGISTRO -->
  <form class="form-signin" action="" method="POST" enctype= "multipart/form-data"  >

  <?php if(isset($errores)) :?>
         <ul class="alert alert-danger">
            <?php foreach ($errores as $key => $value) :?>
                <li> <?=$value ?></li>
            <?php endforeach; ?>

         </ul>
      <?php endif; ?>

  <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-envelope"></i></div>
        </div>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="email@ejemplo.com">

  </div>
<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-lock"></i></div>
        </div>
        <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
      </div>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-lock"></i></div>
        </div>
        <input type="password" class="form-control" id="Password" name="repassword" placeholder="RePassword">
      </div>

<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
        </div>
        <input type="text" class="form-control" id="user" name="nombre" aria-describedby="userHelp"placeholder="Nombre de Usuario">

</div>
<div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-user"></i></div>
        </div>
        <input type="file" class="custom-file-input" name="avatar"id="customFileLang" lang="es">
  <label class="custom-file-label" for="customFileLang">Subi tu avatar</label>

</div>

<div class="form-group form-check">
  <label>
      <input type="checkbox" value="remember-me"> Recordarme
  </label>
</div>
<button class="btn btn-lg btn-primary btn-block" type="submit">Registrarse</button>
<br>
<p class="text-center"><a class="mt-5 mb-3" href="login.php">Ya tengo cuenta!</a></p>
<p class="mt-3 mb-3 text-muted text-center" style="text-align:center;">&copy; 2019</p>
</form>
<!-- FIN FORMULARIO REGISTRO -->
</div>
  </div>
  </div>

  <p class="text-center">Recuerda que regitrandote estas aceptando las politicas de privacidad..</p>

</div>
</body>

<footer> <!-- Ini footer -->
  <div class="card text-center">
    <div class="card-header">
      BAST
    </div>
    <div class="card-body">
      <h5 class="card-title">Políticas de privacidad</h5>
      <p class="card-text"></p>

    </div>
    <div class="card-footer text-muted">

    </div>
  </div>
</footer>  <!-- Fin footer -->
</html>
