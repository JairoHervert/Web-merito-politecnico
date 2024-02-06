<p class="infor_presea mt-2">
   La distinguida presea ha sido otorgada en reconocimiento al excepcional desempeño durante su trayectoria en la institución. El compromiso, liderazgo y dedicación
</p>
<div class="asistencia mt-2">
   <button type="button" id="btn_form_asistir" class="btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#modal_confirmar_asistencia">Confirmar asistencia</button>
   <button type="button" class="btn btn-secondary btn-md" data-bs-toggle="modal" data-bs-target="#modal_no_asistir">No asistir</button>
</div>

<!-- Modal de confirmacion de asistencia -->

<div class="modal fade" id="modal_confirmar_asistencia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Gracias por asistir</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            <p>Rellena los siguientes campos para confirmar tu asistencia. Los campos pueden estar vacios.</p>


            <!-- Formulario para obtener datos de la asistencia -->
            <form class="form_confirmar_asistencia" action="" method="POST" autocomplete="off">
               <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Acompañante:</label>
                  <input type="text" class="form-control" id="recipient-name" name="invitado_nombre" placeholder="Nombre del acompañante" pattern="[a-zA-Z\sáéíóúÁÉÍÓÚñ]{0,100}" maxlength="100">
               </div>
               <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Indique si requiere algun implemento por discapacidad:</label>
                  <select class="form-select" aria-label="Default select example" name="usuario_implemento">
                     <option selected>Abrir opciones de implementos</option>
                     <option value="Bastón">Bastón</option>
                     <option value="Muletas">Muletas</option>
                     <option value="Silla de ruedas">Silla de ruedas</option>
                     <option value="Andador">Andador</option>
                     <option value="Max Stell chido">Max Stell chido</option>
                     <option value="Otro">Otro...</option>
                  </select>
               </div>
               <div class="mb-3">
                  <label for="recipient-name" class="col-form-label">Indique si su acompañante requiere algun implemento por discapacidad:</label>
                  <select class="form-select" aria-label="Default select example" name="invitado_implemento">
                     <option selected>Abrir opciones de implementos</option>
                     <option value="Bastón">Bastón</option>
                     <option value="Muletas">Muletas</option>
                     <option value="Silla de ruedas">Silla de ruedas</option>
                     <option value="Andador">Andador</option>
                     <option value="Max Stell chido">Max Stell chido</option>
                     <option value="Otro...">Otro</option>
                  </select>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" id="btn_asistir" class="btn btn-primary btn-md" data-bs-dismiss="modal">Confirmar</button>
                  <script>
                     document.getElementById("btn_asistir").addEventListener("click", function() {
                        window.open("./fpdf/invitacion.php", '_blank');
                     });
                  </script>
               </div>
               
            </form>

         </div>
      </div>
   </div>
</div>


<!-- Modal de confirmacion para no asistir -->
<div class="modal fade" id="modal_no_asistir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">¿Está seguro de no asistir?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
            Esta acción no podra ser revocada y no podrá disponer de un lugar en el evento
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Cerrar</button>
            <button type="button" id="btn_no_asistir" class="btn btn-danger btn-md" data-bs-dismiss="modal">Estoy seguro</button>
         </div>
      </div>
   </div>
</div>