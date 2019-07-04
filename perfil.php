<?php
require_once("controladores/funciones.php");
if(!isset($_SESSION["email"])){
    header("location: login.php");
    exit;
}

if (isset($_SESSION["avatar"])){
    $imagen="fotosPerfil/".$_SESSION["avatar"];
  }else{
  $imagen="http://ssl.gstatic.com/accounts/ui/avatar_2x.png";
  }


/* dd($_SESSION); */


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

  <!--Todo el cuerpo es Jumbotron-->
  <div class="jumbotron">

    <div class="container bootstrap snippet">

      <br><br>

      <!--1) Parte del Nombre-->
      <div class="row">
      		<div class="col-md-12">
            <h1><?= $_SESSION["nombre"] ?></h1>
          </div>
        	<!-- <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="logo.png"></a></div> -->
      </div> <!--Parte del Nombre-->

      <!--2) Parte de la infomacion del usuario-->
      <div class="row">

        <!--2.1) Parte de la izquierda-->
    		<div class="col-sx-12 col-md-3"><!--left col-->

          <!-- 2.1.1) Parte de la foto-->
          <div class="text-center">
              <img src="fotosPerfil/<?=$_SESSION["avatar"];?>" class="avatar-2 img-circle img-thumbnail" alt="avatar">
              <h6> Upload a different photo...</h6>
              <input type="file" class="text-center center-block file-upload">
          </div>

          <hr>

          <!-- 2.1.2) Parte de las actividades-->
          <ul class="list-group">
            <li class="list-group-item text-muted" style=" text-align:center;">
              Actividad
            </li>
            <li class="list-group-item text-left ">
                  <i class="fas fa-handshake text-success"></i>
                  <span class="pull-right">Compartido</span> 125
                </li>
            <li class="list-group-item text-left">
                  <i class="fas fa-thumbs-up text-primary"></i>
                  <span class="pull-left"><strong>Me Gusta</strong></span>
                  13
                </li>
            <li class="list-group-item text-left">
                  <i class="fas fa-users text-danger"></i>
                  <span class="pull-left"><strong>Seguidores</strong></span>
                  78
                </li>
          </ul>

          <!-- 2.1.3) Parte de las redes sociales-->
          <div class="panel panel-default" style="margin-top: 15px;">
            <div class="panel-heading">
                  Social Media
            </div>
            <div class="panel-body"  style="margin-top: 5px;">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                  <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-github"></i>
              </a>
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </div>
          </div>

        </div><!--Fin de parte izquierda-->


        </div>

      </div>

    </div> <!--Fin del container-->

  </div> <!--Fin del Jumbotron-->

</body>

</html>
