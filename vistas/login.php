<section class="vh-100">
   <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
         <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="img/premios.jpg" class="img-fluid" alt="Sample image">
         </div>

         <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

            <div class="form-rest"> <!-- Aqui se va a mostrar la respuesta del ajax.js -->
            </div>

            <!-- El action vacio porque se va a mandar a este mismo PHP -->
            <form class="login" action="" method="POST" autocomplete="off">
               <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  <p class="lead fw-normal mb-0 me-3">Igresa con CURP y contraseña</p>
                  <button type="button" class="btn btn-primary btn-floating mx-1">
                     <i class="bi bi-person-circle"></i>
                  </button>
               </div>

               <div class="divider d-flex align-items-center my-4">
                  <p class="text-center fw-bold mx-3 mb-0">O</p>
               </div>

               <!-- CURP input -->
               <div class="form-outline mb-4">
                  <input type="text" id="form_curp" class="form-control form-control-lg" name="login_curp" placeholder="Ingresa tu CURP" pattern="[a-zA-Z0-9]{18}" maxlength="18" required" />
                  <label class="form-label" for="form_curp">CURP</label>
               </div>

               <!-- Password input -->
               <div class="form-outline mb-3">
                  <input type="password" id="form_clave" class="form-control form-control-lg" name="login_clave" placeholder="Ingresa la contraseña" pattern="[a-zA-Z0-9$@.-_]{8,100}" maxlength="100" required />
                  <label class="form-label" for="form_clave">Contraseña</label>
               </div>

               <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                     <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                     <label class="form-check-label" for="form2Example3">
                        Recordar contraseña
                     </label>
                  </div>
                  <a href="#preguntas_frecuentes" class="text-body">¿No conoces tu contraseña?</a>
               </div>

               <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Ingresar</button>
                  <p class="small fw-bold mt-2 pt-1 mb-0">¿Hay algun problema? <a href="#contactoipn" class="link-danger">Contáctanos</a></p>
               </div>


               <?php
               // verificar si se manda el formulario code...
               // verificar si los dos campos tinen texto
               if (isset($_POST['login_curp']) && isset($_POST['login_clave'])) {
                  require_once "./php/main.php";
                  require_once "./php/iniciar_sesion.php";
               }

               ?>
            </form>

         </div>

         <div class="container d-flex flex-column justify-content-center align-items-center text-center my-5">
            <h4 class="mb-4">Conoce más acerca de las Distinciones al Mérito Politécnico.</h4>
            <h5>Las distinciones al mérito politécnico son un reconocimiento que hace la comunidad politécnica a una conducta, trayectoria, servicio o acción ejemplar o sobresaliente.</h5>
            <div class="container-lg">
               <p>El Instituto Politécnico Nacional (IPN), ha forjado una distinguida trayectoria en la formación de profesionales destacados. A lo largo de los años, ha cultivado un legado de excelencia académica y contribuciones significativas a diversas disciplinas. En reconocimiento a esta valiosa labor, el IPN otorga distinciones al mérito polítécnico. Estos premios representan la apreciación de la comunidad politécnica hacia aquellos individuos que han demostrado una conducta ejemplar, una sobresaliente trayectoria, servicio excepcional o acciones destacadas. </p>
            </div>
         </div>

         <!-- tarjetas -->
         <div class="container d-flex justify-content-center align-items-center mb-4">
            <div class="row container-lg">
               <div class="col-sm-6 mb-3 mb-sm-0">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">Comisión de Distinciones al Mérito Politécnico</h5>
                        <p class="card-text">Es la Comisión del Consejo General Consultivo encargada de analizar, evaluar y dictaminar sobre las propuestas de candidatos a obtener las diferentes distinciones que otorga el Instituto, en los términos de las disposiciones normativas aplicables, así como de elaborar y proponer la convocatoria respectiva y el establecimiento de distinciones nuevas o especiales.</p>
                        <a href="https://www.ipn.mx/assets/files/secgeneral/docs/cgc/reglamento-cgc.pdf" class="btn btn-outline-primary" target="_blank">Artículo 50 del Reglamento del Consejo General Consultivo del IPN</a>
                     </div>
                  </div>
               </div>
               <div class="col-sm-6">
                  <div class="card">
                     <div class="card-body">
                        <h5 class="card-title">Comisión Permanente</h5>
                        <p class="card-text">La naturaleza de esta comisión es permanente, por lo que, de conformidad con la normatividad vigente, se renueva año con año durante la instalación del Consejo General Consultivo del Instituto Politécnico Nacional. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident nulla libero minus sapiente laboriosam facere qui excepturi, distinctio aliquid accusamus?</p>
                        <a href="#" class="btn btn-outline-primary">Leer más</a>
                     </div>
                  </div>
               </div>
            </div>
         </div> <!-- Fin tarjetas -->

         <!-- Acordeon de preguntas frecuentes -->
         <div class="container my-5">
            <div id="preguntas_frecuentes" class="accordion container-lg text-center" id="accordionExample">
               <h3 class="mb-3">Sección de preguntas frecuentes</h3>
               <div class="accordion-item">
                  <h2 class="accordion-header">
                     <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        ¿Qué son las Distinciones al Mérito Politécnico?
                     </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           El Instituto Politécnico Nacional (IPN), ha forjado una distinguida trayectoria en la formación de profesionales destacados. A lo largo de los años, ha cultivado un legado de excelencia académica y contribuciones significativas a diversas disciplinas. En reconocimiento a esta valiosa labor, el IPN otorga distinciones al mérito polítécnico. Estos premios representan la apreciación de la comunidad politécnica hacia aquellos individuos que han demostrado una conducta ejemplar, una sobresaliente trayectoria, servicio excepcional o acciones destacadas.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <p>¿Cómo saber si soy acreedor a una presea?</p>
                     </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>Le enviamos un correo a su dirección de <strong>correo institucional</strong> con los detalles. Revise su bandeja de entrada. Si no lo encuentra, verifique la carpeta de correo no deseado o spam. También puede seguir las indicaciones en su correo para acceder al sistema y obtener más información sobre su distinción.</p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Fui seleccionado y no puedo acceder al sistema
                     </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           Si fue seleccionado y tiene dificultades para acceder al sistema, le pedimos que se comunique con nosotros. Puede enviarnos un correo electrónico a <a href="mailto:correoIPN@example.com">correoIPN@example.com</a> o llamarnos a los siguientes números telefónicos:
                        </p>
                        <p>
                           Teléfono Principal: +52 5729 6000 /
                           Teléfono de Soporte: +52 5729 6281
                        </p>
                        <p>
                           Estaremos encantados de ayudarle a resolver cualquier problema y brindarle la asistencia necesaria.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        No conozco mi contraseña para acceder al sistema
                     </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           La contraseña correspondiente a cada usuario se envió adjunta en el correo que recibieron. (para este ejemplo es "12345678" para todos)
                        </p>
                     </div>
                  </div>
               </div>
               <div class="accordion-item">
                  <h2 class="accordion-header">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                        ¿Por qué esta página no se parece a las comunes del IPN?
                     </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                     <div class="accordion-body">
                        <p>
                           Con el propósito de brindar un entorno seguro y amigable en la gestión de las distinciones al mérito polietcbco 2023, el IPN ha establecido una sólida asociación con la Raccon Company. Esta colaboración garantiza un sistema eficiente y confiable, respaldado por la experiencia conjunta de ambas instituciones, para reconocer de manera destacada los logros en el ámbito académico y profesional.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- Agrego el footer aqui porque desde el index se encima -->
         <?php
         include "./inc/footer.php";
         ?>
      </div>
   </div>
</section>