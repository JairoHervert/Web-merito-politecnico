<?php
require "main.php";

$curp_obtenida = $_POST['curp'];
$curp_obtenida = limpiarCadena($curp_obtenida);
$nombre_ingresado = $_POST['nombre_ingresado'];
$nombre_ingresado = limpiarCadena($nombre_ingresado);
$clave_ingresada = $_POST['clave_ingresada'];


$clave_ingresada = password_hash($clave_ingresada, PASSWORD_BCRYPT, ["cost" => 10]);  // 10 iteraciones de hash

// revisar si no borra caracteres especiales utilizados en la entrada
$clave_ingresada = limpiarCadena($clave_ingresada);

$asistencia_ingresada = $_POST['asistencia_ingresada'];

$invitado_ingresado = $_POST['invitado_ingresado'];

$academia_ingresada = $_POST['academia_ingresada'];
$presea_ingresada = $_POST['presea_ingresada']; // Corregido: Debería ser 'presea_ingresada' en lugar de 'academia_ingresada'
$Implemento_ingresado = $_POST['Implemento_ingresado'];
$invitado_implemento_ingresado = $_POST['invitado_implemento_ingresado'];

$rol_default = 1;
$categoria_default = 1;

$id_generado =  rand(1, 2000000);

// echo "Llego a la función del PHP";

// echo "Nomas falta ahora la consulta";

$add_user_db = conexion();

// Consulta preparada para insertar un nuevo usuario
// los últimos dos campos siempre van a ser 1
$sql = "INSERT INTO usuario (usuario_id, usuario_curp, usuario_nombre, usuario_clave, usuario_asistencia, usuario_implemento, invitado_nombre, invitado_implemento, fk_insitucion_id, fk_rol_id, fk_categoria_id)
      VALUES (:usuario_id, :usuario_curp, :usuario_nombre, :usuario_clave, :usuario_asistencia, :usuario_implemento, :invitado_nombre, :invitado_implemento, :fk_institucion_id, :fk_rol_id, :fk_categoria_id)";

// array que lleva los datos para la consulta
$marcadores = [
   ":usuario_id" => $id_generado,
   ":usuario_curp" => $curp_obtenida,
   ":usuario_nombre" => $nombre_ingresado,
   ":usuario_clave" => $clave_ingresada, // Corregido: Eliminé el doble signo de dólar
   ":usuario_asistencia" => $asistencia_ingresada,
   ":usuario_implemento" => $Implemento_ingresado,
   ":invitado_nombre" => $invitado_ingresado, // Corregido: Agregué este marcador que faltaba
   ":invitado_implemento" => $invitado_implemento_ingresado,
   ":fk_institucion_id" => $academia_ingresada, // Corregido: Cambié el nombre del marcador para coincidir con la consulta
   ":fk_rol_id" => $rol_default,
   ":fk_categoria_id" => $categoria_default,
];

// ejecutar la consulta
try {
   $stmt = $add_user_db->prepare($sql);
   $stmt->execute($marcadores);
   echo "Exito al agregar el usuario";
} catch (PDOException $e) {
   echo "Error al agregar usuario: " . $e->getMessage();
}


// ahora le asociamos la presea a la cual fue nominado, la variable $presea_ingresada guarda el id de las preseas y el id_generado es el id que le otorgamos al usuario

$sql = "INSERT INTO presea_usuario(fk_usuario_id, fk_presea_id)
         VALUES (:usuario_id, :presea_id)";

$marcadores = [
   ":usuario_id" => $id_generado,
   ":presea_id" => $presea_ingresada
];

try {
   $stmt = $add_user_db->prepare($sql);
   $stmt->execute($marcadores);
   echo "\n";
   echo "Asociación de presea al usuario exitosa";
} catch (PDOException $e) {
   echo "Error al asociar presea al usuario: " . $e->getMessage();
}