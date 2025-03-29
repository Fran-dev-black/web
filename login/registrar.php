
<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "sistema_turnos";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Error en la conexión: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = trim($_POST['nombre']);   
    $correo = trim($_POST['correo']);
    $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);

    // Usar consulta preparada
    $sql = $conn->prepare("INSERT INTO usuarios (nombre, correo, password) VALUES (?, ?, ?)");
    $sql->bind_param("sss", $nombre, $correo, $password); // "sss" = 3 valores string

    if ($sql->execute()) {
        echo "Te has registrado con éxito. <a href='../inicio.html'>Volver</a>";
    } else {
        echo "Error al registrar: " . $conn->error;
    }

    $sql->close();
}

$conn->close();
?>

