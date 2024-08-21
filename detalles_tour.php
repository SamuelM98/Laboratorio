<?php
include "conexion.php";

if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == 'get_price') {
    $idTour = $_GET['id'];
    $sql = "SELECT precio FROM tour WHERE idTour = $idTour";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $tour = $result->fetch_assoc();
        echo $tour['precio'];
    } else {
        echo "0";
    }
    $conn->close();
    exit;
}

if (isset($_GET['id'])) {
    $idTour = $_GET['id'];
    $sql = "CALL procedure_ver_tour($idTour)";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $tour = $result->fetch_assoc();
        echo "<h2>{$tour['titulo']}</h2>";
        echo "<p>{$tour['descripcion']}</p>";
        echo "<p>Precio por persina: \${$tour['precio']}</p>";
        echo "<p>Lugar de Inicio: {$tour['lugarInicio']}</p>";
        echo "<p>Lugar de Fin: {$tour['lugarFin']}</p>";
        echo "<p>Duración: {$tour['duracion']} horas</p>";
        echo "<p>Fecha de Inicio: {$tour['fechaInicio']}</p>";
        echo "<p>Fecha de Fin: {$tour['fechaFin']}</p>";
    } else {
        echo "No se encontraron detalles para este tour.";
    }
} else {
    $estado = 1;
    $sql = "CALL procedure_listar_tour($estado)";
    $result = $conn->query($sql);
    if ($result->num_rows > 1) {
        while ($row = $result->fetch_assoc()) {
            echo "<div class='card mb-3'>";
            echo "<div class='card-body'>";
            echo "<h5 class='card-title'>{$row['titulo']}</h5>";
            echo "<p class='card-text'>{$row['descripcion']}</p>";
            echo "<p class='card-text'><strong>Precio:</strong> \${$row['precio']}</p>";
            echo "<button class='btn btn-primary ver-mas' data-id='{$row['idTour']}'>Ver Más</button>";
            echo "</div>";
            echo "</div>";
        }
    } else {
        echo "No hay tours disponibles.";
    }
}
$conn->close();
?>
