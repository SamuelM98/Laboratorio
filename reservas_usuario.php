<?php
include "conexion.php";

session_start();
if (!isset($_SESSION['idCliente'])) {
    header("Location: login.php");
    exit();
}

$idCliente = $_SESSION['idCliente'];

$sql = "CALL procedure_reservas_de_usuarios(?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $idCliente);
$stmt->execute();
$result = $stmt->get_result();
$reservas = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Reservas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/reservas_usuario.css" type="text/css">
    <link rel="stylesheet" href="Assets/css/footer.css" type="text/css">
    <script src="Assets/js/reservas.js"></script>
    <link rel="icon" href="Assets/img/icono.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container-fluid">
        <div class="navbar">
            <img src="Assets/img/logoRF.png" alt="REGISTROFLASH" style="height: 80px;"/>
            <nav>
                <a href="index.php"><b>Inicio</b></a>
                <a href="tours.php"><b>Tours</b></a>
                <a href="reservas_usuario.php"><b>Reservas</b></a>
                <a href="#nosotros"><b>Nosotros</b></a>
                <a href="#contactos"><b>Contactos</b></a>
            </nav>
            <div class="icons">
                <a href="logout.php" class><i class="fas fa-user"></i></a>
            </div>
        </div>
    </div>
    <div class="container">
        <h1 class="text-center" style="margin: 140px 0 20px; color:white;">Mis Reservas</h1>
        <table class="table table-bordered table-hover" style="background: white">
            <thead>
                <tr>
                    <th class="text-center">Titulo</th>
                    <th class="text-center">Descripcion</th>
                    <th class="text-center">Precio</th>
                    <th class="text-center">Ver Más</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservas as $reserva): ?>
                    <tr>
                        <td class="text-center"><?php echo $reserva['titulo']; ?></td>
                        <td class="text-center"><?php echo $reserva['descripcion']; ?></td>
                        <td class="text-center"><?php echo $reserva['precio']; ?></td>
                        <td class="text-center">
                            <button class="btn btn-info btn-xs" onclick="verInfo(<?php echo $reserva['idReserva']; ?>)">Ver Más</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <footer class="footer bg-light mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-md-start text-center">
                        <p>
                            <i class="fas fa-map-marker-alt"></i> <strong>Miraflores</strong><br>
                            <i class="fas fa-phone-alt"></i> 999-999-999<br>
                            <i class="fas fa-envelope"></i> registroflash@tours.pe
                        </p>
                    </div>

                    <div class="col-md-4 text-md-center text-center">
                        <p><strong><b>SÍGUENOS:</b></strong></p>
                        <a href="#" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-dark me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-twitter"></i></a>
                    </div>

                    <div class="col-md-4 text-md-end text-center">
                        <p><strong><b>Acerca de REGISTROFLASH</b></strong></p>
                        <p>Lorem ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <div class="modal fade" id="reservaModal" tabindex="-1" role="dialog" aria-labelledby="reservaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="reservaModalLabel">Detalles de la Reserva</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" id="reservaDetails"></div>
                <div class="modal-footer d-flex justify-content-between">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
