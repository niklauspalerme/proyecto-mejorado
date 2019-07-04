<?php
require_once("controladores/funciones.php");
if(!isset($_SESSION["email"])){
    header("location: login.php");
    exit;
}

if(isset($_SESSION["avatar"])){
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

    <!--Parte 2 del Jumbotron-->

    <div class="wrap-jumbotron" style="margin-top: 100px;">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="jumbotron" style=" background-image: url('img/carrousel1.jpg');">
                    <div class="container">
                        <div class="row">
                            <h1 class="display-4 col-md-12 text-center morado">Lugares para visitar</h1>
                            <hr class="my-4 col-md-11" style="background-color: indigo;">
                            <p class="lead col-md-12 text-center" style="color:indigo;">Mira todos los lugares que puedes visitar en la hermosa ciudad porteña. Déjate sorprender por la magia de la Ciudad de Buenos Aires y explora cada uno de sus rincones. </p>
                        </div>
                    </div>
              </div>
            </div>

          </div>

        </div>
    </div>

    <!--Parte de las cards -->
    <div class="container">
      <div class="row ">
        <div class="card-deck">

          <?php for ($i=0; $i < 8 ; $i++): ?>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="margin-bottom:15px">
              <img src="https://visitas.casarosada.gob.ar/img/bg_casarosada.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
              <div class="card-body">
                <a href="#" class="card-link">Añadir +</a>
                <a href="#" class="card-link">Mas Info +</a>
              </div>
            </div>
          </div>
           <?php endfor; ?>


         </div> <!--Fin card-deck -->
       </div> <!--Fin row -->
     </div> <!--Fin container -->

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

  </body>

</html>
