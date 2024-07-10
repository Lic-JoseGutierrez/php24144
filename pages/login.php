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
            <h1 class="registro_form_titulo">Cuenta</h1>
            <form action="login1.php" method="post" class="registro_form" onsubmit="return validarFormularioLogin()">
                <input type="email" name="email" autocomplete="off" placeholder="Email" class="input_form" id="email" />
                <input type="password" name="password" autocomplete="off" placeholder="Password" class="input_form" id="password" />
                <input type="submit" value="Iniciar Sesión" class="btn_form" />
                <a href="./registro.php" class="form_link">Registrarse</a>
            </form>
        </section>
    </main>
</body>
</html>
