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

  <!-- animaciones -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <!-- letra -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&display=swap" rel="stylesheet" />
  <!-- vinculacion con css -->
  <link rel="stylesheet" href="../style/style.css" />
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
          <a href="./registrovideojuegos.php" class="link" id="logout" title="REGISTRAR JUEGO">
            <img width="48" height="48" src="https://img.icons8.com/doodle/48/gaming.png" alt="gaming" />
          </a>
        </li>
        <li>
          <a href="../pages/mostrarusuario.php" class="link" id="mostrarusuario" title="ADMINISTRAR USUARIOS">
            <img width="48" height="48" src="https://img.icons8.com/doodle/48/group--v1.png" alt="group--v1" />
          </a>
        </li>
        <li>
          <a href="./pages/logout.php" class="link" id="logout" title="LOGOUT">
            <img width="50" height="50" src="https://img.icons8.com/pastel-glyph/64/shutdown--v4.png" alt="shutdown--v4" />
          </a>
        </li>
      </ul>
    </nav>
  </header>
  <main>
    <section id="fondo-index">

      <div class="container">
        <img src="../img/nintendo.gif" alt="" />
      </div>
    </section>

    <section id="busqueda">
      <div class="container animate__animated animate__fadeInUpBig">
        <h2>¿Qué estás buscando?</h2>
        <form action="">
          <input class="input_buscar" type="text" placeholder="Buscar..." />
          <a href="#" class="btn_buscar">Buscar</a>
        </form>
      </div>
    </section>
    <hr class="hr" />
    <section id="index-destacados">
      <div class="container">
        <h2>Destacados!</h2>
        <div class="image-index-destacados">
          <a class="hovereffect" href="#">
            <img src="../img/monster_hunter_rise.jpg" alt="monster_hunter_rise" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
          <a class="hovereffect2" href="#">
            <img src="../img/nintendo_switch_sports.jpg" alt="nintendo_switch_sports" />
            <h2 class="overlay">SIN STOCK</h2>
          </a>
          <a class="hovereffect" href="#">
            <img src="../img/zelda.jpg" alt="zelda" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
          <a class="hovereffect" href="#">
            <img src="../img/rocket_league.jpg" alt="rocket_league" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
          <a class="hovereffect" href="#">
            <img src="../img/mortal_kombat_11.jpg" alt="mortal_kombat_11" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
          <a class="hovereffect" href="#">
            <img src="../img/pokemon_scarlet.jpg" alt="pokemon_scarlet" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
          <a class="hovereffect2" href="#">
            <img src="../img/dragon_ball_figtherz.jpg" alt="dragon_ball_figtherz" />
            <h2 class="overlay">SIN STOCK</h2>
          </a>
          <a class="hovereffect" href="#">
            <img src="../img/fall_guys.jpg" alt="fall_guys" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
          <a class="hovereffect" href="#">
            <img src="../img/tom_raider.jpg" alt="tom_raider" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
          <a class="hovereffect" href="#">
            <img src="../img/just_dance.jpg" alt="just_dance" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
          <a class="hovereffect" href="#">
            <img src="../img/hogwarts_legacy.jpg" alt="hogwarts_legacy" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
          <a class="hovereffect" href="#">
            <img src="../img/disney_dreamlight_valley.jpg" alt="disney_dreamlight_valley" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
          <a class="hovereffect" href="#">
            <img src="../img/super_mario_kart.jpg" alt="super_mario_kart" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
          <a class="hovereffect" href="#">
            <img src="../img/nba_2k_24.jpg" alt="nba_2k_24" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
          <a class="hovereffect2" href="#">
            <img src="../img/leyendas_pokemon_arceus.jpg" alt="leyendas_pokemon_arceus" />
            <h2 class="overlay">SIN STOCK</h2>
          </a>
        </div>
        <div class="btn_mostrar">
          <a href="" class="btn_buscar">Mostrar mas productos</a>
        </div>
      </div>
    </section>
    <hr class="hr" />
    <center>
      <h2>Mas vendidos!</h2>
    </center>
    <section id="mas-vendidos">
      <div class="container-mas-vendidos">
        <div class="image-mas-vendidos">
          <a class="hovereffect" href="#">
            <img src="../img/fc_24.jpg" alt="fc_24" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
          <a class="hovereffect" href="#">
            <img src="../img/hogwarts_legacy.jpg" alt="hogwarts_legacy" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
          <a class="hovereffect" href="#">
            <img src="../img/stumble_guys.jpg" alt="stumble_guys" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
          <a class="hovereffect2" href="#">
            <img src="../img/sonic_frontiers.jpg" alt="sonic_frontiers" />
            <h2 class="overlay">SIN STOCK</h2>
          </a>
          <a class="hovereffect" href="#">
            <img src="../img/mario_party_superstars.jpg" alt="mario_party_superstars" />
            <h2 class="overlay">EN STOCK</h2>
          </a>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <div class="column">
      <h4>Insert-Coin</h4>
      <p>
        Somos una empresa dedicada a la venta minorista
        <br />de artículos de tecnología y videojuegos. <br />Llevamos 10 años
        liderando el mercado.
      </p>
    </div>
    <div class="column">
      <h4>Contáctanos</h4>
      <p>
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" viewBox="0 0 48 48">
          <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path>
          <path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path>
          <path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path>
          <path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path>
          <path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
        </svg>
        5493424287343 <br />📞+5493424550055 <br />📧ventas@insert-coin.com.ar
        <br />📌Ciudad de Santa Fe - Santa Fe
      </p>
    </div>
    <div class="column">
      <h4>Seguinos</h4>
      <a href="https://www.linkedin.com/in/lic-jose/" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 48 48">
          <path fill="#0288D1" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"></path>
          <path fill="#FFF" d="M12 19H17V36H12zM14.485 17h-.028C12.965 17 12 15.888 12 14.499 12 13.08 12.995 12 14.514 12c1.521 0 2.458 1.08 2.486 2.499C17 15.887 16.035 17 14.485 17zM36 36h-5v-9.099c0-2.198-1.225-3.698-3.192-3.698-1.501 0-2.313 1.012-2.707 1.99C24.957 25.543 25 26.511 25 27v9h-5V19h5v2.616C25.721 20.5 26.85 19 29.738 19c3.578 0 6.261 2.25 6.261 7.274L36 36 36 36z"></path>
        </svg></a>
      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 48 48">
          <radialGradient id="yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#fd5"></stop>
            <stop offset=".328" stop-color="#ff543f"></stop>
            <stop offset=".348" stop-color="#fc5245"></stop>
            <stop offset=".504" stop-color="#e64771"></stop>
            <stop offset=".643" stop-color="#d53e91"></stop>
            <stop offset=".761" stop-color="#cc39a4"></stop>
            <stop offset=".841" stop-color="#c837ab"></stop>
          </radialGradient>
          <path fill="url(#yOrnnhliCrdS2gy~4tD8ma_Xy10Jcu1L2Su_gr1)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
          <radialGradient id="yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse">
            <stop offset="0" stop-color="#4168c9"></stop>
            <stop offset=".999" stop-color="#4168c9" stop-opacity="0"></stop>
          </radialGradient>
          <path fill="url(#yOrnnhliCrdS2gy~4tD8mb_Xy10Jcu1L2Su_gr2)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"></path>
          <path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"></path>
          <circle cx="31.5" cy="16.5" r="1.5" fill="#fff"></circle>
          <path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"></path>
        </svg></a>

      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 48 48">
          <path fill="#3F51B5" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"></path>
          <path fill="#FFF" d="M34.368,25H31v13h-5V25h-3v-4h3v-2.41c0.002-3.508,1.459-5.59,5.592-5.59H35v4h-2.287C31.104,17,31,17.6,31,18.723V21h4L34.368,25z"></path>
        </svg></a>

      <a href="#"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="50" height="50" viewBox="0 0 48 48">
          <path fill="#212121" fill-rule="evenodd" d="M10.904,6h26.191C39.804,6,42,8.196,42,10.904v26.191 C42,39.804,39.804,42,37.096,42H10.904C8.196,42,6,39.804,6,37.096V10.904C6,8.196,8.196,6,10.904,6z" clip-rule="evenodd"></path>
          <path fill="#ec407a" fill-rule="evenodd" d="M29.208,20.607c1.576,1.126,3.507,1.788,5.592,1.788v-4.011 c-0.395,0-0.788-0.041-1.174-0.123v3.157c-2.085,0-4.015-0.663-5.592-1.788v8.184c0,4.094-3.321,7.413-7.417,7.413 c-1.528,0-2.949-0.462-4.129-1.254c1.347,1.376,3.225,2.23,5.303,2.23c4.096,0,7.417-3.319,7.417-7.413L29.208,20.607L29.208,20.607 z M30.657,16.561c-0.805-0.879-1.334-2.016-1.449-3.273v-0.516h-1.113C28.375,14.369,29.331,15.734,30.657,16.561L30.657,16.561z M19.079,30.832c-0.45-0.59-0.693-1.311-0.692-2.053c0-1.873,1.519-3.391,3.393-3.391c0.349,0,0.696,0.053,1.029,0.159v-4.1 c-0.389-0.053-0.781-0.076-1.174-0.068v3.191c-0.333-0.106-0.68-0.159-1.03-0.159c-1.874,0-3.393,1.518-3.393,3.391 C17.213,29.127,17.972,30.274,19.079,30.832z" clip-rule="evenodd"></path>
          <path fill="#fff" fill-rule="evenodd" d="M28.034,19.63c1.576,1.126,3.507,1.788,5.592,1.788v-3.157 c-1.164-0.248-2.194-0.856-2.969-1.701c-1.326-0.827-2.281-2.191-2.561-3.788h-2.923v16.018c-0.007,1.867-1.523,3.379-3.393,3.379 c-1.102,0-2.081-0.525-2.701-1.338c-1.107-0.558-1.866-1.705-1.866-3.029c0-1.873,1.519-3.391,3.393-3.391 c0.359,0,0.705,0.056,1.03,0.159V21.38c-4.024,0.083-7.26,3.369-7.26,7.411c0,2.018,0.806,3.847,2.114,5.183 c1.18,0.792,2.601,1.254,4.129,1.254c4.096,0,7.417-3.319,7.417-7.413L28.034,19.63L28.034,19.63z" clip-rule="evenodd"></path>
          <path fill="#81d4fa" fill-rule="evenodd" d="M33.626,18.262v-0.854c-1.05,0.002-2.078-0.292-2.969-0.848 C31.445,17.423,32.483,18.018,33.626,18.262z M28.095,12.772c-0.027-0.153-0.047-0.306-0.061-0.461v-0.516h-4.036v16.019 c-0.006,1.867-1.523,3.379-3.393,3.379c-0.549,0-1.067-0.13-1.526-0.362c0.62,0.813,1.599,1.338,2.701,1.338 c1.87,0,3.386-1.512,3.393-3.379V12.772H28.095z M21.635,21.38v-0.909c-0.337-0.046-0.677-0.069-1.018-0.069 c-4.097,0-7.417,3.319-7.417,7.413c0,2.567,1.305,4.829,3.288,6.159c-1.308-1.336-2.114-3.165-2.114-5.183 C14.374,24.749,17.611,21.463,21.635,21.38z" clip-rule="evenodd"></path>
        </svg></a>
    </div>
  </footer>
</body>

</html>