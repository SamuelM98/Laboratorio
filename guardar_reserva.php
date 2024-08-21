<?php
session_start();
include "conexion.php";

$idTour = $_POST['idTour'];
$idCliente = $_SESSION['idCliente'];
$fecha = $_POST['fecha'];
$nroPasajeros = $_POST['nroPasajeros'];
$monto = $_POST['monto'];

$sql = "CALL procedure_insertar_reserva($idCliente,$idTour,'$fecha',$nroPasajeros,$monto)";
if ($conn->query($sql) === TRUE) {
    echo "Reserva realizada con éxito";
    header("Location: index.php");
} else {
    echo "Error: ".$sql."<br>".$conn->error;
}
$conn->close();
?>
