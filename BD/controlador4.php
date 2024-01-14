<?php
if (isset($_POST["enviar"])) {
    if (empty($_POST["content"]) || empty($_FILES["archivo"]["name"])) {
        echo '<div class="alert">Los campos están vacíos</div>';
    } else {
        $content = $_POST["content"];
        $archivo = $_FILES["archivo"]["name"];

        $connection = mysqli_connect('localhost', 'C_P', '', 'f_alum');
        if (!$connection) {
            die("Error en la conexión a la base de datos: " . mysqli_connect_error());
        }

        $content = mysqli_real_escape_string($connection, $content);
        $archivo = mysqli_real_escape_string($connection, $archivo);

        $sql = "INSERT INTO publicaciones (content, foto) VALUES ('$content', '$archivo')"; 
        $result = mysqli_query($connection, $sql);

        if ($result) {
            echo '<div class="success">Publicación insertada correctamente</div>';
        } else {
            echo '<div class="error">Error al insertar la publicación: ' . mysqli_error($connection) . '</div>';
        }

        // Cierra la conexión a la base de datos
        mysqli_close($connection);
    }
}
?>
