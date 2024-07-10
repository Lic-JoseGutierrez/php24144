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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>🎮Insert-Coin</title>
  <!-- vinculacion con css -->
  <link rel="stylesheet" href="../style/style.css" />
  <!-- vinculacion con script -->
  <script src="../js/confirmaeliminar.js"></script>
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
  <br><br><br><br>
  <main class="container_registro_main">

    <table class="data-table">
      <tr>
        <td>Id</td>
        <td>Nombre</td>
        <td>Descripcion</td>
        <td>Genero</td>
        <td>Consola</td>
        <td>Año</td>
        <td>Estrellas</td>
        <td>Modificar</td>
        <td>Eliminar</td>
      </tr>

      <?php
      while ($datos = mysqli_fetch_array($consultas1)) {
        echo "<tr>
    
    <td>",  $datos['id_videojuego'],  "</td>
    <td>",  $datos['nombre'],  "</td>
    <td>",  $datos['descripcion'], "</td>
    <td>",  $datos['genero'],  "</td>
    <td>",  $datos['consola'],  "</td>
    <td>",  $datos['anio'],  "</td>
    <td>",  $datos['estrellas'],  "</td>
    <td><a href=\"modificarvideojuego.php?id_videojuego=" . $datos['id_videojuego'] . "\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 64 64\" width=\"35\" height=\"35\">
                <linearGradient id=\"0O0q6J4HBgQKyT39nvTa~a_56304_gr1\" x1=\"46.807\" x2=\"46.807\" y1=\"9.849\" y2=\"24.215\" gradientUnits=\"userSpaceOnUse\" spreadMethod=\"reflect\"><stop offset=\"0\" stop-color=\"#6dc7ff\"></stop><stop offset=\"1\" stop-color=\"#e6abff\"></stop></linearGradient><path fill=\"url(#0O0q6J4HBgQKyT39nvTa~a_56304_gr1)\" d=\"M49.482,24.392l-9.874-9.874l4.232-4.232c0.39-0.39,1.021-0.39,1.411,0l8.464,8.464 c0.39,0.39,0.39,1.021,0,1.411L49.482,24.392z\"></path><linearGradient id=\"0O0q6J4HBgQKyT39nvTa~b_56304_gr2\" x1=\"32\" x2=\"32\" y1=\"8.084\" y2=\"55.83\" gradientUnits=\"userSpaceOnUse\" spreadMethod=\"reflect\"><stop offset=\"0\" stop-color=\"#1a6dff\"></stop><stop offset=\"1\" stop-color=\"#c822ff\"></stop></linearGradient><path fill=\"url(#0O0q6J4HBgQKyT39nvTa~b_56304_gr2)\" d=\"M50.697,25.999l4.428-4.428c1.167-1.167,1.167-3.065,0-4.232l-8.464-8.464 c-1.167-1.167-3.065-1.167-4.232,0l-4.428,4.428c-0.664-0.175-1.4-0.011-1.92,0.509l-1.411,1.411c-0.52,0.52-0.684,1.256-0.509,1.92 L11.198,40.106l-0.508,0.508l-0.2,0.2l-2.373,9.967c-0.343,1.442,0.078,2.928,1.126,3.976s2.534,1.469,3.976,1.125l9.967-2.373 l0.2-0.2l0.508-0.508l22.964-22.964c0.664,0.175,1.4,0.011,1.92-0.509l1.411-1.411C50.708,27.399,50.872,26.663,50.697,25.999z M47.367,27.92L36.081,16.634l1.411-1.411l11.285,11.285L47.367,27.92z M23.46,50.414c-0.28-1.063-0.682-2.077-1.198-3.034 l20.872-20.872l2.116,2.116L23.46,50.414z M14.916,53.428c-0.12-1.074-0.58-2.115-1.405-2.939c-0.825-0.825-1.865-1.285-2.939-1.405 l0.698-2.931c1.649,0.266,3.173,1.036,4.357,2.22c1.184,1.184,1.954,2.709,2.22,4.357L14.916,53.428z M17.038,46.962 c-1.447-1.447-3.301-2.396-5.306-2.75l0.463-1.943c2.382,0.441,4.533,1.562,6.254,3.282s2.841,3.872,3.282,6.254l-1.943,0.463 C19.433,50.263,18.485,48.409,17.038,46.962z M19.859,44.141c-0.477-0.477-0.987-0.907-1.517-1.304l20.561-20.561l2.821,2.821 L21.163,45.658C20.766,45.128,20.336,44.618,19.859,44.141z M16.62,41.738c-0.957-0.516-1.971-0.918-3.034-1.198l21.79-21.79 l2.116,2.116L16.62,41.738z M43.84,10.286c0.389-0.389,1.022-0.389,1.411,0l8.464,8.464c0.389,0.389,0.389,1.022,0,1.411 l-4.232,4.232l-9.874-9.874L43.84,10.286z\"></path>
            </svg>
        </a></td>
        <td><a href=\"#\" onclick=\"confirmarEliminarVideojuego(" . $datos['id_videojuego'] . ")\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\" width=\"35\" height=\"35\">
                <path fill=\"#8b8bc1\" d=\"M77,32L77,32H23h-5v5l5,5v33.308C23,82.288,28.295,86,34.766,86h30.269C71.616,86,77,82.288,77,75.308V41.917L82,37v-5H77z\"></path>
                <path fill=\"#1f212b\" d=\"M65.035,87H34.766C27.13,87,22,82.301,22,75.308V42.414l-4.707-4.707C17.105,37.52,17,37.265,17,37	v-5c0-0.552,0.448-1,1-1h64c0.552,0,1,0.448,1,1v5c0,0.268-0.108,0.525-0.299,0.713L78,42.336v32.972C78,82.301,72.79,87,65.035,87z M19,36.586l4.707,4.707C23.895,41.48,24,41.735,24,42v33.308C24,82.461,29.8,85,34.766,85h30.269C70.093,85,76,82.461,76,75.308V41.917c0-0.268,0.108-0.525,0.299-0.713L81,36.581V33H19V36.586z\"></path>
                <path fill=\"#6869ad\" d=\"M29.5,60.5V42.917c0-1.375,1.125-2.5,2.5-2.5l0,0c1.375,0,2.5,1.125,2.5,2.5v16.75v14.25	c0,1.375-1.125,2.5-2.5,2.5l0,0c-1.375,0-2.5-1.125-2.5-2.5V70.5V60.5z\"></path>
                <path fill=\"#1f212b\" d=\"M32,76.917c-1.654,0-3-1.346-3-3V70.5c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v3.417	c0,1.103,0.897,2,2,2s2-0.897,2-2v-31c0-1.103-0.897-2-2-2s-2,0.897-2,2V60.5c0,0.276-0.224,0.5-0.5,0.5S29,60.776,29,60.5V42.917	c0-1.654,1.346-3,3-3s3,1.346,3,3v31C35,75.571,33.654,76.917,32,76.917z\"></path>
                <path fill=\"#1f212b\" d=\"M29.5,66c-0.276,0-0.5-0.224-0.5-0.5v-3c0-0.276,0.224-0.5,0.5-0.5s0.5,0.224,0.5,0.5v3	C30,65.776,29.776,66,29.5,66z\"></path>
            </svg>
        </a></td>
        </tr>";
      }

      ?>
    </table>

  </main>

</body>

</html>

<?php mysqli_close($conexion); ?>