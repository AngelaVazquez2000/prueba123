<?php
$conn = mysqli_connect('localhost', 'C_P','','avisos_cona');

if (!$conn) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}
$conn->set_charset("utf8");
?>


<!doctype html>
<html>
<head>
    <title>Mostrar datos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            border-radius:10px;
            margin: 20px 0;
            display:flex;
            justify-content: center;
             
        }

        th, td {
            border: 0px solid #ccc;
            padding: 10px;
        }

        th {
            background-color: #333;
            color: white;
        }

        td {

            background-color: #f9f9f9;
            
            
        }

        #a{
            display:none;
        }

        #title{
            display:flex;
            justify-content:center;
            font-size:25px;
            color:white;
            background: #9d2449;
            width:300px;
        }

        #title:hover{
            transform:scale(1.1);
            transition: transform 0.3s;
            
        }

        #white{
            border:0;
            background: #0000;
        }

        #date{
            color:#848f8e;
        }
    </style>

</head>
<body>
     
    <table> 
    <?php
        $sql = "SELECT * FROM avisos ORDER BY id_avi DESC";
        $result = mysqli_query($conn, $sql);

        while ($mostrar = mysqli_fetch_array($result)) {
        ?>
        <tr>
            <th id=a>Título</th>
            <td id=title><?php echo $mostrar['titulo'] ?></td>
        </tr>
        <tr>
            <th id=a>Fecha</th>
            <td id=date><?php echo $mostrar['fecha'] ?></td>
        </tr>
        <tr>
            <th id=a>Texto</th>
            <td><?php echo $mostrar['aviso_text'] ?></td>
        </tr>
        
        
        <tr>
            <td id=white colspan="2">&nbsp;</td>
        </tr>
        <?php
         
        }
        mysqli_close($conn);
        ?>
    </table>
</body>
</html>
