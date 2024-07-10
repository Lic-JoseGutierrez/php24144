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
  <script src="../js/script2.js"></script>
  <!-- animaciones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- alert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- letra -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet" />
</head>

<body class="container_registro">
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
      <h1 class="registro_form_titulo">Nuevo Juego</h1>

      <form action="insertarvideojuego.php" method="post" class="registro_form" onsubmit="return validarFormularioRegistroVideojuego()">
        <input type="text" autocomplete="off" class="input_form" placeholder="Nombre" id="nombre" name="nombre" required/>
        <input type="text" autocomplete="off" placeholder="Descripcion" class="input_form" id="descripcion" name="descripcion" required/>
        <input type="text" autocomplete="off" placeholder="Genero" class="input_form" id="genero" name="genero" required/>
        <input type="text" autocomplete="off" placeholder="Consola" class="input_form" id="consola" name="consola" required/>
        <input type="number" autocomplete="off" placeholder="Año" class="input_form" id="anio" name="anio" min="1952" max="2024" required/>
        <input type="number" autocomplete="off" placeholder="Estrellas" class="input_form" id="estrellas" name="estrellas" min="1" max="5" required/>
        <input type="number" autocomplete="off" placeholder="Empresa" class="input_form" id="empresa_id" name="empresa_id" min="1" max="15" required/>
        <input type="submit" value="Registrar juego" class="btn_form" />
        <a href="../pages/mostrarvideojuego.php" class="form_link">Administrador de juegos</a>
      </form>
    </section>
  </main>
</body>

</html>