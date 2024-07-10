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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
    <!-- alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- letra -->
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap"
      rel="stylesheet"
    />
  </head>
  <body class="container_registro">
    <header>
      <nav>
        <ul>
          <h3 class="animate__animated animate__shakeY">
            <a href="../index.php" class="link">🎮Insert-Coin</a>
          </h3>
          
        </ul>
      </nav>
    </header>

    <main class="container_registro_main">
      <section class="container_registro_form">
        <h1 class="registro_form_titulo">Nuevo Usuario</h1>

        <form
          action="insertarusuario.php"
          method="post"
          class="registro_form"
          onsubmit="return validarFormularioRegistro()"
        >
          <input
            type="text"
            name="nombre"
            autocomplete="off"
            class="input_form"
            placeholder="Nombre"
            id="nombre"
          />
          <input
            type="text"
            name="apellido"
            autocomplete="off"
            placeholder="Apellido"
            class="input_form"
            id="apellido"
          />
          <input
            type="email"
            name="email"
            autocomplete="off"
            placeholder="Email"
            class="input_form"
            id="email"
          />
          <input
            type="password"
            name="password"
            autocomplete="off"
            placeholder="Password"
            class="input_form"
            id="password"
          />
          <input
            type="date"
            name="fechaNacimiento"
            class="input_form"
            id="fechaNacimiento"
          />
          <select name="pais" id="pais" class="input_form form_select">
            <option value="" readonly>Seleccione un País</option>
            <option value="Argentina" selected>Argentina</option>
          </select>
          <input
            type="number"
            name="telefono"
            autocomplete="off"
            class="input_form"
            placeholder="Telefono"
            id="telefono"
          />
          <input
            type="number"
            name="dni"
            autocomplete="off"
            class="input_form"
            placeholder="DNI"
            id="dni"
          />
          <input
            type="number"
            name="edad"
            autocomplete="off"
            class="input_form"
            placeholder="Edad"
            id="edad"
          />
          <div class="container_form_terminos">
            <input type="checkbox" name="terms" autocomplete="off" id="terms" />
            <label for="terms" class="form_terminos_texto"
              >Acepto términos y condiciones</label
            >
          </div>
          <input type="submit" value="Registrarse" class="btn_form" />
          <a href="./login.php" class="form_link">Iniciar Sesión</a>
        </form>
      </section>
    </main>
  </body>
</html>
