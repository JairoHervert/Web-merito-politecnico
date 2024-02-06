<!-- Formulario para el registro del nuevo usuario -->
<form class="form_modificar_usuario_admin" action="" method="POST" autocomplete="off">

   <div class="row">
      <div class="mb-3 col-lg-6 col-12">
         <label for="nombre_ingresado" class="col-form-label">Nombre</label>
         <input type="text" class="form-control" id="nombre_ingresado" name="nombre_ingresado" placeholder="Ingresa el nombre del usuario" maxlength="120">
      </div>

      <div class="mb-3 col-lg-6 col-12">
         <label for="academia_ingresada" class="col-form-label">Unidad academica del usuario</label>
         <select class="form-select" name="academia_ingresada">
            <option selected></option>
            <option value="1">CENTRO INTERDISCIPLINARIO DE CIENCIAS DE LA SALUD (CICS), UNIDAD SANTO TOMÁS</option>
            <option value="2">CENTRO DE INVESTIGACIÓN Y DESARROLLO DE TECNOLOGÍA DIGITAL (CITEDI)</option>
            <option value="3">ESCUELA NACIONAL DE CIENCIAS BIOLÓGICAS (ENCB)</option>
            <option value="4">ESCUELA SUPERIOR DE INGENIERÍA MECÁNICA Y ELÉCTRICA (ESIME) UNIDAD AZCAPOTZALCO</option>
            <option value="5">ESCUELA SUPERIOR DE INGENIERÍA MECÁNICA Y ELÉCTRICA (ESIME) UNIDAD CULHUACÁN</option>
            <option value="6"'>ESCUELA SUPERIOR DE INGENIERÍA MECÁNICA Y ELÉCTRICA (ESIME) UNIDAD TICOMÁN"</option>
            <option value="7">ESCUELA SUPERIOR DE INGENIERÍA MECÁNICA Y ELÉCTRICA (ESIME) UNIDAD ZACATENCO</option>
            <option value="8">ESCUELA SUPERIOR DE INGENIERÍA QUÍMICA E INDUSTRIAS EXTRACTIVAS (ESIQIE)</option>
            <option value="9">ESCUELA SUPERIOR DE INGENIERÍA Y ARQUITECTURA (ESIA) UNIDAD TECAMACHALCO</option>
            <option value="10">ESCUELA SUPERIOR DE INGENIERÍA Y ARQUITECTURA (ESIA) UNIDAD TICOMÁN</option>
            <option value="11">ESCUELA SUPERIOR DE INGENIERÍA Y ARQUITECTURA (ESIA) UNIDAD ZACATENCO</option>
            <option value="12">ESCUELA SUPERIOR DE COMERCIO Y ADMINISTRACIÓN (ESCA), UNIDAD SANTO TOMÁS</option>
            <option value="13">ESCUELA SUPERIOR DE CÓMPUTO (ESCOM) </option>
            <option value="14">ESCUELA SUPERIOR DE COMERCIO Y ADMINISTRACIÓN (ESCA), UNIDAD TEPEPAN</option>
            <option value="15">ESCUELA SUPERIOR DE ECONOMÍA (ESE)</option>
            <option value="16">ESCUELA SUPERIOR DE FÍSICA Y MATEMÁTICAS (ESFM)</option>
            <option value="17">ESCUELA SUPERIOR DE TURISMO (EST)</option>
            <option value="19">ESCUELA SUPERIOR DE MEDICINA (ESM)</option>
            <option value="20">ESCUELA NACIONAL DE MEDICINA Y HOMEOPATÍA (ENMH)</option>
            <option value="21">CENTRO INTERDISCIPLINARIO DE CIENCIAS DE LA SALUD (CICS) ,UNIDAD MILPA ALTA</option>
            <option value="22">UNIDAD PROFESIONAL INTERDISCIPLINARIA DE INGENIERÍA CAMPUS HIDALGO (UPIIH)</option>
            <option value="23">UNIDAD PROFESIONAL INTERDISCIPLINARIA DE INGENIERÍA Y CIENCIAS SOCIALES Y ADMINISTRATIVAS (UPIICSA)</option>
            <option value="24">UNIDAD PROFESIONAL INTERDISCIPLINARIA EN INGENIERÍA Y TECNOLOGÍAS AVANZADAS (UPIITA)</option>
            <option value="27">CENTRO DE INVESTIGACIÓN EN COMPUTACIÓN (CIC)</option>
            <option value="32">ESCUELA SUPERIOR DE ENFERMERÍA Y OBSTETRICIA (ESEO)</option>
            <option value="33">ESCUELA SUPERIOR DE INGENIERÍA TEXTIL (ESIT)</option>
            <option value="34">UNIDAD PROFESIONAL INTERDISCIPLINARIA DE INGENIERÍA CAMPUS GUANAJUATO (UPIIG)</option>
            <option value="35">UNIDAD PROFESIONAL INTERDISCIPLINARIA DE INGENIERÍA CAMPUS ZACATECAS (UPIIZ)</option>
         </select>
      </div>

      <div class="mb-3 col-lg-6 col-12">
         <label for="presea_ingresada" class="col-form-label">Presea otorgada al usuario</label>
         <select class="form-select" name="presea_ingresada">
            <option selected></option>
            <option value="1">Diploma al Maestro Decano</option>
            <option value="2">Diploma a la Investigación</option>
            <option value="3">Diploma a la Cultura</option>
            <option value="4">Diploma al Deporte</option>
            <option value="5">Diploma de Eficiencia y Eficacia</option>
            <option value="6">Presea "Juan de Dios Bátiz"</option>
            <option value="7">Presea Carlos Vallejo Márquez</option>
         </select>
      </div>

      <div class="mt-3 mb-2">
         <p>Llenar los siguientes campos <strong>solamente si el usuario ha confirmado o negado su asistencia por otro medio oficial del IPN</strong>.</p>
      </div>

      <div class="mb-3 col-lg-6 col-12">
         <label for="asistencia_ingresada" class="col-form-label">Asistencia del usuario (en caso de haber confirmado o negado)</label>
         <select class="form-select" aria-label="Default select example" name="asistencia_ingresada">
            <option value="Pendiente">Pendiente</option>
            <option value="Confirmada">Confirmada</option>
            <option value="Negada">Negada</option>
         </select>
      </div>

      <div class="mb-3 col-lg-6 col-12">
         <label for="Implemento_ingresado" class="col-form-label">Implemento del galardonado (en caso de requerirlo)</label>
         <select class="form-select" aria-label="Default select example" name="Implemento_ingresado">
            <option selected>Abrir opciones de implementos</option>
            <option value="Bastón">Bastón</option>
            <option value="Muletas">Muletas</option>
            <option value="Silla de ruedas">Silla de ruedas</option>
            <option value="Andador">Andador</option>
            <option value="Max Stell chido">Max Stell chido</option>
            <option value="Otro...">Otro</option>
         </select>
      </div>

      <div class="mb-3 col-lg-6 col-12">
         <label for="invitado_ingresado" class="col-form-label">Nombre del acompañante, solo si el usuario lo agregó</label>
         <input type="text" class="form-control" id="invitado_ingresado" name="invitado_ingresado" placeholder="Ingresa el nombre del acompañante">
      </div>

      <div class="mb-3 col-lg-6 col-12">
         <label for="invitado_implemento_ingresado" class="col-form-label">Implemento del acompañante (en caso de requerirlo)</label>
         <select class="form-select" name="invitado_implemento_ingresado">
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
         <button type="submit" id="btn_enviar_form_mod" class="btn btn-primary btn-md" data-bs-dismiss="modal">Confirmar</button>
      </div>

      <?php
      // verificamos que se mande el formulario
      //include "./php/main.php";
      if ((isset($_POST['nombre_ingresado']) && (!verificarDatos('[a-zA-Z]{0,100}', $_POST['nombre_ingresado']))) && (isset($_POST['academia_ingresada']) && $_POST['academia_ingresada']!="") && (isset($_POST['presea_ingresada']) && $_POST['presea_ingresada']!="")) {
         echo '
            <script>
               console.log("Aquí indico que sí se subio la curp")
            </script>
         ';
      } else {
         echo '
         <script>
            console.log("Como tan muchachos, yo lo veo muy bien.")
         </script>
         ';
      }
      ?>

   </div>



</form>