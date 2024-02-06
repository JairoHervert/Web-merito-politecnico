<?php require "./inc/session_start.php"; ?>

<!DOCTYPE html>

<head>
   <!-- Metadatos, CSS, y demas -->
   <?php include "./inc/head.php"; ?>
</head>

<body>
   <!-- Incluir el PHP de acuerdo con este funcionamiento -->
   <?php

   // verificar que el parametro "vista" este en la url y no sea vacio
   if (!isset($_GET['vista']) || $_GET['vista'] == "") {
      // si no esta definido el parametro asignamos "login"
      $_GET['vista'] = "login";
   }

   // Si la el parametro viene defniido, vemos si existe alguna vista con dicho nombre
   if (is_file("./vistas/" . $_GET['vista'] . ".php") && $_GET['vista'] != "login" && $_GET['vista'] != "404") {

      // Forzar cierre de sesion si no se ha logeado el usuario
      if ((!isset($_SESSION['id']) || $_SESSION['id'] == "") || (!isset($_SESSION['curp']) || $_SESSION['curp'] == "")) {
         include "./vistas/logout.php";
         exit();
      }

      if ($_GET['vista'] == "home_admin") {
         if ($_SESSION['rol'] == 2) {
            // Si es un admin, cargamos la "vista" del home admin
            include "./vistas/" . $_GET['vista'] . ".php";
            include "./inc/footer.php";
            include "./inc/script.php";
         } else {
            include "./vistas/logout.php";
            exit();
         }
      } else {
         // Si existe, cargamos la "vista" seleccionada
         include "./vistas/" . $_GET['vista'] . ".php";
         include "./inc/footer.php";
         include "./inc/script.php";
      }
   } else {
      if ($_GET['vista'] == "login") {
         include "./inc/navbar_login.php";
         include "./vistas/login.php";
         include "./inc/script.php";   // considerar incluir solo el de bootstrap
      } else {
         include "./vistas/404.php";
         include "./inc/footer.php";
      }
   }

   ?>
</body>

</html>