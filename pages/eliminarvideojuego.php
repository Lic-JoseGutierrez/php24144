<?php
session_start();
if (!isset($_SESSION['usuario'])) {
     
    header('Location: ../pages/login.php');
    exit();
}
?>

<?php

$conexion = mysqli_connect("localhost", "root", "", "insert-coin");

echo "<br>";

$id = 1;
$usuario = "admin";
$claveUsuario = "123456";

if (isset($id) && $usuario == "admin" && $claveUsuario == "123456") {

    if (mysqli_connect_errno()) {
        die("ERROR: No se pudo conectar a la base de datos: " . mysqli_connect_error());
    }

    $consultas1 = mysqli_query($conexion, "select * from videojuegos");
    echo "<br>";
    echo "Consulta de juegos";
    //var_dump($consultas1);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>🎮Insert-Coin</title>
    <!-- vinculacion con css -->
    <link rel="stylesheet" href="../style/style.css" />
    <!-- vinculacion con script -->
    <!-- <script src="../js/script2.js"></script> -->
    <!-- animaciones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- letra -->
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

    <main class="container_registro_main">
        <section class="container_registro_form">
            <div class="container">
                <h1 class="registro_form_titulo">Eliminar Videojuego</h1>
                <div class="card">
                    <img src="../img/api.jpg" alt="img">
                    <div class="card-body">
                        <form action="eliminarvideojuego2.php" method="GET">

                            <label class="card" for="id_videojuego">Id Videojuego:</label>

                            <input class="card" type="number" id="id_videojuego" name="id_videojuego" required>

                            <input class="btn_card" type="submit" value="Eliminar Videojuego" />

                        </form>
                    </div>

                </div>
            </div>
        </section>
    </main>
</body>

</html>