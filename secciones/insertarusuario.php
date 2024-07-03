<?php

// echo "estoy probando la conexion";

//que pasa con las funciones con retorno....
$conexion = mysqli_connect("localhost", "root", "", "insert-coin");

if (mysqli_connect_errno()) {

    echo "ERROR no se conecto: " . mysqli_connect_errno();
} else {
    echo "Se conecto BBDD para Insertar Usuario...";
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
    // $insertarDatos = "insert into usuarios(id_usuario,nombre,apellido,email,password,fecha_nac,pais,telefono,dni,edad) values('7','Juan','Perez','juanperez@insert-coin.com','1234','01-01-2000','Argentina','0303456','11133366','30')";

    // insertar datos con variables
    // $id_usuario = 10;
    // $nombre = "Marcela";
    // $apellido = "Gomez";
    // $email = "marcela@insert-coin.com";
    // $password = "1234";
    // $fechaNacimiento = "01-01-2003";
    // $pais = "Argentina";
    // $telefono = "1155569";
    // $dni = "3354459";
    // $edad = "39";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Recibir datos del formulario
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $pais = $_POST['pais'];
        $telefono = $_POST['telefono'];
        $dni = $_POST['dni'];
        $edad = $_POST['edad'];

    echo "esta todo en true el usuario es administrador...", $id;

    $insertarDatos = "INSERT INTO usuarios(nombre,apellido,email,password,fechaNacimiento,pais,telefono,dni,edad) values('$nombre','$apellido','$email','$password','$fechaNacimiento','$pais','$telefono','$dni','$edad')";

    mysqli_query($conexion, $insertarDatos);
    echo"<br>";
    echo "Nuevo usuario registrado correctamente";
} else {
    echo "Error: " . $insertarDatos . "<br>" . mysqli_error($conexion);
    // echo "Error... usted no puede insertar datos xq no es administrador";
}
}
mysqli_close($conexion);
?>