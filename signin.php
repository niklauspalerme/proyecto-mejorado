
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

  <link rel="stylesheet" href="css/signin.css">

  <title>BAST</title>

</head>

<body>

  <!--Parte 1 del header-navbar -->
  <?php require 'assets/navbar.php'; ?>

  <div class="container container-signin">
    <div class="jumbotron">
      <div class="container">
        <!--Intro-->
        <div class="row row justify-content-md-center">
          <h1 class="display-4 col-md-12 h1-registrate">Registrate</h1>
          <p class=" col-md-12 p-signin">Para poder realizar reservas y busquedas personalizadas.</p>
          <hr class=" col-md-7 my-4">




        </div> <!--row-->
        <!--Form-->
        <div class="row">
          <form class="form-signin row justify-content-md-center" action="" method="POST" enctype= "multipart/form-data"  >

          <!--Lista de errores--->
          <div class="col-md-7">
            <?php if(isset($errores)) :?>
              <ul class="alert alert-danger">
                <?php foreach ($errores as $key => $value) :?>
                  <li> <?=$value ?></li>
                <?php endforeach; ?>
              </ul>
            <?php endif; ?>
          </div>

        <div class="input-group col-md-7">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-envelope"></i>
            </div>
          </div>
          <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="email@ejemplo.com">
        </div>

        <div class="input-group col-md-7">
          <div class="input-group-prepend">
            <div class="input-group-text">
              <i class="fas fa-lock"></i>
            </div>
          </div>
          <input type="password" class="form-control" id="Password" name="password" placeholder="Password">
      </div>

      <div class="input-group col-md-7">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-lock"></i>
          </div>
        </div>
        <input type="password" class="form-control" id="Password" name="repassword" placeholder="RePassword">
      </div>

      <div class="input-group col-md-7">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fas fa-user"></i>
          </div>
        </div>
        <input type="text" class="form-control" id="user" name="nombre" aria-describedby="userHelp"placeholder="Nombre de Usuario">
      </div>


      <div class="input-group col-md-7">
        <div class="custom-file">
          <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-user"></i></div>
          </div>
          <input type="file" class="custom-file-input" name="avatar"id="customFileLang" lang="es">
          <label class="custom-file-label" for="customFileLang">
            Subi tu avatar
          </label>
        </div>

</div>

      <div class="form-group form-check col-md-7">
        <label>
            <input type="checkbox" value="remember-me"> Recordarme
        </label>
      </div>

      <div class="col-md-7">
        <button class="btn btn-lg btn-morado" type="submit">Registrarse</button>
      </div>

</form>
        </div>
      </div> <!--container-->
    </div> <!--jumbotron-->

  </div>

  <!--Parte X del footer -->
  <?php require 'assets/footer.php'; ?>



</body>


</html>
