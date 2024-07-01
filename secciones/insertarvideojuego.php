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
    $id_videojuego = 16;
    $nombre = "Winning Eleven 2002";
    $descripcion = "Futbol";
    $genero = "Deporte";
    $consola = "Playstation";
    $anio = "2002";
    $estrellas = "5";
    $empresa_id  = "2";

    echo "esta todo en true el usuario es administrador", $id;

    $insertarDatos = "insert into videojuegos(id_videojuego,nombre,descripcion,genero,consola,anio,estrellas,empresa_id) values('$id_videojuego ','$nombre','$descripcion','$genero','$consola','$anio','$estrellas','$empresa_id ')";

    mysqli_query($conexion, $insertarDatos);
} else {
    echo "Error... usted no puede insertar datos xq no es administrador";
}
