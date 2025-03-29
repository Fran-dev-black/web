<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: logiin.php");
    exit();
}
?>

    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link rel="icon" href="../ima/fondo2.png">
        <link rel="stylesheet" href="turnos.css">
        <title>Terapia Natural - San Juan - Turnos</title>
    </head>

    <body>

        <nav class="navbar">
            <div class="logo">
                <a href="../index.html"><img src="../ima/logo-pagina.png" alt="" width="170px" height="60px"></a>
            </div>
            <ul class="menu">
                <li>
                    <a href="../index.html" style="font-family: Arial, Helvetica, sans-serif;">Inicio</a></li>

                <li>
                    <a href="../servicios.html" style="font-family: Arial, Helvetica, sans-serif;">Servicio</a></li>
                <li>
                    <a href="../contact.html" style="font-family: Arial, Helvetica, sans-serif;">Contacto</a></li>
                <li>
                    <a href="turnos.php" style="font-family: Arial, Helvetica, sans-serif">Turnos</a></li>
                <li>
                    <a href="../beneficios.html" style="font-family: Arial, Helvetica, sans-serif;">Beneficios</a></li>
                <li><a href="logout.php" style="font-family: Arial, Helvetica, sans-serif;">Cerrar Sesion</a></li>
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
            <script>
                window.addEventListener("scroll", function() {
                    var navbar = document.querySelector(".navbar");
                    if (window.scrollY > 50) {
                        navbar.classList.add("scrolled");
                    } else {
                        navbar.classList.remove("scrolled");
                    }
                });
            </script>
        </div>







        <footer class="foter">
            <div class="container-footer">
                <div class="sesion-footer">
                    <h3>Siguenos</h3>
                    <div class="social-icons">
                        <ul>
                            <li id="whatsap"><a href="https://wa.me/5492645796824" target="_blank"><i class="fa-brands fa-whatsapp" aria-hidden="true" ></i></a>
                            </li>
                            <li id="facebook">
                                <a href=""><i class="fa-brands fa-facebook-f" aria-hidden="true" ></i></a>
                            </li>
                            <li id="instagram">
                                <a href="https://www.instagram.com/terapia_natural_cm/?utm_source=qr&r=nametag" tarjet="_blank"><i class="fa-brands fa-instagram" aria-hidden="true" ></i></a>
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
                    <ul class="enlaces">
                        <li>
                            <a href="../index.html">Inicio</a>
                        </li>
                        <li>
                            <a href="../servicios.html">Servicios</a>
                        </li>
                        <li>
                            <a href="../contact.html">Contacto</a>
                        </li>
                        <li><a href="turnos.php">Turnos</a></li>
                        <li><a href="../beneficios.html">Beneficios</a></li>
                    </ul>
                </div>
                <div class="sesion-footer">
                    <h3>Contacto</h3>
                    <ul class="enlaces">
                        <li><i class="fas fa-phone-alt"></i> Telefono: <a href="https://wa.me/5492645796824" target="_blank">+54 9 264 579-6824</a></li>
                        <li><i class="fas fa-envelope"></i> Correo: <a href="mailto:terapianaturalcm@gmail.com" target="_blank">MasajistaFD@gmail.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>2025 Terapia Natural. Todos los derechos reservados</p>
            </div>
        </footer>

    </html>