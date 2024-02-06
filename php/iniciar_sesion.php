<?php

// limpiar cadenas de posible SQLinyection o scripting
$curp_recibida = limpiarCadena($_POST['login_curp']);
$clave_recibida = limpiarCadena($_POST['login_clave']);

// Verificar que no vengan vacios los datos, por si se vulneran los "required" del form
if ($curp_recibida == "" || $clave_recibida == "") {
   echo '
      <div class="alert alert-danger d-flex align-items-center" role="alert">
         <div>
            <h4>Ha ocurrido un error inesperado</h4>
            <p>No has llenado todos los campos que son obligatorios</p>
         </div>
      </div>';
}

// Verificar la intgridad de los datos, que sean del formato adecuado
if (verificarDatos("[a-zA-Z0-9]{18}", $curp_recibida)) {
   echo '
      <div class="alert alert-danger d-flex align-items-center" role="alert">
         <div>
            <h4>Ha ocurrido un error inesperado</h4>
            <p>La CURP no cumple con el formato especificado</p>
         </div>
      </div>';
}
if (verificarDatos("[a-zA-Z0-9$@.-_]{8,100}", $clave_recibida)) {
   echo '
      <div class="alert alert-danger d-flex align-items-center" role="alert">
         <div>
            <h4>Ha ocurrido un error inesperado</h4>
            <p>La contraseña no coincide con el formato especificado</p>
         </div>
      </div>';
}


// si paso todos los anteriores ya se consulta en la bdd

$check_user = conexion();
// $check_user = $check_user->query("SELECT * FROM vista_usuario WHERE usuario_curp='$curp_recibida'");
$check_user = $check_user->query("SELECT * FROM usuario WHERE usuario_curp='$curp_recibida'");

// Si un registro coincidio con la busqueda
if ($check_user->rowCount() == 1) {
   // fetch hace un arary de datos de la linea recibida
   $check_user = $check_user->fetch();

   //if (password_verify($clave_recibida, $check_user['usuario_clave'])) {
   if ($clave_recibida == $check_user['usuario_clave'] ||password_verify($clave_recibida, $check_user['usuario_clave'])) {
      
      $_SESSION['id'] = $check_user['usuario_id'];
      $_SESSION['nombre'] = $check_user['usuario_nombre'];
      $_SESSION['rol'] = $check_user['fk_rol_id'];
      $_SESSION['curp'] = $check_user['usuario_curp'];

      if (headers_sent()) {   // si se han enviado headers
         if ($_SESSION['rol']==1) { // si es lector
            echo "<script> window.location.href='index.php?vista=home'; </script>";
         }elseif ($_SESSION['rol']==2) {  // si es admin
            echo "<script> window.location.href='index.php?vista=home_admin'; </script>";
         }else {
            echo "<script> window.location.href='index.php?vista=404'; </script>";
         }
      } else {
         if ($_SESSION['rol']==1) {
            header("Location: index.php?vista=home");
         }elseif ($_SESSION['rol']==2) {
            header("Location: index.php?vista=home_admin");
         }else {
            header("Location: index.php?vista=home");
         }
      }

   } else {
      echo '
         <div class="alert alert-danger d-flex align-items-center" role="alert">
            <div>
               <h4>Ha ocurrido un error inesperado</h4>
               <p>No has llenado todos los campos que son obligatorios</p>
            </div>
         </div>';
   }
   
} else {
   echo '
      <div class="alert alert-danger d-flex align-items-center" role="alert">
         <div>
            <h4>Ha ocurrido un error inesperado</h4>
            <p>No existe este usuario en el sistema</p>
         </div>
      </div>';
}
$check_user = null;