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
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (mysqli_connect_errno()) {
      die("ERROR: No se pudo conectar a la base de datos: " . mysqli_connect_error());
    }

    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $genero = $_POST['genero'];
    $consola = $_POST['consola'];
    $anio = $_POST['anio'];
    $estrellas = $_POST['estrellas'];
    $empresa_id = $_POST['empresa_id'];

    $insertarDatos = "INSERT INTO videojuegos(nombre,descripcion,genero,consola,anio,estrellas,empresa_id) VALUES ('$nombre','$descripcion','$genero','$consola','$anio','$estrellas','$empresa_id')";

    if (mysqli_query($conexion, $insertarDatos)) {
      echo "<script>
                Swal.fire({
                  title: 'Nuevo juego registrado correctamente',
                  icon: 'success',
                  confirmButtonText: 'OK'
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location.href = 'mostrarvideojuego.php';
                  }
                });
              </script>";
    } else {
      echo "Error al registrar el nuevo videojuego: " . mysqli_error($conexion);
    }
  }
}
mysqli_close($conexion);
?>