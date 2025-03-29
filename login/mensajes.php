<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "sistema_turnos";

// Crear conexión
$conn = new mysqli($host, $user, $password, $dbname);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Validar que la solicitud sea POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener valores del formulario
    $correo_id = isset($_POST['email']) ? $_POST['email'] : null;
    $telefono = isset($_POST['telefono']) ? $_POST['telefono'] : null;
    $mensaje = isset($_POST['mensaje']) ? $_POST['mensaje'] : null;
    
    // Obtener usuario de la sesión si está definido
    $usuario_id = isset($_SESSION['usuario_id']) ? $_SESSION['usuario_id'] : null;

    // Evitar consulta si los datos están vacíos
    if ($correo_id && $telefono && $mensaje) {
        // Usar una consulta preparada
        $stmt = $conn->prepare("INSERT INTO consultas (telefono, mensaje, correo_id, usuario_id) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("sssi", $telefono, $mensaje, $correo_id, $usuario_id);

        if ($stmt->execute()) {
            echo "La consulta se ha hecho con éxito.";
        } else {
            echo "Error al guardar la consulta: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: Todos los campos son obligatorios.";
    }
}

// Cerrar conexión
$conn->close();
?>
