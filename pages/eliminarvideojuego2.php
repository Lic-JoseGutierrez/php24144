<?php
session_start();
if (!isset($_SESSION['usuario'])) {
     
    header('Location: ../pages/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>🎮Insert-Coin</title>
  <!-- vinculacion con css -->
  <link rel="stylesheet" href="../style/style.css" />
  <!-- vinculacion con script -->
  <script src="../js/script.js"></script>
  <!-- animaciones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- letra -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet" />
</head>

<body>

</body>

</html>

<?php

$conexion = mysqli_connect("localhost", "root", "", "insert-coin");

echo "<br>";

$id = 1;
$usuario = "admin";
$claveUsuario = "123456";

if (isset($id) && $usuario == "admin" && $claveUsuario == "123456") {

  if (isset($_GET['id_videojuego'])) {
    $conexion = mysqli_connect("localhost", "root", "", "insert-coin");

    if (mysqli_connect_errno()) {
      die("ERROR: No se pudo conectar a la base de datos: " . mysqli_connect_error());
    }

    $id_videojuego = $_GET['id_videojuego'];

    $id_videojuego = intval($id_videojuego);

    $eliminar = "DELETE FROM videojuegos WHERE id_videojuego = $id_videojuego";

    $eliminarQuery = mysqli_query($conexion, $eliminar);


    if (!$eliminarQuery) {
      echo "Ha ocurrido un ERROR: " . mysqli_error($conexion);
    } else {
      if (mysqli_affected_rows($conexion) > 0) {
        echo "<script>
                 Swal.fire({
                   title: 'Eliminación exitosa',
                   text: 'El juego con Id $id_videojuego fue eliminado correctamente.',
                   icon: 'success',
                   confirmButtonText: 'OK'
                 }).then((result) => {
                   if (result.isConfirmed) {
                     window.location.href = 'mostrarvideojuego.php';
                   }
                 });
              </script>";
      } else {
        echo "No se encontró un juego con ID $id_videojuego.";
      }
    }
  } else {
    echo "No se proporcionó un id_videojuego.";
  }
}
?>