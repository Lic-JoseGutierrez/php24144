<?php

// echo "estoy probando la conexion";

//que pasa con las funciones con retorno....
$conexion = mysqli_connect("localhost", "root", "", "insert-coin");

if (mysqli_connect_errno()) {

    echo "ERROR no se conecto: " . mysqli_connect_errno();
} else {
    echo "Se conecto BBDD para Insertar Videojuego...";
}

echo "<br>";

$id = 1;
$usuario = "admin";
$claveUsuario = "123456";

// si existe el id, va a insertar los datos
// if (isset($id)) {

// si la condiciones se cumplen entonces inserta los datos
if (isset($id) && $usuario == "admin" && $claveUsuario == "123456") {


    // insertar datos hardcodeado
    // $insertarDatos = "insert into videojuegos(id_videojuego,nombre,descripcion,genero,consola,anio,estrellas,empresa_id) values('16','Winning Eleven 2002','Futbol','Deporte','Playstation','2002','5','2')";

    // insertar datos con variables
    // $id_videojuego = 16;
    // $nombre = "Winning Eleven 2002";
    // $descripcion = "Futbol";
    // $genero = "Deporte";
    // $consola = "Playstation";
    // $anio = "2002";
    // $estrellas = "5";
    // $empresa_id  = "2";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir datos del formulario
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $genero = $_POST['genero'];
        $consola = $_POST['consola'];
        $anio = $_POST['anio'];
        $estrellas = $_POST['estrellas'];
        $empresa_id = $_POST['empresa_id'];

    echo "esta todo en true el usuario es administrador...", $id;

    $insertarDatos = "INSERT INTO videojuegos(nombre,descripcion,genero,consola,anio,estrellas,empresa_id) values('$nombre','$descripcion','$genero','$consola','$anio','$estrellas','$empresa_id')";

    mysqli_query($conexion, $insertarDatos);
    echo"<br>";
    echo "Nuevo videojuego registrado correctamente";
} else {
    echo "Error: " . $insertarDatos . "<br>" . mysqli_error($conexion);
    // echo "Error... usted no puede insertar datos xq no es administrador";
}
}
mysqli_close($conexion);
?>