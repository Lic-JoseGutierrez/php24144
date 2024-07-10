<?php
session_start();
if (!isset($_SESSION['usuario'])) {
     
    header('Location: ../pages/login.php');
    exit();
}
?>
<?php
$conexion = mysqli_connect("localhost", "root", "", "insert-coin");

if (mysqli_connect_errno()) {
    echo "ERROR no se conecto: " . mysqli_connect_errno();
} else {
    echo "Se conecto a la BBDD de manera correcta...";
}

$id_usuario = mysqli_real_escape_string($conexion, $_GET['id_usuario']);

$consulta = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario='$id_usuario'");
$datos = mysqli_fetch_array($consulta);

mysqli_close($conexion);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>🎮Insert-Coin</title>
    <link rel="stylesheet" href="../style/style.css" />
    <!-- vinculacion con script -->
    <script src="../js/script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet" />
</head>

<body>

    <header>
        <nav>
            <ul>
                <h3 class="animate__animated animate__shakeY">
                    <a href="../index.php" class="link">🎮Insert-Coin</a>
                </h3>
                <li>
                    <a href="../api/api.php" class="link" title="API">
                        <img width="45" height="45" src="https://img.icons8.com/external-flaticons-lineal-color-flat-icons/64/external-api-computer-science-flaticons-lineal-color-flat-icons-4.png" alt="external-api-computer-science-flaticons-lineal-color-flat-icons-4" />
                    </a>
                </li>
                <li>
                    <a href="../pages/registrovideojuegos.php" class="link" id="logout" title="REGISTRAR JUEGO">
                        <img width="48" height="48" src="https://img.icons8.com/doodle/48/gaming.png" alt="gaming" />
                    </a>
                </li>
                <li>
                    <a href="../pages/mostrarusuario.php" class="link" id="mostrarusuario" title="ADMINISTRAR USUARIOS">
                        <img width="48" height="48" src="https://img.icons8.com/doodle/48/group--v1.png" alt="group--v1" />
                    </a>
                </li>
                <li>
                    <a href="../pages/logout.php" class="link" id="logout" title="LOGOUT">
                        <img width="50" height="50" src="https://img.icons8.com/pastel-glyph/64/shutdown--v4.png" alt="shutdown--v4" />
                    </a>
                </li>
            </ul>
        </nav>
    </header>
    <br><br><br>
    <main class="container_registro_main">
        <section class="container_registro_form">
            <h1 class="registro_form_titulo">Modificar Usuario</h1>

            <form action="modificarusuario2.php" method="post" class="registro_form" onsubmit="return validarFormularioRegistro()">
                <input type="hidden" name="id_usuario" value="<?php echo $datos['id_usuario']; ?>" />

                <input type="text" name="nombre" value="<?php echo $datos['nombre']; ?>" autocomplete="off" class="input_form" placeholder="Nombre" id="nombre" />

                <input type="text" name="apellido" value="<?php echo $datos['apellido']; ?>" autocomplete="off" placeholder="Apellido" class="input_form" id="apellido" />

                <input type="email" name="email" value="<?php echo $datos['email']; ?>" autocomplete="off" placeholder="Email" class="input_form" id="email" />

                <input type="password" name="password" value="<?php echo $datos['password']; ?>" autocomplete="off" placeholder="Password" class="input_form" id="password" />

                <input type="date" name="fechaNacimiento" value="<?php echo $datos['fechaNacimiento']; ?>" class="input_form" id="fechaNacimiento" />

                <select name="pais" id="pais" class="input_form form_select">
                    <option value="" readonly>Seleccione un País</option>
                    <option value="Argentina" <?php if ($datos['pais'] == 'Argentina') echo 'selected'; ?>>Argentina</option>
                </select>

                <input type="number" name="telefono" value="<?php echo $datos['telefono']; ?>" autocomplete="off" class="input_form" placeholder="Telefono" id="telefono" />

                <input type="number" name="dni" value="<?php echo $datos['dni']; ?>" autocomplete="off" class="input_form" placeholder="DNI" id="dni" />

                <input type="number" name="edad" value="<?php echo $datos['edad']; ?>" autocomplete="off" class="input_form" placeholder="Edad" id="edad" />

                <div class="container_form_terminos">
                    <input type="checkbox" name="terms" autocomplete="off" id="terms" />
                    <label for="terms" class="form_terminos_texto">Acepto términos y condiciones</label>
                </div>

                <input type="submit" value="Actualizar Usuario" class="btn_form" />
                <a href="./login.php" class="form_link">Iniciar Sesión</a>
            </form>
        </section>
    </main>
</body>

</html>