<?php
session_start();

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

  <!--0)  Header-Navbar -->
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

    <!-- 1) Intro -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 wrap-carousel">
            <div class="offset-md-2 col-md-8">

                <!-- Heading -->
                <h2 class="display-4 font-weight-bold indigo-text pt-5 mb-2">Buenos Aires</h2>

                <!-- Divider -->
                <hr class="hr-light-morado">

                <!-- Description -->
                <h4 class="indigo-text my-4">No te pierdas a la ciudad mas asombrosa del mundo</h4>


            </div>
          </div>

        </div> <!--Fin row-->
      </div> <!--Fin container-->
    </section>

    <!-- 2)Contenido -->
    <main class="mt-5">
        <div class="container">

          <!-- 2.1) Contenido Intro -->
          <section class="text-center">

            <h2 class="mb-5 font-weight-bold">Nuevos lugares, nuevas historias</h2>

            <div class="row d-flex justify-content-center mb-4">
              <div class="col-md-8">

                <p class="grey-text" style="margin-bottom: 59px;">Son los mejores lugares para salir y divertirse. Ya sea en San Telmo, Palermo o Puerto Madero hay numerosas opciones</p>


              </div>

            </div> <!--Grid row-->



            <!--Grid row-->
            <div class="row">

              <div class="col-md-4 mb-5">
                <i class="fa fa-camera-retro fa-4x indigo-text"></i>
                <h4 class="my-4 font-weight-bold">Experiencia</h4>
                <p class="grey-text">En la cuna de unos de los bailes más sensuales del mundo, tomar una clase de tango es una excelente oportunidad para conocer una gran costumbre porteña </p>
              </div> <!--Grid column-->

              <div class="col-md-4 mb-1">
                <i class="fa fa-heart fa-4x indigo-text"></i>
                <h4 class="my-4 font-weight-bold">Felicidad</h4>
                <p class="grey-text">La ciudad siempre tiene opciones para ofrecer. En estas salidas se puede conocer gente y conversar sobre los mismos intereses y gustos</p>
              </div><!--Grid column-->

              <div class="col-md-4 mb-1">
                <i class="fa fa-bicycle fa-4x indigo-text"></i>
                <h4 class="my-4 font-weight-bold">Aventura</h4>
                <p class="grey-text">En estos lugares podés divertirte y vincularte con otras personas. ¿Te gusta jugar al fútbol, andar en rollers o prácticar algún deporte extremo? Buenos Aires ofrece todo esto y mucho más!</p>
              </div><!--Grid column-->

            </div> <!--Grid row-->

          </section> <!-- 2.1) FIn de Contenido Intro -->


          <hr class="my-5">

            <!--Section: Examples-->
            <section id="examples" class="text-center">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold">Categorías</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-3 mb-3">

                        <div class="">
                            <img src="img/Lugares.png" class="" alt="">

                        </div>

                        <h4 class="my-4 font-weight-bold">Lugares</h4>
                        <p class="grey-text"> Conocé los mejores lugares encantadores de nuestra ciudad, acojedores y divertidos para cada tipo de aventura</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-3 mb-3">

                        <div class="">
                            <img src="img/Actividades.png" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Actividades</h4>
                        <p class="grey-text">Tenemos un cronograma de actividades aplciados para cada persona en base a lo que más te interece conocer de esta bella ciudad</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-3 col-md-3 mb-3">

                        <div class="">
                            <img src="img/gastronomia.png" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Gastronomia</h4>
                        <p class="grey-text">Las comidas mas ricas te estan esperando, no pierdas la oportunidad de deleitarte con estos sabores</p>

                    </div>
                    <div class="col-lg-3 col-md-3 mb-3">

                        <div class="">
                            <img src="img/hoteles.png" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Hoteles</h4>
                        <p class="grey-text">Entre otros tenemos hoteles de 5, 4 y 3 estrellas ansiosos por conocerte, ingresa aquí y veras que descuentos tenemos para tí</p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Examples-->

            <hr class="my-5">

            <!--Section: Gallery-->
            <section id="gallery">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center">Momentos inolvidables</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade carousel-fade" data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner z-depth-1-half" role="listbox">
                                <!--First slide-->
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="http://www.paraviajantes.com/wp-content/uploads/2014/10/buenos-aires-city-wallpaper-hd-103.jpg"
                                        alt="First slide">
                                </div>
                                <!--/First slide-->
                                <!--Second slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://1.bp.blogspot.com/-JS37nfdBZg8/VZmWDlbY_sI/AAAAAAABGNY/atjEZ-I-srQ/s1600/BUENOS%2BAIRES%2B2.jpg"
                                        alt="Second slide">
                                </div>
                                <!--/Second slide-->
                                <!--Third slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://www.argentinaportal.com/wp-content/uploads/2019/04/bsas.jpg"
                                        alt="Third slide">
                                </div>
                                <!--/Third slide-->
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">

                        <!--Excerpt-->
                        <a href="" class="teal-text">
                        <h6 class="pb-1"><i class="fa fa-heart"></i><strong> Vistas incríbles </strong></h6>
                        </a>
                        <h4 class="mb-3"><strong>Fotografías tomadas por nuestros clientes</strong></h4>
                        <p>Buenos Aires, ciudad hermosa...es una bellísima ciudad que está llena de agradables rinconcitos para tomar café, ver bailar, recorrer el antiguo puerto, los jardines de las Bellas Artes y el famoso caminito sensacional. Las grandes avenidas muy ad hoc con París te hacen sentir bien, los precios cómodos.</p>

                        <p>destaca por su cantidad de espacios verdes. Casi siempre bien cuidados. Es una ciudad ideal para conocer caminando. Las mejores zonas para hacerlo son Recoleta, Palermo, La Boca, San Telmo... entre otras. Vale la pena conocer los parques y dedicarles tiempo.</p>
                        <p>por <a><strong>Matias Clark</strong></a>, 26/06/2019</p>
                        <a class="btn btn-primary btn-md" href="lugares.php">Ver mas</a>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Gallery-->
    </main>
    <!--Main layout-->

    <!-- Footer -->
    <footer class="page-footer font-small unique-color-dark">

        <!-- Social buttons -->
        <div class="indigo">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 white-text">Conectate con nosotros en nuestras redes sociales</h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="fb-ic ml-0">
                            <i class="fab fa-facebook white-text mr-4"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="tw-ic">
                            <i class="fab fa-twitter white-text mr-4"> </i>
                        </a>
                        <!--Google +-->
                        <a class="gplus-ic">
                            <i class="fab fa-google-plus white-text mr-4"> </i>
                        </a>
                        <!--Linkedin-->
                        <a class="li-ic">
                            <i class="fab fa-linkedin white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fab fa-instagram white-text mr-lg-4"> </i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </div>
        </div>
        <!-- Social buttons -->

        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>BAST</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Empresa de turismo </p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Categorías</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Lugares</a>
                    </p>
                    <p>
                        <a href="#!">Actividades</a>
                    </p>
                    <p>
                        <a href="#!">Gastronomia</a>
                    </p>
                    <p>
                        <a href="#!">Hoteles</a>
                    </p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Ayuda</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Tu cuenta</a>
                    </p>
                    <p>
                        <a href="#!">Como registrarte</a>
                    </p>
                    <p>
                        <a href="#!">Acerca de nosotros</a>
                    </p>

                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Contacto</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home"></i></i> Buenos Aires, Argentina</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> info@bast.com</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> + 5411 23460205</p>

                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
            <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com</a>
        </div>
         <!-- Copyright -->

    </footer>
    <!-- Footer -->
  </html>
