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
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $pais = $_POST['pais'];
    $telefono = $_POST['telefono'];
    $dni = $_POST['dni'];
    $edad = $_POST['edad'];

    $insertarDatos = "INSERT INTO usuarios(nombre,apellido,email,password,fechaNacimiento,pais,telefono,dni,edad) values('$nombre','$apellido','$email','$password','$fechaNacimiento','$pais','$telefono','$dni','$edad')";

    if (mysqli_query($conexion, $insertarDatos)) {
      echo "<script>
                Swal.fire({
                  title: 'Nuevo usuario registrado correctamente',
                  icon: 'success',
                  confirmButtonText: 'OK'
                }).then((result) => {
                  if (result.isConfirmed) {
                    window.location.href = 'mostrarusuario.php';
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
