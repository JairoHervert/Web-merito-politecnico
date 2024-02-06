<nav class="navbar navbar-expand-md bg-body-tertiary px-2">

   <div class="container-fluid">
      <a class="navbar-brand" href="index.php?vista=home_admin">
         <div class="d-flex align-items-center me-2">
            <img class="logo_imagen" src="img/mapache.png" alt="logo imagen">
            <div class="ms-3 d-flex flex-column">
               <H5 class="mt-2">Distinciones al</H5>
               <H5 class="">Mérito Politécnico</H5>
            </div>
         </div>
      </a>

      <!-- Este boton de 3 lineas aparece en vistas de telefono -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarScroll">
         <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 300px;">
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Usuarios
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Nuevo</a></li>
                  <li><a class="dropdown-item" href="#">Lista</a></li>
                  <li><a class="dropdown-item" href="#">Buscar</a></li>
               </ul>
            </li> <!-- Fin del drop de usuarios -->

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Implementos
               </a>
               <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Nuevo</a></li>
                  <li><a class="dropdown-item" href="#">Lista</a></li>
                  <li><a class="dropdown-item" href="#">Buscar</a></li>
               </ul>
            </li> <!-- Fin del drop de categorias -->
         </ul>

         <div class="buttons">
            <button class="btn btn-outline-primary">Mi cuenta</button>
            <button class="btn btn-outline-secondary" onclick="window.location.href='index.php?vista=logout'">Salir</button>
         </div>

      </div>
   </div>

</nav>