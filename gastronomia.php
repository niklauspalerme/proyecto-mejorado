
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
                           <h1 class="display-4 col-md-12 text-center morado">Restaurantes y lugares fachas</h1>
                           <hr class="my-4 col-md-11" style="background-color: indigo;">
                           <p class="lead col-md-12 text-center" style="color:indigo;">Conoce cada uno de los restaurantes o lugares más de moda de la ciudad y de su increíble comida que te va dejar ganas de regresar. </p>
                       </div>
                   </div>
             </div> <!--jumbotron-->
           </div> <!--col-md-12-->

         </div><!--row -->

       </div> <!--container-->
   </div>

    <!--Parte de las cards -->
    <div class="container">
      <div class="row ">
        <div class="card-deck">

          <?php for ($i=0; $i < 8 ; $i++): ?>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card" style="margin-bottom:15px">
              <img src="https://scontent.faep9-1.fna.fbcdn.net/v/t1.0-9/13435325_1766561473589930_8528282947414924497_n.jpg?_nc_cat=108&_nc_ht=scontent.faep9-1.fna&oh=8b3655b05b90d5ed1b3ce52b516b4cf3&oe=5D9989F7" class="card-img-top" alt="...">
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

    </body>

    <!--Parte X del footer -->
    <?php require 'assets/footer.php'; ?>

  </body>


</html>
