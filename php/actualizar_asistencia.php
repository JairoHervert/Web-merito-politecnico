<?php
require "main.php";

$id_obtenida = $_POST['id'];
$nuevo_estado = $_POST['estado'];
$curp_obtenida = $_POST['curp'];

// echo "datos del actualizar";
// echo $id_obtenida;
// echo $nuevo_estado;
// echo $curp_obtenida;

$update_asist_user = conexion();

// los valores de Negada y Confirmada del if, son los que se pasan desde el archivo main.js
if ($nuevo_estado == "Negada") {
   echo "voy a negar la asistencia en sql";
   $update_asist_user = $update_asist_user->prepare("UPDATE usuario SET usuario_asistencia = :nueva_asistencia WHERE usuario_id = :id_obtenida and usuario_curp = :curp_obtenida;");
   // array que lleva los datos para la consulta
   $marcadores = [
      ":nueva_asistencia" => $nuevo_estado,
      ":id_obtenida" => $id_obtenida,
      ":curp_obtenida" => $curp_obtenida
   ];
   // ejecutar la consulta
   $update_asist_user->execute($marcadores);

   $update_asist_user = null;
   echo "Ya negue la asistencia en sql";

} elseif ($nuevo_estado == "Confirmada") {
   echo "entre al php y voy a confirmar";
} 
