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
          <a href="../index.html" class="link">🎮Insert-Coin</a>
        </h3>
      </ul>
    </nav>
  </header>

  <main class="container_registro_main">
    <section class="container_registro_form">
      <h1 class="registro_form_titulo">Registro Videojuegos</h1>

      <form action="recibirdatosvideojuegosJS.php" method="post" class="registro_form" onsubmit="return validarFormularioRegistroVideojuego()">
        <input type="text" autocomplete="off" class="input_form" placeholder="Nombre" id="nombre" name="nombre" />
        <input type="text" autocomplete="off" placeholder="Descripcion" class="input_form" id="descripcion" name="descripcion" />
        <input type="text" autocomplete="off" placeholder="Genero" class="input_form" id="genero" name="genero" />
        <input type="text" autocomplete="off" placeholder="Consola" class="input_form" id="consola" name="consola" />
        <input type="number" autocomplete="off" placeholder="Año" class="input_form" id="anio" name="anio" />
        <input type="number" autocomplete="off" placeholder="Estrellas" class="input_form" id="estrellas" name="estrellas" />
        <input type="text" autocomplete="off" placeholder="Empresa" class="input_form" id="empresa" name="empresa" />
        <input type="submit" value="Registrar videojuego" class="btn_form" />
      </form>
    </section>
  </main>
</body>

</html>