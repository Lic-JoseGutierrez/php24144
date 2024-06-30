<?php

// $nombre = isset($_POST['nombre']);
// $descripcion = isset($_POST['descripcion']);
// $genero = isset($_POST['genero']);
// $consola = isset($_POST['consola']);
// $anio = isset($_POST['anio']);
// $estrellas = isset($_POST['estrellas']);
// $empresa = isset($_POST['empresa']);

// ESTO DEBERIA ESTAR SIEMPRE (primer filtro)
if ($_POST) {

    //MUESTRA LOS DATOS
    // var_dump($_POST); 

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $genero = $_POST['genero'];
    $consola = $_POST['consola'];
    $anio = $_POST['anio'];
    $estrellas = $_POST['estrellas'];
    $empresa = $_POST['empresa'];

    // validacion con PHP
    if ($nombre == "" || $descripcion == "" || $genero == "" || $consola == "" || $anio == "" || $estrellas == "" || $empresa == "") {
        // Si al menos uno de los campos está vacío
        echo '<script>alert("Complete todos los campos.");</script>';
    } else {
        // Si los campos tienen contenido
        echo "Los campos están completos.";
    }
}
?>


<!-- CARD -->
<!doctype html>
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
                    <a href="../index.html" class="link">🎮Insert-Coin</a>
                </h3>
                <li><a href="../api/api.html" class="link">🎮Api</a></li>
                <li>
                    <a href="../secciones/registrovideojuegos.php" class="btn_mi_cuenta" id="mi_cuenta">
                        Registrar videojuego
                    </a>
                </li>
                <li>
                    <a href="../secciones/login.html" class="btn_mi_cuenta" id="mi_cuenta">
                        Mi cuenta
                    </a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="container_registro_main">
        <section class="container_registro_form">
            <div class="container">
                <h1 class="registro_form_titulo">Videojuego registrado</h1>
                <div class="card">
                    <img src="../img/api.jpg" alt="img">
                    <div class="card-body">
                        <h3 class="card"><strong>Nombre:</strong> <?php echo htmlspecialchars($nombre); ?></h3>
                        <h3 class="card"><strong>Descripción:</strong> <?php echo htmlspecialchars($descripcion); ?></h3>
                        <h3 class="card"><strong>Género:</strong> <?php echo htmlspecialchars($genero); ?></h3>
                        <h3 class="card"><strong>Consola:</strong> <?php echo htmlspecialchars($consola); ?></h3>
                        <h3 class="card"><strong>Año:</strong> <?php echo htmlspecialchars($anio); ?></h3>
                        <h3 class="card"><strong>Estrellas:</strong> <?php echo htmlspecialchars($estrellas); ?></h3>
                        <h3 class="card"><strong>Empresa:</strong> <?php echo htmlspecialchars($empresa); ?></h3>
                        <a href="../index.html" class="btn_card">INICIO</a>

                    </div>
                </div>
            </div>
        </section>
    </main>

</body>

</html>