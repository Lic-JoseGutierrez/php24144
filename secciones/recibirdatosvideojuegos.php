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

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

</body>

</html>