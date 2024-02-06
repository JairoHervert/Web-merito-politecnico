<?php
require "main.php";

$id_obtenida = $_POST['id_borrar'];
echo $id_obtenida;

// echo "Llego a la función del PHP";

// echo "Nomas falta ahora la consulta";

// Consulta preparada para eliminar los registros relacionados en presea_usuario
$delete_presea_usuario_db = conexion();

$sql = "DELETE FROM presea_usuario WHERE fk_usuario_id = :usuario_id;";
$marcadores = [
   ":usuario_id" => $id_obtenida,
];

// Ejecutar la consulta
try {
   $stmt = $delete_presea_usuario_db->prepare($sql);
   $stmt->execute($marcadores);
   echo "Exito al eliminar los registros relacionados en presea_usuario";
} catch (PDOException $e) {
   echo "Error al eliminar los registros relacionados en presea_usuario: " . $e->getMessage();
}

$delete_user_db = conexion();

// Consulta preparada para eliminar el usuario
$sql = "DELETE FROM usuario WHERE usuario_id = :usuario_id;";
$marcadores = [
   ":usuario_id" => $id_obtenida,
];

// Ejecutar la consulta
try {
   $stmt = $delete_user_db->prepare($sql);
   $stmt->execute($marcadores);
   echo "Exito al eliminar el usuario";
} catch (PDOException $e) {
   echo "Error al eliminar el usuario: " . $e->getMessage();
}

?>