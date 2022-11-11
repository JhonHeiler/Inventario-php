
<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=2, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="webfonts/fontawesome-5.10.2/css/all.css" />
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="img/logo.jpeg" rel="shortcut icon" type="img/x-icon"></link>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Proyecto</title>
    <style type="text/css">

    </style>

<style>
    body{
        background: #00FFFF;
    }
#conteni{
    background: #00FFFF;
    width: 100%;
    height: auto; overflow: hidden;
} 
<?php


if (isset($_SESSION['usuario']) == true) {

?>

#menu22{
    background:#FFFFFF;
    width: 22%;
    height: -100%;
   
}
   
<?php } ?>
<?php 
    if ($_SESSION['id_rol'] == 21 ) {
?>
  body{
        background: #00FFFF;
    }
#conteni{
    background:#00FF00;
    width: 100%;
    height: auto; overflow: hidden;
  
} 

#menu22 #inv{
    margin-top: 2%;
    margin-left: 50px;
    font-size: 40px;
}

#menu22{
    background:#00FFFF;
    width: 22%;
    height: -100%;
   
}
<?php } ?>

</style>
</head>

<body>
    <div id="www"> 
    	<div id="linea"></div>
        <?php
        require_once("encabezado.php");


        ?>

                
                <?php
                require_once("menu.php");
                ?>
               
    



         <div id="conteni" >
            <div id="menu22" style="border:0px solid silver; "> 
                <ul class="nav">
                     <?php
                require_once("menu2.php");
                ?>
  
                </ul>
            </div>
            <div id="derecha" style="border:0px solid silver;">
                <?php
                    if ($mod_permitir_acceso == true) {
                        if ($mod_contenido == "") {
                            require_once($mod_ruta_archivo);
                        } else {
                            $sql = "SELECT contenido FROM contenido WHERE modulo='$mod_contenido'";
                            $rs = mysqli_query($conexion, $sql);
                            $row = mysqli_fetch_assoc($rs);
                            echo $row['contenido'];

                            echo "<script>
                    setTimeout(function(){
                    window.location.href ='?modulo=iniciar-sesion&accion=ver';
                    }, 2);
                    </script>
                    ";

                    echo "<script>
                    setTimeout(function(){
                    window.location.href ='?modulo=producto&accion=ver';
                    }, 2);
                    </script>
                    ";
                    
                        }
                    } else {
                        echo "<script>
                        setTimeout(function(){
                        window.location.href ='?modulo=iniciar-sesion&accion=ver';
                        }, 1);
                        </script>
                        ";
                        
                        echo "<div class='acceso-denegado'>Acesso denegado!</div>";
                    }
                ?>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
		<?php
        require_once("pie.php");
        ?>
      
        <br>
        <br>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>
