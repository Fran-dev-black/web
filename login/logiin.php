<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicio_secion.css">
    <link rel="icon" href="../ima/fondo2.png">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <title>Terapia Natural - San Juan - Iniciar Sesión</title>
</head>
<body>
    <div class="logo">
        <a href="../inicio.html"><img src="../ima/fondo2.png" alt=""></a>
    </div>
    <div class="clase-grande">
        <div class="register-container">
            <form action="iniciar_sesion.php" method="POST">
            <h2>Iniciar Sesión</h2>
            <div class="input-box">
                <input type="email" name="correo" required><br><br>
                <label for="correo">Correo:</label>
            </div>

            <div class="input-box">
                <input type="password" name="password" required><br><br>
                <label for="password">Contraseña:</label>
            </div>

            <button type="submit" class="enviar-btn"><a href="../inicio.php"></a>Iniciar sesión</button>
            <p class="registrarse">Sino tienes Cuenta Registraste <a href="registro.php">aqui</a></p>
            <p class="volver"><a href="../inicio.php"><i class="fas fa-reply"></i>  Volver</a></p>
        </form>
        </div>
    </div>
</body>
</html>
