<?php
$conn = new mysqli("127.0.0.1", "root", "", "meritopol");

mysqli_query($conn, "SET NAMES 'utf8'");

if ($conn->connect_error) {
   die('Error de conexion' . $conn->connect_error);
}

$sqlGetAlumnos = "SELECT * FROM usuario";
$resGetAlumnos = mysqli_query($conn, $sqlGetAlumnos);
$trsAlumnos = "";
while ($filas = mysqli_fetch_row($resGetAlumnos)) {
   if ($filas[10] != 2) {
      $trsAlumnos .= "<tr>
      <td>$filas[0]</td>
      <td>$filas[3]</td>
      <td>$filas[1]</td>
      <td>$filas[5]</td>
      <td>$filas[6]</td>
      <td>$filas[7]</td>
      <td>$filas[8]</td>
      <td>
      <div class=''>
      <button type='button' class='editar btn btn-outline-success' data-bs-toggle='modal' data-bs-target='#modal_editar' data-id='$filas[0]'>Actualizar</button>
      <button type='button' class='eliminar btn btn-outline-danger' data-bs-toggle='modal' data-bs-target='#modal_eliminar_usuario' data-id='$filas[0]'>Eliminar</button>
      </div></td></tr>";
   }
}
