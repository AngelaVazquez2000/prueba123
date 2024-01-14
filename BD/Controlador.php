<?php
if (isset($_POST["btnsubmit"])) {
    if (empty($_POST["user_admin"]) || empty($_POST["passwd"])) {
        echo '<div class="alert">Los campos están vacíos</div>';
    } else {
        $user = $_POST["user_admin"];
        $password = $_POST["passwd"];
        
        // Asegúrate de tener una conexión válida a la base de datos
        $connection = mysqli_connect('localhost', 'C_P', '', 'avisos_cona');
        if (!$connection) {
            die("Error en la conexión a la base de datos: " . mysqli_connect_error());
        }
        
        $user = mysqli_real_escape_string($connection, $user);
        $password = mysqli_real_escape_string($connection, $password);

        $sql = "SELECT * FROM u_admin WHERE user_admin = '$user' AND passwd = '$password'";
        $result = mysqli_query($connection, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            header('location: registro_avi.php');
            exit();
        } else {
            echo '<div class="alert">Acceso denegado</div>';
        }

        mysqli_close($connection);
    }
}
?>
