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

  <!--Parte 1 del header-navbar -->
  <?php require 'assets/navbar.php'; ?>

  <!--Parte 2 del y contenido Jumbotron-->
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

        <!--2.1) Parte de la derecha-->
        <div class="col-md-4 offset-md-1">

          <div class="tab-content">

            <div class="tab-pane active" id="home">

              <hr>

              <form class="form" action="##" method="post" id="registrationForm">

                  <div class="form-group">
                    <div class="col-xs-6">
                                <label for="first_name"><h4>Nombre</h4></label>
                                <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any." value="<?= $_SESSION["nombre"] ?>">
                            </div>
                  </div>

                  <div class="form-group">

                            <div class="col-xs-6">
                                <label for="phone"><h4>Phone</h4></label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any." value="">
                            </div>

                        </div>

                  <div class="form-group">
                            <div class="col-xs-6">
                               <label for="mobile"><h4>Mobile</h4></label>
                                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                            </div>
                        </div>

                  <div class="form-group">

                            <div class="col-xs-6">
                                <label for="email"><h4>Email</h4></label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email." value="<?= $_SESSION["email"] ?>">
                            </div>
                        </div>

                  <div class="form-group">

                            <div class="col-xs-6">
                                <label for="password"><h4>Password</h4></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                            </div>
                        </div>

                  <div class="form-group">

                            <div class="col-xs-6">
                              <label for="password2"><h4>Verify</h4></label>
                                <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                            </div>
                        </div>

                  <div class="form-group">
                             <div class="col-xs-12">
                                  <br>
                                	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                                 	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                              </div>
                        </div>

                </form>

              <hr>

            </div><!--/tab-pane-->

          </div><!--/tab-content-->

        </div><!--/Parte de la derecha terminada--->

      </div> <!--row-->

      </div>

    </div> <!--Fin del container-->

  </div> <!--Fin del Jumbotron-->

  <!--Parte 3 del footer -->
  <?php require 'assets/footer.php'; ?>


</body>

</html>
