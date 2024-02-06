<?php
$conn = new mysqli("127.0.0.1", "root", "", "meritopol");

mysqli_query($conn, "SET NAMES 'utf8'");

if ($conn->connect_error) {
    die('Error de conexion' . $conn->connect_error);
}

// ... (Conexión a la base de datos)

$valorBusqueda = $_POST["valorBusqueda"];

$sql = "SELECT * FROM vista_usuarios WHERE usuario_nombre LIKE '%$valorBusqueda%' OR usuario_curp LIKE '%$valorBusqueda%' OR usuario_id LIKE '%$valorBusqueda%' OR usuario_asistencia LIKE '%$valorBusqueda%' OR usuario_implemento LIKE '%$valorBusqueda%'";
$resultado = mysqli_query($conn, $sql);

$trsAlumnos = "";
while ($fila = mysqli_fetch_assoc($resultado)) {
    if ($fila['usuario_id'] != 2) {
        $trsAlumnos .= "<tr>
        <td>{$fila['usuario_id']}</td>
        <td>{$fila['usuario_nombre']}</td>
        <td>{$fila['usuario_curp']}</td>
        <td>{$fila['usuario_asistencia']}</td>
        <td>{$fila['usuario_implemento']}</td>
        <td>{$fila['invitado_nombre']}</td>
        <td>{$fila['invitado_implemento']}</td>
        <td><div class=''>
        <button type='button' class='editar btn btn-outline-success' data-bs-toggle='modal' data-bs-target='#modal_editar' data-id='{$fila['usuario_id']}'>Actualizar</button>
        <button type='button' class='eliminar btn btn-outline-danger' data-bs-toggle='modal' data-bs-target='#modal_eliminar_usuario' data-id='{$fila['usuario_id']}'>Eliminar</button>
        </div></td></tr>";
    }
}


echo $trsAlumnos;
