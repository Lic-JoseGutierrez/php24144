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

    $id_usuario = $_POST['id_usuario'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $pais = $_POST['pais'];
    $telefono = $_POST['telefono'];
    $dni = $_POST['dni'];

    // Obtener la fecha actual
    $fecha_actual = date("Y-m-d");

    // Comparar edades
    $edad_minima = 18;

    // Calcular la diferencia en años
    $diff = date_diff(date_create($fechaNacimiento), date_create($fecha_actual));
    $edad_persona = $diff->y;  // Obtiene la diferencia en años

    if ($edad_persona < $edad_minima) {
      echo "<script>
                 Swal.fire({
                   title: 'Debe ser mayor de 18 años para registrarse.',
                   icon: 'error',
                   confirmButtonText: 'OK'
                 }).then((result) => {
                 if (result.isConfirmed) {
                    window.location.href = 'mostrarusuario.php';
                  } 
                 });
              </script>";
    } else {

      $consulta = "UPDATE usuarios SET 
                nombre='$nombre', 
                apellido='$apellido', 
                email='$email', 
                password='$password',
                fechaNacimiento='$fechaNacimiento', 
                pais='$pais', 
                telefono='$telefono', 
                dni='$dni' 
                WHERE id_usuario='$id_usuario'";

      if (mysqli_query($conexion, $consulta)) {
        echo "<script>
                 Swal.fire({
                   title: 'Modificación exitosa',
                   text: 'El usuario con Id $id_usuario fue modificado correctamente.',
                   icon: 'success',
                   confirmButtonText: 'OK'
                 }).then((result) => {
                   if (result.isConfirmed) {
                     window.location.href = 'mostrarusuario.php';
                   }
                 });
              </script>";
      } else {
        echo "Error al actualizar los datos: " . mysqli_error($conexion);
      }
    }
  }
}
mysqli_close($conexion);
?>