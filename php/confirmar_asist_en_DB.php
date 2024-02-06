<?php
require "main.php";

$id_obtenida = $_POST['id'];
$curp_obtenida = $_POST['curp'];
$nueva_asistencia = $_POST['asistencia'];
$usuario_implemento = $_POST['usuario_implemento'];
$invitado_nombre = $_POST['invitado_nombre'];
$invitado_nombre = limpiarCadena($invitado_nombre);
$invitado_implemento = $_POST['invitado_implemento'];

// echo $id_obtenida;
// echo $curp_obtenida;
// echo $nueva_asistencia;
// echo $usuario_implemento;
// echo $invitado_nombre;
// echo $invitado_implemento;

// if ($usuario_implemento == "") {                                     /// esta opcion no funciono porque los registraba liteal como "null" en texto
//    $usuario_implemento = "NULL";                                     /// considerar dentro de los ifs hacer consultas separadas
// }
// if ($invitado_nombre == "") {
//    $invitado_nombre = "NULL";
// }
// if ($invitado_implemento == "") {
//    $invitado_implemento = "NULL";
// }

echo "obtuve los datos";

$update_confirm_asist = conexion();

// los valores de Negada y Confirmada del if, son los que se pasan desde el archivo main.js

$update_confirm_asist = $update_confirm_asist->prepare("UPDATE usuario SET usuario_asistencia = :nueva_asistencia, usuario_implemento = :usuario_implemento, invitado_nombre = :invitado_nombre, invitado_implemento = :invitado_implemento WHERE usuario_id = :id_obtenida and usuario_curp = :curp_obtenida;");
// array que lleva los datos para la consulta
$marcadores = [
   ":nueva_asistencia" => $nueva_asistencia,
   ":usuario_implemento" => $usuario_implemento,
   ":invitado_nombre" => $invitado_nombre,
   ":invitado_implemento" => $invitado_implemento,
   ":id_obtenida" => $id_obtenida,
   ":curp_obtenida" => $curp_obtenida
];
// ejecutar la consulta
$update_confirm_asist->execute($marcadores);

$update_confirm_asist = null;
echo "exito en la confirmacion y actualizacion";

