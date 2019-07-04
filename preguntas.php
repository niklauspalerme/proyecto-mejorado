<?php

if (isset($_SESSION["avatar"])){
  $imagen="fotosPerfil/".$_SESSION["avatar"];
}else{
$imagen="http://ssl.gstatic.com/accounts/ui/avatar_2x.png";
}


$arrayPyR= [
              0=>["titulo"=>"¿Quiénes somos?",
                  "texto"=>"Somos una website que se encarga en ayudar tanto a lugareños como extranjeros para que puedan conocer un poco mas la linda ciudad de Buenos Aires y puedan aprovechar cada rincon, eventos y sitios que esta maravillosa ciudad ofrece al mundo ",
                  "img"=> "img/Pregf_01.png"],

              1=>["titulo"=> "¿Que podes hacer aqui en BAST?",
                  "texto"=> "Aqui podras organizar una agenda con los sitios que querés visitar como tambien ver sus horarios/días de apertura y cierre, como tambien ver que comida esta de moda y actividades. ",
                  "img"=>"img/Pregf_02.png"],

              2=>["titulo"=>"¿Que es la sección LUGARES?",
                      "texto"=>"En esta sección de la pagina podaras encontrar información de cada uno de los lugares turisticos mas visitados de Bueno Aires Ciudad Capital , como tambien podras ver un breve resumen de lo que te ofrece, su ubicación, precio de entras y sus horarios de aperuta y cierre",
                      "img"=>"img/Pregf_03.png"],

              3=>["titulo"=> "¿Que podes hacer aqui en BAST?",
                  "texto"=> "Aqui podras organizar una agenda con los sitios que querés visitar como tambien ver sus horarios/días de apertura y cierre, como tambien ver que comida esta de moda y actividades. ",
                  "img"=> "img/Pregf_04.png"],

              4=>["titulo"=>"Lorem  Ipsumm",
                  "texto"=>"Somos una website que se encarga en ayudar tanto a lugareños como extranjeros para que puedan conocer un poco mas la linda ciudad de Buenos Aires y puedan aprovechar cada rincon, eventos y sitios que esta maravillosa ciudad ofrece al mundo ",
                  "img"=> "img/Pregf_05.png"],
              5=>["titulo"=> "Lorem  Ipsumm",
                  "texto"=> "Aqui podras organizar una agenda con los sitios que querés visitar como tambien ver sus horarios/días de apertura y cierre, como tambien ver que comida esta de moda y actividades. ",
                  "img"=> "img/Pregf_06.png"],

              6=>["titulo"=>"Lorem  Ipsumm",
                      "texto"=>"En esta sección de la pagina podaras encontrar información de cada uno de los lugares turisticos mas visitados de Bueno Aires Ciudad Capital , como tambien podras ver un breve resumen de lo que te ofrece, su ubicación, precio de entras y sus horarios de aperuta y cierre",
                      "img"=> "img/Pregf_07.png"],

              7=>["titulo"=> "¿BAST vas mas alla de CABA?",
                  "texto"=> "BAST esta enfocado en estimular e incrementar el turismo en Buenos Aires Ciudad Capital , así que todo su contenido va estar concentado dentro de CABA",
                  "img"=> "img/Pregf_08.png"]

];




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


  <!--El jumbotron de las preguntas-->
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <div class="row">
            <h1 class="display-4 col-md-12">Preguntas Frecuentes</h1>
            <hr class="my-4 col-md-12">
            <p class="lead col-md-12">Esta sesión esta dedica da las preguntas mas frecuentes que nos hacen nuestros visitantes Esta sesión esta dedica da las preguntas mas frecuentes que nos hacen nuestros visitantes</p>
        </div>
    </div>
  </div>

  <!--Preguntas-->
  <div class="container">
    <div class="row">

      <?php for($i=0; $i<count($arrayPyR); $i++): ?>
        <?php if($i%2==0):?>
      <div class="media">
        <img src="<?=$arrayPyR[$i]["img"]?>" class="mr-3 col-md-2" alt="Numero">
        <div class="media-body col-md-10">
          <h5 class="mt-0"><?=$arrayPyR[$i]["titulo"]?>?</h5>
          <?=$arrayPyR[$i]["texto"]?>
        </div>
      </div>
      <br><br>
      <?php else: ?>
        <div class="media">
          <div class="media-body col-md-10">
            <h5 class="mt-0"><?=$arrayPyR[$i]["titulo"]?>?</h5>
            <?=$arrayPyR[$i]["texto"]?>
          </div>
          <img src="<?=$arrayPyR[$i]["img"]?>" class="mr-3 col-md-2" alt="Numero">
        </div>
        <br><br>
      <?php endif ?>
    <?php endfor; ?>

    </div>
  </div>

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
