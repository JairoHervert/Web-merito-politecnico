<?php include "./inc/navbar_admin.php" ?>
<?php
  include("./php/mostrar_datos.php");
?>


<div class="container-fluid mt-3 ps-4 pe-2">
   <h2>Administración Home</h2>
   <h3>¡Bienvenido, <?php echo $_SESSION['nombre']// . " " . $_SESSION['id'] . " " . $_SESSION['rol'] ?>!</h3>
</div>

<div class="container mt-5">

   <!-- Botones de accion -->
   <div class="btns_acciones">
      <button type="button" id="btn_add_new_user" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal_registrar_nuevo_usuario">Registrar nuevo usuario</button>
      <button type="button" id="btn_reporte" class="btn btn-primary" onclick="descargar_reporte()">Generar reporte pdf</button>
   </div> <!-- fin botones de accion -->
   <script>
         function descargar_reporte() {
         // Obtener el contenido del archivo PDF desde la ruta relativa
         var ruta_archivo = "./fpdf/reporte.php"; // Ruta relativa

         // Enviar el archivo PDF al navegador
         var xhr = new XMLHttpRequest();
         xhr.open("GET", ruta_archivo, true);
         xhr.responseType = "arraybuffer";
         xhr.onload = function() {
            var blob = new Blob([xhr.response], {type: "application/pdf"});
            var link = document.createElement("a");
            link.href = window.URL.createObjectURL(blob);
            link.download = "reporte.pdf";
            link.click();
         };
         xhr.send();
         }
      </script>

   <!-- MODAL del formulario para agregar un nuevo usuario -->
   <div class="modal modal-lg fade" id="modal_registrar_nuevo_usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar nuevo usuario</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <p>Rellena los siguientes campos registrar un nuevo usuario.</p>
               <?php

                  include "./inc/form_nuevo_usuario.php";

               ?>


            </div>
         </div>
      </div>
   </div>


   <!-- MODAL del formulario para Actualizar usuario -->
   <div class="modal modal-lg fade" id="modal_editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Usuario</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               <p>Rellena los siguientes campos para modificar los datos del usuario.</p>
               <?php
                  require "./inc/form_mod_usuario.php";
               ?>

            </div>
         </div>
      </div>
   </div>

   <!-- Modal de confirmacion para eliminar -->
   <div class="modal fade" id="modal_eliminar_usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h1 class="modal-title fs-5" id="exampleModalLabel">¿Está seguro?</h1>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
               Esta acción no podra ser revocada y no podrá disponer de un lugar en el evento
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-secondary btn-md" data-bs-dismiss="modal">Cerrar</button>
               <button type="button" id="btn_eliminar" class="btn btn-danger btn-md" data-bs-dismiss="modal">Estoy seguro</button>
            </div>
         </div>
      </div>
   </div>


   <!-- Formulario de bsuqueda -->
   <form action="" class="buscador my-3">

      <label for="campo" class="form-label">Buscar registro</label> <!-- lo saque del row por el layout -->
      <div class="row">
         <div class="col-lg-6 col-md-4 col-12 mb-3 campo_bsuqueda">
            <input type="text" id="campo" name="campo" class="form-control" aria-describedby="Campo de busqueda">
         </div>


         <!-- filtro tipo de asistencias -->
         <div class="col-lg-3 col-md-4 col-6 filtro_asistencia">
            <select class="form-select" aria-label="Seleccionar busqueda por asistencia">
               <option selected class="disabled">Todas las asistencias</option>
               <option value="Confirmada">Asistencia confirmada</option>
               <option value="Negada">Asistencia negada</option>
               <option value="Pendiente">Asistencia pendiente</option>
            </select>
         </div>

         <!-- filtro de escuela -->
         <div class="col-lg-3 col-md-4 col-6 filtros_escuela">
            <select class="form-select" aria-label="Default select example">
               <option selected>Todas las escuelas</option>
               <option value="1">(CICS-UST) CENTRO INTERDISCIPLINARIO DE CIENCIAS DE LA SALUD, UNIDAD SANTO TOMÁS</option>
               <option value="3">(ENCB) ESCUELA NACIONAL DE CIENCIAS BIOLÓGICAS</option>
               <option value="4">ESCUELA SUPERIOR DE INGENIERÍA MECÁNICA Y ELÉCTRICA  UNIDAD AZCAPOTZALCO</option>
               <option value="5">ESCUELA SUPERIOR DE INGENIERÍA MECÁNICA Y ELÉCTRICA (ESIME) UNIDAD CULHUACÁN</option>
               <option value="6">ESCUELA SUPERIOR DE INGENIERÍA MECÁNICA Y ELÉCTRICA (ESIME) UNIDAD TICOMÁN</option>
               <option value="7">(ESIME-Z) ESCUELA SUPERIOR DE INGENIERÍA MECÁNICA Y ELÉCTRICA UNIDAD ZACATENCO</option>
               <option value="8">ESCUELA SUPERIOR DE INGENIERÍA QUÍMICA E INDUSTRIAS EXTRACTIVAS (ESIQIE)</option>
               <option value="9">ESCUELA SUPERIOR DE INGENIERÍA Y ARQUITECTURA (ESIA) UNIDAD TECAMACHALCO</option>
               <option value="10">ESCUELA SUPERIOR DE INGENIERÍA Y ARQUITECTURA (ESIA) UNIDAD TICOMÁN</option>
               <option value="11">ESCUELA SUPERIOR DE INGENIERÍA Y ARQUITECTURA (ESIA) UNIDAD ZACATENCO</option>
               <option value="12">ESCUELA SUPERIOR DE COMERCIO Y ADMINISTRACIÓN (ESCA), UNIDAD SANTO TOMÁS</option>
               <option value="13">(ESCOM) ESCUELA SUPERIOR DE CÓMPUTO</option>
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
            </select>
         </div>

      </div>

   </form>
</div>

<div class="tabla_registros mx-4 mb-5">
   <div class="table-responsive-xxl text-center">

      <table class="table table-hover table-striped">
         <!-- columnas de la tabla -->
         <thead>
            <tr>
               <th scope="col">ID</th>
               <th scope="col">Nombre</th>
               <th scope="col">CURP</th>
               <!-- <th scope="col">Unidad Academica</th> -->
               <!-- <th scope="col">Categoria</th> -->
               <!--<th scope="col">Presea</th>-->
               <th scope="col">Asistencia</th>
               <th scope="col">Implemento 1</th>
               <th scope="col">Acompañante</th>
               <th scope="col">Implemento 2</th>
               <th scope="col">Opciones</th>
            </tr>
         </thead>

         <tbody id="trsAlumnos">
            <?php echo $trsAlumnos; ?>
            <!-- aqui se va a ir pegando las rows de las consultas -->
         </tbody>

      </table>


   </div>
</div>