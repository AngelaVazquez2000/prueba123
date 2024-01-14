<!DOCTYPE html>
<html lang="es">

<Head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>CONALEP Tlalnepantla II</title>
    <link rel="ICON" type="IMAGE/PNG" href="C:\Users\Macovo\Desktop\p_cona\imagenes/Lg_co.ico">
    <link rel="stylesheet" href="/CSS/styles22.css">
</Head>


<body>

    <form method="post" action="">

        <h1>Registra el aviso</h1>

        <div>
            <label for="titulo">Titulo</label>
            <input id="titulo" type=text name="titulo" ></input>
        </div>
        
        <div>
            <label for="aviso_text">Texto</label>
            <input id="aviso_text" type=text name="aviso_text" ></input>
        </div>

        <?php
            include("conexionBD.php");
            include("controlador2.php");

        ?>

        <input name="btnsubmit" class="btn" type=submit value="Ingresar"></input>


    </form>



</body>


<style>

 
    * {
        background: #097971;
    }

    body{
        margin 0;
        padding:0;
    }

  
    h1{
        margin:0 0 30px;
        padding: 0;
        color: #fff;
        text-align:center;
        background: none;
    }

    hr{
        display: none;
        background: none;
    }


    form{
        position: absolute;
        top:50px;
        left:35%;
        width: 400px;
        background: rgba(252, 253, 253, 0.247);
        padding: 40px;
       transform: traslate(-50%, -50%);
       background: #e7e767;
       box-sizing: border-box;
       box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
       border-radius: 10px;

    }

    input{
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #fff;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #fff;
        outline: none;
        background: transparent;
        

    }

    
    label {
        position: relative;
        top: 0;
        left:0;
        padding: 10px 0;
        font-size: 20px;
        color: #fff;
        background:transparent;


    }


    

    .btn{
        border: none;
        background-color: #007e67;
        cursor: pointer;
        height:60px;
        
    }

    .btn:hover{
        filter: invert(97%) sepia(61%) saturate(2275%) hue-rotate(88deg) brightness(94%) contrast(87%);

    }

    div{
        background: none;
    }

    .alert{
        font-size: 25px;
        
    }



    
        
</style>


</html>