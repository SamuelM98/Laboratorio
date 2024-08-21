<?php
include "conexion.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nueva cuenta</title>
    <link rel="icon" href="Assets/img/icono.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/nueva_cuenta.css">
    <script>
    document.querySelector('.btn-secondary').addEventListener('click', function() {
        // Evitar la validación y redirigir
        const form = this.closest('form');
        if (form) {
            form.noValidate = true; // Desactiva la validación del formulario
            form.reset(); // Opcional: Resetea el formulario
        }
    });
</script>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Regístrate</h1>
        <h6>Es rápido y fácil</h6>
        <?php if(isset($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="login.php" method="post">
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Nombre">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" id="apellido" name="apellido" required placeholder="Apellido">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" id="dni" name="dni" required placeholder="Dni">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" id="telefono" name="telefono" required placeholder="Telefono">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <input type="text" class="form-control" id="fecha_nac" name="fecha_nac" required placeholder="Fecha de Nacimiento">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" id="genero" name="genero" required placeholder="Genero">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="text" class="form-control" id="correo" name="correo" required placeholder="Correo">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="text" class="form-control" id="contraseña" name="contraseña" required placeholder="Contraseña">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <input type="text" class="form-control" id="conf_contraseña" name="conf_contraseña" required placeholder="Confirmar Contraseña">
                </div>
            </div>
            <div class="row">
                <div class="botones">
                    <button class="btn btn-secondary" type="button" onclick="location.href='login.php'">Cancelar</button>
                    <button class="btn btn-primary" type="submit">Registrarse</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
