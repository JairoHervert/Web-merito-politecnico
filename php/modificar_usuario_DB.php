<?php
require "main.php";

$id_obtenida = $_POST['id'];
$nombre_ingresado = $_POST['nombre_ingresado'];
$nombre_ingresado = limpiarCadena($nombre_ingresado);

$asistencia_ingresada = $_POST['asistencia_ingresada'];

$invitado_ingresado = $_POST['invitado_ingresado'];

$academia_ingresada = $_POST['academia_ingresada'];
$presea_ingresada = $_POST['presea_ingresada']; // Corregido: Debería ser 'presea_ingresada' en lugar de 'academia_ingresada'
$Implemento_ingresado = $_POST['Implemento_ingresado'];
$invitado_implemento_ingresado = $_POST['invitado_implemento_ingresado'];

echo $presea_ingresada;

$rol_default = 1;
$categoria_default = 1;
 
//echo "Llego a la función del PHP";

// echo "Nomas falta ahora la consulta";

$mod_user_db = conexion();

// Consulta preparada para insertar un nuevo usuario
// los últimos dos campos siempre van a ser 1
$sql = "UPDATE usuario SET usuario_nombre = :usuario_nombre, usuario_asistencia = :usuario_asistencia, usuario_implemento = :usuario_implemento, invitado_nombre = :invitado_nombre, invitado_implemento = :invitado_implemento, fk_insitucion_id = :fk_institucion_id WHERE usuario_id = :usuario_id";

// array que lleva los datos para la consulta
$marcadores = [
   ":usuario_id" => $id_obtenida,
   ":usuario_nombre" => $nombre_ingresado,
   ":usuario_asistencia" => $asistencia_ingresada,
   ":usuario_implemento" => $Implemento_ingresado,
   ":invitado_nombre" => $invitado_ingresado, // Corregido: Agregué este marcador que faltaba
   ":invitado_implemento" => $invitado_implemento_ingresado,
   ":fk_institucion_id" => $academia_ingresada, // Corregido: Cambié el nombre del marcador para coincidir con la consulta
];

// ejecutar la consulta
try {
   $stmt = $mod_user_db->prepare($sql);
   $stmt->execute($marcadores);
   echo "Exito al modificar el usuario";
} catch (PDOException $e) {
   echo "Error al modificar el usuario: " . $e->getMessage();
}


// ahora le asociamos la presea a la cual fue nominado, la variable $presea_ingresada guarda el id de las preseas y el id_generado es el id que le otorgamos al usuario

$sql = "UPDATE presea_usuario SET fk_presea_id = :presea_id WHERE fk_usuario_id = :usuario_id";

$marcadores = [
   ":usuario_id" => $id_obtenida,
   ":presea_id" => $presea_ingresada
];

try {
   $stmt = $mod_user_db->prepare($sql);
   $stmt->execute($marcadores);
   echo "\n";
   echo "Asociación de presea al usuario exitosa";
} catch (PDOException $e) {
   echo "Error al asociar presea al usuario: " . $e->getMessage();
}

?>