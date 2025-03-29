<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="regis.css">
    <link rel="icon" href="../ima/fondo2.png">
    <link rel=" stylesheet " href="https://use.fontawesome.com/releases/v5.12.1/css/all.css " crossorigin="anonymous ">
    <title>Terapia Natural - San Juan - Registro de Usuario</title>
</head>
<body>
<div class="logo ">
        <a href="../inicio.php "><img src="../ima/fondo2.png " alt=" "></a>
    </div>
    <h2><i class="fas fa-user-plus"></i>Crea tu Cuenta</h2>
    <div class="clase-grande ">
        <div class="register-container ">
            
            <form action="registrar.php" method="POST">
                <div class="input-box ">
                    <input type="text" name="nombre" required><br><br>
                    <label for="nombre">Nombre:</label>    
                </div>
    
                <div class="input-box ">
                    <input type="email" name="correo" required><br><br>
                    <label for="correo">Correo:</label>
                </div>
    
                <div class="input-box ">
                    <input type="password" name="password" required><br><br>
                    <label for="password"> Contraseña:</label>
                </div>
                <p>Si ya tienes cuenta <a href="logiin.php">Aqui</a></p>
                <button type="submit" class="enviar-btn ">Registrar</button>
            </form>
        </div>
    </div>
</body>
</html>