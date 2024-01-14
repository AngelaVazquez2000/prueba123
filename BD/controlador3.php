<?php
session_start();

$user = $_POST['matricula'];
$clave = $_POST['pass_alum'];

$connection = mysqli_connect('localhost', 'C_P', '', 'f_alum');
        if (!$connection) {
            die("Error en la conexión a la base de datos: " . mysqli_connect_error());
        }

    $user = mysqli_real_escape_string($connection, $user);
    $clave = mysqli_real_escape_string($connection, $clave);


$q = "SELECT COUNT(*) as contar FROM log_alum where matricula ='$user' and pass_alum ='$clave';";
$consulta = mysqli_query($connection, $q);
$array = mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {
    header("Location: ../Foro_cona/Foro_alum.php");
    exit;  // Asegúrate de salir después de la redirección
} else {
    echo "Datos incorrectos";
}
?>