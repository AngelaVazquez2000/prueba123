<?php
$conn = mysqli_connect('localhost', 'C_P','','f_alum');

if (!$conn) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}
$conn->set_charset("utf8");
?>
