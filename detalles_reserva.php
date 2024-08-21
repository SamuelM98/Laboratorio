<?php
include "conexion.php";

$idReserva = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($idReserva > 0) {
    $sql = "SELECT r.idReserva, t.titulo, t.descripcion, t.precio, t.lugarInicio, t.lugarFin, t.duracion, t.fechaInicio, t.fechaFin, r.fecha, r.nroPasajeros, r.monto
            FROM reserva r
            JOIN tour t ON r.idTour = t.idTour
            WHERE r.idReserva = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $idReserva);
    $stmt->execute();
    $result = $stmt->get_result();
    $reserva = $result->fetch_assoc();

    if ($reserva) {
        echo "<p><strong>Título:</strong> {$reserva['titulo']}</p>";
        echo "<p><strong>Descripción:</strong> {$reserva['descripcion']}</p>";
        echo "<p><strong>Precio:</strong> {$reserva['precio']}</p>";
        echo "<p><strong>Lugar de Inicio:</strong> {$reserva['lugarInicio']}</p>";
        echo "<p><strong>Lugar de Fin:</strong> {$reserva['lugarFin']}</p>";
        echo "<p><strong>Duración:</strong> {$reserva['duracion']}</p>";
        echo "<p><strong>Fecha de Inicio:</strong> {$reserva['fechaInicio']}</p>";
        echo "<p><strong>Fecha de Fin:</strong> {$reserva['fechaFin']}</p>";
        echo "<p><strong>Fecha de Reserva:</strong> {$reserva['fecha']}</p>";
        echo "<p><strong>Número de Pasajeros:</strong> {$reserva['nroPasajeros']}</p>";
        echo "<p><strong>Monto Total:</strong> {$reserva['monto']}</p>";
    } else {
        echo "No se encontraron detalles para esta reserva.";
    }
} else {
    echo "ID de reserva inválido.";
}

$conn->close();
?>
