<?php
session_start();
if (!isset($_SESSION['idCliente'])) {
    header("Location: login.php");
    exit();
}

include "conexion.php";

$idTour = isset($_GET['id']) ? $_GET['id'] : 0;
$idCliente = $_SESSION['idCliente'];

$sqlCliente = "SELECT nombre, apellido, dni, correo FROM cliente WHERE idCliente = '$idCliente'";
$resultCliente = $conn->query($sqlCliente);
$cliente = $resultCliente->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registros Flash</title>
    <link rel="icon" href="Assets/img/icono.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="Assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="Assets/css/reservas.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Realizar Reserva</h1>
        <form action="guardar_reserva.php" method="post">
            <input type="hidden" name="idTour" id="idTour" value="<?php echo $idTour; ?>">
            <input type="hidden" name="idCliente" id="idCliente" value="<?php echo $idCliente; ?>">
            
            <!-- Información del cliente -->
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $cliente['nombre']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $cliente['apellido']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="dni">DNI</label>
                <input type="text" class="form-control" id="dni" name="dni" value="<?php echo $cliente['dni']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="correo">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $cliente['correo']; ?>" readonly>
            </div>

            <!-- Información de la reserva -->
            <div class="form-group">
                <label for="fecha">Fecha</label>
                <input type="date" class="form-control" id="fecha" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="nroPasajeros">Número de Pasajeros</label>
                <input type="number" class="form-control" id="nroPasajeros" name="nroPasajeros" required>
            </div>
            <div class="form-group">
                <label for="monto">Monto</label>
                <input type="number" class="form-control" id="monto" name="monto" readonly>
            </div>
            <button type="submit" class="btn btn-primary">Reservar</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            var idTour = $('#idTour').val();

            // Obtener el precio del tour
            $.ajax({
                url: 'detalles_tour.php',
                method: 'GET',
                data: { id: idTour, action: 'get_price' },
                success: function(data) {
                    var precio = parseFloat(data);
                    $('#nroPasajeros').on('input', function() {
                        var nroPasajeros = $(this).val();
                        var monto = precio * nroPasajeros;
                        $('#monto').val(monto.toFixed(2));
                    });
                }
            });
        });
    </script>
</body>
</html>
