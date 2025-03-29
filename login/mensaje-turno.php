<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="../ima/fondo2.png">
    <link rel="stylesheet" href="turnos.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar">
            <div class="logo">
                <a href="inicio.php"><img src="../ima/logo-pagina.png" alt="" width="170px" height="60px"></a>
            </div>
            <ul class="menu">
                <li>
                    <a href="../inicio.php">Inicio</a></li>

                <li>
                    <a href="../servicio.php">Servicio</a></li>
                <li>
                    <a href="../index.php">Contacto</a></li>
                <li>
                    <a href="turnos.php">Turnos</a></li>
                <li>
                    <a href="../beneficios.php">Beneficios</a></li>
                <li><a href="iniciar_sesion.php">Iniciar sesion</a></li>
            </ul>
            <div class="hamburguesa" onclick="toggleMenu()">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </nav>

        <script>
            function toggleMenu() {
                const menu = document.querySelector(".menu");
                const hamburguesa = document.querySelector(".hamburguesa");
                menu.classList.toggle("activado");
                hamburguesa.classList.toggle("activado");
            }
        </script>
        <div class="box-usuario-saludar">
        <div class="saludar-usuario">
            <span class="letter">B</span>
            <span class="letter">I</span>
            <span class="letter">E</span>
            <span class="letter">N</span>
            <span class="letter">V</span>
            <span class="letter">E</span>
            <span class="letter">N</span>
            <span class="letter">I</span>
            <span class="letter">D</span>
            <span class="letter">@</span>
                  <?php echo $_SESSION['nombre']; ?>!</h3>
        </div>
        </div>
        <div class="container">
            <header>
                <h3>Aqui Podras Gestionar tus turnos</h3>
            </header>
            <p>Solicitar turno:</p>
            <form action="solicitar_turno.php" method="POST">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" required><br><br>

                <label for="hora">Hora:</label>
                <input type="time" name="hora" required><br><br>

                <label for="tipo_masaje">Tipo de Masaje:</label>
                <select id="tipo_masaje" name="tipo_masaje" required>
                <option value="">Selecciona una opción</option>
                <option value="relajante">Relajante</option>
                <option value="terapéutico">Terapéutico</option>
                <option value="descontracturante">Descontracturante</option>
                <option value="Circulatorio">Circulatorio</option>
                <option value="Reflexologia Podal">Reflexologia Podal</option>
                <option value="Facial">Facial</option>
                <option value="Cervical">Cervical</option>
                <option value="Pies">Pies</option>
                <option value="Reductor de abdomen">Reductor de abdomen</   option>
                <option value="Deportivo">Deportivo</option>
            </select>

                <button class="button-turno" type="submit">Solicitar turno</button>
            </form>
        </div>
        <div class="mensaje-turno">
        <?php
        session_start();

        if (!isset($_SESSION['usuario_id'])) {
        header("Location: logiin.php");
        exit();
        }

        $host = "localhost";
        $user = "root";
        $password = "";
        $dbname = "sistema_turnos";

// Crear conexión
        $conn = new mysqli($host, $user, $password, $dbname);

// Comprobar conexión
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario_id = $_SESSION['usuario_id'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $tipo_masaje=$_POST['tipo_masaje'];

    $sql = "INSERT INTO turnos (fecha, hora, tipo_masaje, usuario_id) VALUES ('$fecha', '$hora', '$tipo_masaje', '$usuario_id')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Turno solicitado con éxito";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
        </div>
        <script src="scroll.js"></script>






        <footer class="foter">
            <div class="container-footer">
                <div class="sesion-footer">
                    <h3>Siguenos</h3>
                    <div class="social-icons">
                        <ul>
                            <li id="whatsap"><a href=""><i class="fa-brands fa-whatsapp" aria-hidden="true" ></i></a>
                            </li>
                            <li id="facebook">
                                <a href=""><i class="fa-brands fa-facebook-f" aria-hidden="true" ></i></a>
                            </li>
                            <li id="instagram">
                                <a href=""><i class="fa-brands fa-instagram" aria-hidden="true" ></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="sesion-footer">
                    <h3>Sobre Nosotros</h3>
                    <p>En Terapia Natural, creemos que el bienestar comienza con la relajación. Nuestro espacio está diseñado para que desconectes del estrés diario y te sumerjas en un ambiente de calma y armonía.</p>
                </div>
                <div class="sesion-footer">
                    <h3>Enlaces</h3>
                    <ul>
                        <li>
                            <a href="../inicio.php">Inicio</a>
                        </li>
                        <li>
                            <a href="../servicios.php">Servicios</a>
                        </li>
                        <li>
                            <a href="../index.php">Contacto</a>
                        </li>
                    </ul>
                </div>
                <div class="sesion-footer">
                    <h3>Contacto</h3>
                    <ul>
                        <li><i class="fas fa-phone-alt"></i> Telefono: <a href="https://wa.me/5492645796824" target="_blank">+54 9 264 579-6824</a></li>
                        <li><i class="fas fa-envelope"></i> Correo: <a href="mailto:terapianaturalcm@gmail.com" target="_blank">MasajistaFD@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>2025 Terapia Natural. Todos los derechos reservados</p>
            </div>
        </footer>
    
</body>
</html>