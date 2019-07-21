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
                                 <a class="nav-link" href="actividades.php">Actividades</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="gastronomia.php">Gastronomia</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="hoteles.php">Hoteles</a>
                             </li>
                             <li class="nav-item">
                                 <a class="nav-link" href="lugares.php">Lugares</a>
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
