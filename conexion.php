<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$bbdd = "registrosflash2";

$conn = new mysqli($servidor, $usuario, $contrasena, $bbdd);
if ($conn->connect_error) {
    die("Conexion fallida: ".$conn->connect_error);
}
?>