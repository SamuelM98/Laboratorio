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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="Assets/css/inicio.css">
    <link rel="stylesheet" href="Assets/css/footer.css">
    <link rel="icon" href="Assets/img/icono.png" type="image/png">
    <title>Registros Flash</title>
</head>
<body>
    <div class="container-fluid">
        <div class="navbar">
            <img src="Assets/img/logoRF.png" alt="REGISTROFLASH" style="height: 80px;"/>
            <nav>
                <a href="index.php"><b>Inicio</b></a>
                <a href="tours.php"><b>Tours</b></a>
                <a href="reservas_usuario.php"><b>Reservas</b></a>
                <a href="nosotros.html"><b>Nosotros</b></a>
                <a href="#contactos"><b>Contactos</b></a>
            </nav>
            <div class="icons">
                <a href="logout.php" class><i class="fas fa-user"></i></a>
            </div>
        </div>
    </div>
    <div class="container cuerpo pt-5"><br><br>
        <h2 class="mt-5 text-center"style="color: white;">RANKING TOURS</h2>
        <div class="container mt-3">
            <div class="card">
                <img src="Assets/img/inicio/Machu Picchu.jpg" alt="Machu Picchu">
                <div class="info">
                    <h3>Machu Picchu</h3>
                </div>
            </div>
            <div class="card">
                <img src="Assets/img/inicio/Huacachina.jpg" alt="Huacachina">
                <div class="info">
                    <h3>Huacachina</h3>
                </div>
            </div>
            <div class="card">
                <img src="Assets/img/inicio/Isla Ballesta.jpg" alt="Isla Ballesta">
                <div class="info">
                    <h3>Isla Ballesta</h3>
                </div>
            </div>
            <div class="card">
                <img src="Assets/img/inicio/Lineas de Nazca.png" alt="Lineas de Nazca">
                <div class="info">
                    <h3>Lineas de Nazca</h3>
                </div>
            </div>
            <div class="card">
                <img src="Assets/img/inicio/Valle del Colca.png" alt="Valle del Colca">
                <div class="info">
                    <h3>Valle del Colca</h3>
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