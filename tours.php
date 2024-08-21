<?php
// include "conexion.php";

// session_start();
// if (!isset($_SESSION['idCliente'])) {
//     header("Location: login.php");
//     exit();
// }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tours</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="Assets/js/jquery.min.js"></script>
    <link rel="icon" href="Assets/img/icono.png" type="image/png">
    <script src="Assets/js/tour.js"></script>
    <link rel="stylesheet" href="Assets/css/tours.css">
    <link rel="stylesheet" href="Assets/css/footer.css">
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
    
    <div class="container cuerpo">
        <div class="container">
            <div id="tours"></div>
        </div>
    
        <div class="modal fade " id="tourModal" tabindex="-1" role="dialog" aria-labelledby="tourModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tourModalLabel">Detalles del Tour</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-body" id="tourDetails"></div>
                    <div class="boton">
                        <div><a href="#" id="reservarBtn" class="btn btn-primary">Realizar Reserva</a></div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer bg-light mt-4">
            <div class="container1">
                <div class="row">
                    <!-- Información de contacto -->
                    <div class="col-md-4 text-md-start text-center">
                        <p>
                            <i class="fas fa-map-marker-alt"></i> <strong>Miraflores</strong><br>
                            <i class="fas fa-phone-alt"></i> 999-999-999<br>
                            <i class="fas fa-envelope"></i> registroflash@tours.pe
                        </p>
                    </div>

                    <!-- Redes sociales -->
                    <div class="col-md-4 text-md-center text-center">
                        <p><strong><b>SÍGUENOS:</b></strong></p>
                        <a href="#" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="text-dark me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-dark"><i class="fab fa-twitter"></i></a>
                    </div>

                    <!-- Descripción -->
                    <div class="col-md-4 text-md-end text-center">
                        <p><strong><b>Acerca de REGISTROFLASH</b></strong></p>
                        <p>Lorem ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
