<?php

// PDO es para establecer la conexion con la base de datos
function conexion() {
   $pdo = new PDO('mysql:host=localhost;dbname=meritopol', 'root', '');
   return $pdo;
}

//verificar datos
function verificarDatos($filtro, $cadena) {
   // si la cadena coincide con la ER filtro
   if (preg_match("/^".$filtro."$/", $cadena)) {
      return false;  // La cadena cumple con el patrón, NO HAY ERROR
   } else {
      return true;
   }
}

// funcion IMPORTANTE para limpiar cadenas de texto y evitar inyeccion SQL o scripts
function limpiarCadena($cadena) {
   $cadena = trim($cadena);   // limpia de espacios al inicio y final
   $cadena = stripslashes($cadena); // quita diagonales
   $cadena = str_ireplace("<script>", "", $cadena);   // evitar xss, inyeccion de codigo JS
   $cadena = str_ireplace("</script>", "", $cadena);
   $cadena = str_ireplace("<script src", "", $cadena);
   $cadena = str_ireplace("<script type=", "", $cadena);
   $cadena = str_ireplace("SELECT * FROM", "", $cadena);
   $cadena = str_ireplace("SELECT*FROM", "", $cadena);
   $cadena = str_ireplace("DELETE FROM", "", $cadena);
   $cadena = str_ireplace("INSERT INTO", "", $cadena);
   $cadena = str_ireplace("DROP TABLE", "", $cadena);
   $cadena = str_ireplace("DROP DATABASE", "", $cadena);
   $cadena = str_ireplace("TRUNCATE TABLE", "", $cadena);
   $cadena = str_ireplace("SHOW TABLES;", "", $cadena);
   $cadena = str_ireplace("SHOW DATABASES;", "", $cadena);
   $cadena = str_ireplace("<?php", "", $cadena);
   $cadena = str_ireplace("?>", "", $cadena);
   $cadena = str_ireplace("--", "", $cadena);
   $cadena = str_ireplace("^", "", $cadena);
   $cadena = str_ireplace("<", "", $cadena);
   $cadena = str_ireplace("[", "", $cadena);
   $cadena = str_ireplace("]", "", $cadena);
   $cadena = str_ireplace("==", "", $cadena);
   $cadena = str_ireplace(";", "", $cadena);
   $cadena = str_ireplace("::", "", $cadena);
   $cadena = trim($cadena);
   $cadena = stripslashes($cadena);
   return $cadena;
}
