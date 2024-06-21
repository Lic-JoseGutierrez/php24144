<?php

// echo "Videojuego: " .  $_POST['nombre'];
// echo "<br>";
// echo "Descripcion: " .  $_POST['descripcion'];
// echo "<br>";
// echo "Genero: " .  $_POST['genero'];
// echo "<br>";
// echo "Consola: " .  $_POST['consola'];
// echo "<br>";
// echo "Año: " . $_POST['anio'];
// echo "<br>";
// echo "Estrellas: " . $_POST['estrellas'];
// echo "<br>";
// echo "Empresa: " . $_POST['empresa'];

// $nombre = $_POST['nombre'];
// $descripcion = $_POST['descripcion'];
// $genero = $_POST['genero'];
// $consola = $_POST['consola'];
// $anio = $_POST['anio'];
// $estrellas = $_POST['estrellas'];
// $empresa = $_POST['empresa'];

$nombre = isset($_POST['nombre']);
$descripcion = isset($_POST['descripcion']);
$genero = isset($_POST['genero']);
$consola = isset($_POST['consola']);
$anio = isset($_POST['anio']);
$estrellas = isset($_POST['estrellas']);
$empresa = isset($_POST['empresa']);

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Videojuegos</title>
</head>

<body>
    <center>
        <h1>Videojuego resgistrado</h1>

        <div class="container">
            <!-- Inicio del contenedor de la grilla Bootstrap -->
            <div class="card" style="width: 20rem;">
                <img src="../img/api.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> <?php echo "Nombre: " . $nombre ?></h5>
                    <p class="card-text"> <?php echo "Descripcion: " . $descripcion ?></p>
                    <p class="card-text"> <?php echo "Genero: " . $genero ?></p>
                    <p class="card-text"> <?php echo "Consola: " . $consola ?></p>
                    <p class="card-text"> <?php echo "Año: " . $anio ?></p>
                    <p class="card-text"> <?php echo "Estrellas: " . $estrellas ?></p>
                    <p class="card-text"> <?php echo "Empresa: " . $empresa ?></p>
                    <a href="../index.html" class="btn btn-primary">INICIO</a>
                </div>
            </div>
            <!-- Fin del contenedor de la grilla Bootstrap -->
        </div>
    </center>

</body>

</html>


<?php


/*
crear formulario de peliculas...

1-nombre
2-descripcion
3-genero
4-calificacion
5-anio
6-director (nombre)

a) cuando presione enviar.. deberia mostrarse la informacion en un archivo del tipo php....

*/

?>