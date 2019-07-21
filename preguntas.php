<?php

if (isset($_SESSION["avatar"])){
  $imagen="fotosPerfil/".$_SESSION["avatar"];
}else{
$imagen="http://ssl.gstatic.com/accounts/ui/avatar_2x.png";
}

require_once('autoload.php');
$preguntas=Consulta::MostrarPreguntas($bd,"questions");
var_dump($preguntas);

$arrayPyR= [
              0=>["titulo"=>"¿Quiénes somos?",
                  "texto"=>"Somos una website que se encarga en ayudar tanto a lugareños como extranjeros para que puedan conocer un poco más acerca la linda ciudad de Buenos Aires y puedan aprovechar cada rincón que esta maravillosa ciudad ofrece al mundo.",
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

  <!--Pagina de estilo preguntas-->
  <link rel="stylesheet" href="css/preguntas.css">


  <title>BAST</title>

</head>

<body>


  <!--Parte 1 del header-navbar -->
  <?php require 'assets/navbar.php'; ?>

  <!--Parte 2 del Jumbotron Titulo-->
  <div class="wrap-jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="jumbotron" style=" background-image: url('img/carrousel1.jpg');">
                  <div class="container">
                      <div class="row">
                          <h1 class="display-4 col-md-12 text-center morado">Preguntas frecuentes</h1>
                          <hr class="my-4 col-md-11" style="background-color: indigo;">
                          <p class="lead col-md-12 text-center" style="color:indigo;">Esta sesión esta dedica da las preguntas mas frecuentes que nos hacen nuestros visitantes Esta sesión esta dedica da las preguntas mas frecuentes que nos hacen nuestros visitantes. </p>
                      </div>
                  </div>
            </div> <!--jumbotron-->
          </div> <!--col-md-12-->

        </div><!--row -->

      </div> <!--container-->
  </div>

  <!-- Parte 3 Preguntas-->
  <div class="wrap-preguntas">
    <div class="container">
      <div class="row">

        <?php for($i=0; $i<count($arrayPyR); $i++): ?>
          <?php if($i%2==0):?>
        <div class="media">
          <img src="<?=$arrayPyR[$i]["img"]?>" class="mr-3 col-md-2 img-preguntas" alt="Numero">
          <div class="media-body col-md-10">
            <h5 class="mt-0 morado"><?=$arrayPyR[$i]["titulo"]?>?</h5>
            <?=$arrayPyR[$i]["texto"]?>
          </div>
        </div>
        <br><br>
        <?php else: ?>
          <div class="media">
            <div class="media-body col-md-10 wrap-contenido">
              <h5 class="mt-0 azul-footer"><?=$arrayPyR[$i]["titulo"]?>?</h5>
              <?=$arrayPyR[$i]["texto"]?>
            </div>
            <img src="<?=$arrayPyR[$i]["img"]?>" class="mr-3 col-md-2 img-preguntas" alt="Numero">
          </div>
          <br><br>
        <?php endif ?>
      <?php endfor; ?>
      </div>
    </div>

  </div>

  <!--Parte 4 del footer -->
  <?php require 'assets/footer.php'; ?>

</body>

</html>
