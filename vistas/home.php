<?php
require "./php/main.php";
include "./inc/navbar_user.php";
$data_user = conexion();
$data_user = $data_user->query("SELECT * FROM vista_usuarios WHERE usuario_curp = '{$_SESSION['curp']}'");  // esta vista la hice pa facilitar ciertas cosas
$data_user = $data_user->fetch();

// datos a utilizar
$user_id = $data_user['usuario_id'];
$user_curp = $data_user['usuario_curp'];
$user_nombre = $data_user['usuario_nombre'];
$user_numero = $data_user['usuario_numero'];
$user_instituto = $data_user['institucion_nombre'];
$user_categoria = $data_user['categoria_nombre'];
$user_presea = $data_user['presea_nombre'];
$user_asistencia = $data_user['usuario_asistencia'];
$user_implemento = $data_user['usuario_implemento'];
$user_invitado = $data_user['invitado_nombre'];
$user_invitado_implemento = $data_user['invitado_implemento'];
?>


<!-- Modal con la informacion del usuario, lo activa el boton que esta en el nav_user.php -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="modal-title fs-5" id="staticBackdropLabel">Verifica que la informacion sea correcta</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body my-2">
            <p><strong>ID en la plataforma: </strong><span id="id_sendt"><?php echo $user_id; ?></span></p>
            <p><strong>CURP: </strong><span id="curp_sendt"><?php echo $user_curp; ?></span></p>
            <p><strong>Nombre: </strong><?php echo $user_nombre; ?></p>
            <p><strong>Unidad academica: </strong><?php echo $user_instituto; ?></p>
            <p><strong>Categoria: </strong><?php echo $user_categoria; ?></p>
            <p><strong>Presea: </strong><?php echo $user_presea; ?></p>
            <p><strong>Asistencia: </strong><span id="asistencia_sendt"><?php echo $user_asistencia; ?></span></p>
            <p><strong>Implemento: </strong><span id="impemento_sendt"><?php echo $user_implemento; ?></span></p>
            <p><strong>Acompañante: </strong><span id="invitado_sendt"><?php echo $user_invitado; ?></span></p>
            <p><strong>Implemento del acompañante: </strong><span id="implemento_inv_sendt"><?php echo $user_invitado_implemento; ?></span></p>

            <p class="mt-4 text-secondary">Si existe algun error en los datos, contactanos.</p>
         </div>

         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Contactar</button>
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
         </div>
      </div>
   </div>
</div>

<div class="container">
   <div class="modificador_area">
      <div class="col d-flex flex-column justify-content-center" style="height: 550px;">
         <div class="mb-3">
            <h2 class="fw-bolder">¡Bienvenido, <span class="text-primary"><?php echo $user_nombre; ?></span>!</h2>
         </div>
         <div>
            <h4>En Instituto Politecnico Nacional se enorgullese en otorgartela presea
               "<span class="text-primary fw-semibold"><?php echo $user_presea; ?></span>"
            </h4>
         </div>
         <?php
         if ($user_asistencia == "Confirmada") {
            echo '
               <p class="infor_presea mt-2">
                  La distinguida presea ha sido otorgada en reconocimiento al excepcional desempeño durante su trayectoria en la institución. El compromiso, liderazgo y dedicación
               </p>
               <div class="asistencia mt-2">
                  <button type="button" id="btn_boletos" class="btn btn-primary btn-md">Volver a generar mis boletos</button>
               </div>
               <script>
                  document.getElementById("btn_boletos").addEventListener("click", function() {
                     window.location.href = "./fpdf/invitacion.php";
                  });
               </script>
               ';
         } elseif ($user_asistencia == "Negada") {
            echo '
            <div class="asistencia mt-4">
               <p>Nos lamenta saber que no asistiras al evento, felicidades por tu presea Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati iure voluptatem natus voluptates non. Facere adipisci veritatis quibusdam quo pariatur.</p>
            </div>
            <script>
            </script>
            
             
            ';
         } else {
            include "./inc/confirmar_asistencia.php";
         }
         ?>


      </div>
      <div class="col imagen_gandor">
         <img src="img/ganador2.jpg" class="img-fluid" alt="Imagen ganador" style="max-height: 400px;">
      </div>
   </div>
   <!-- 
   <div class="info_presea">
      <p>La distinguida presea ha sido otorgada en reconocimiento al excepcional desempeño en la instrucción de un equipo deportivo. El compromiso, liderazgo y dedicación</p>
   </div> -->

   <div class="ceremonia text-center mb-5">
      <h5><strong>¡Esperamos contar con su presencia en este evento especial!</strong></h5>
      <p>
         La ceremonia para celebrar las Distinciones al Mérito Politécnico 2024 se llevará a cabo el <strong>22 de enero del 2024</strong> en el <strong>Centro Cultural Jaime Torres Bodet</strong> , en un horario de las <strong>11:00a.m. a 2:00p.m.</strong> Estamos emocionados de compartir este espacio emblemático para reconocer y honrar a individuos destacados. <a href="#">Más sobre la ceremonia.</a>
      </p>
   </div>

   <div class="container mb-5">
      <div class="row row-cols-1 row-cols-md-3 g-4">
         <div class="col">
            <div class="card h-100">
               <img src="img/medallaipn.png" class="card-img-top" alt="Imagen medalla IPN">
               <div class="card-body">
                  <h5 class="card-title">Sobre la presea obtenida</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card h-100">
               <img src="img/imagen55.jpg" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">¿Dudas sobre la asistencia?</h5>
                  <p class="card-text">Consulta el manual para conocer información sobre la asistencia, desde la asistencia hasta la otorgacioón de preseas.</p>
               </div>
            </div>
         </div>
         <div class="col">
            <div class="card h-100">
               <img src="img/mapa.png" class="card-img-top" alt="...">
               <div class="card-body">
                  <h5 class="card-title">¿Cómo llegar a la sede?</h5>
                  <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil iste ea ad dolorem deleniti debitis sint quas, blanditiis at, dignissimos fuga, aliquid quae sit. Nam doloribus fugiat autem nulla deleniti.</p>
               </div>
            </div>
         </div>
      </div>
   </div>

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
</div>