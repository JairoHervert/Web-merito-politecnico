<nav class="navbar navbar-expand-md bg-body-tertiary px-2">

   <div class="container-fluid">
      <a class="navbar-brand" href="index.php?vista=home">
         <div class="d-flex align-items-center me-2">
            <img class="logo_imagen" src="img/mapache.png" alt="logo imagen">
            <div class="ms-3 d-flex flex-column">
               <h5 class="mt-2">Distinciones al</h5>
               <h5>Mérito Politécnico</h5>
            </div>
         </div>
      </a>

      <!-- Este boton de 3 lineas aparece en vistas de telefono -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarScroll">
         <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 300px;">
            <li class="nav-item ms-3">
               <a class="nav-link" data-bs-toggle="modal" data-bs-target="#staticBackdrop" role="button">
                  Mi información
               </a>
            </li> <!-- Sobre el IPN -->

            <li class="nav-item ms-3">
               <a class="nav-link" href="#preguntas_frecuentes" role="button">
                  Preguntas frecuentes
               </a>
            </li> <!-- Sección de preguntas frecuentes -->
         </ul>

         <div class="buttons">
            <button class="btn btn-outline-secondary" onclick="window.location.href='index.php?vista=logout'">Salir</button>
         </div>

      </div>
   </div>

</nav>