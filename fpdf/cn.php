<?php
$mysqli = new mysqli("127.0.0.1", "root", "", "meritopol");

if ($mysqli->connect_error) {
    die('Error de conexion' . $mysqli->connect_error);
}