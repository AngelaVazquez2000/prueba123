<?php
if (isset($_POST["btnsubmit"])) {
    if (empty($_POST["titulo"]) || empty($_POST["aviso_text"])) {
        echo '<div class="alert">Los campos están vacíos</div>';
    } else {
        $titulo = $_POST["titulo"];
        $aviso_text = $_POST["aviso_text"];
        
        // Asegúrate de tener una conexión válida a la base de datos
        $connection = mysqli_connect('localhost', 'C_P', '', 'avisos_cona');
        if (!$connection) {
            die("Error en la conexión a la base de datos: " . mysqli_connect_error());
        }
        
        $titulo = mysqli_real_escape_string($connection, $titulo);
        $aviso_text = mysqli_real_escape_string($connection, $aviso_text);

        $sql = "INSERT INTO avisos (titulo, aviso_text) VALUES ('$titulo', '$aviso_text')";
        $result = mysqli_query($connection, $sql);

        if ($result) {
            header('location: http://127.0.0.1:5500/Avisos.html');
            exit();
        } else {
            echo '<div class="alert">ALGO FALLO</div>';
        }

        mysqli_close($connection);
    }
}
?>
