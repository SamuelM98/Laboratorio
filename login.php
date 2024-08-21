<?php
include "conexion.php";

session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    
    $sql = "SELECT idCliente FROM cliente WHERE correo=? AND contraseña=? AND estado=1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss",$correo,$contraseña);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $cliente = $result->fetch_assoc();
        $_SESSION['idCliente'] = $cliente['idCliente'];
        header("Location: index.php");
        exit();
    } else {
        $error = "Correo o contraseña incorrectos";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" href="Assets/img/icono.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/css/login.css">
</head>
<body>
    <div class="container log">
        <h1 class="mt-4">Inicio de Sesión</h1>
        <?php if(isset($error)):?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>
        <form action="login.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="correo" name="correo" required placeholder="Correo">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="contraseña" name="contraseña" required placeholder="Contraseña">
            </div>
            <div class="form-group inicio"><a href="crear_cuenta.php">Crear cuenta</a></div>
            <div class="form-group inicio"><a href="#">Recuperar cuenta</a></div>
            <div class="form-group inicio"><a href="index.php">Continuar como invitado</a></div>
            <button type="submit" class="btn btn-success">Comencemos</button>
            <br><br>
            <div class="inicir_con_redes">
                <div class="boton btn" style="background-color: #3B5899;"><a href="#">Facebook</a></div>
                <div class="boton btn" style="background-color: #DF442F;"><a href="#">Gmail</a></div>
                <div class="boton btn" style="background-color: #036FC2;"><a href="#">Outlook</a></div>
            </div>
        </form>
    </div>
</body>
</html>
