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

if (mysqli_connect_errno()) {

    echo "ERROR no se conecto: " . mysqli_connect_errno();
} else {
    // echo "Se conecto a la BBDD de manera correcta...";
}

$usuarios = mysqli_query($conexion, "select email, password from usuarios");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];

    foreach ($usuarios as $usuario) {
        if ($usuario['email'] === $email && $usuario['password'] === $password) {
            $_SESSION['usuario'] = $email;
            echo "<script>
                 Swal.fire({
                   title: 'Inicio de sesion correcta!',
                   icon: 'success',
                   confirmButtonText: 'OK'
                 }).then((result) => {
                   if (result.isConfirmed) {
                     window.location.href = '../index.php';
                   }
                 });
              </script>";
            exit();
        }
    }
    echo "<script>
                 Swal.fire({
                   title: 'Credenciales incorrectas. Por favor, inténtelo de nuevo.',
                   icon: 'error',
                   confirmButtonText: 'OK'
                 }).then((result) => {
                   if (result.isConfirmed) {
                     window.location.href = 'login.php';
                   }
                 });
              </script>";
    mysqli_close($conexion);
}
?>