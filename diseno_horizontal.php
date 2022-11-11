<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="webfonts/fontawesome-5.10.2/css/all.css" />
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css">
    <link href="img/escu.ico" rel="shortcut icon" type="img/x-icon"></link>
    <title> Proyecto</title>
    <style type="text/css">

    </style>
</head>

<body>
    <div class="container" style="width: 80%">
        <div class="row" style="border:1px solid silver; padding: 10px;">
            <img src="img/escu.png" style="height: 205; width: 190px" />
        </div>

        <div class="row" style="border:0px solid silver; padding: 5px;">
            <ul class="nav">
                
                
                <li class="nav-item">
                    <a class="nav-link active" href="?modulo=inicio&accion=ver">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="?modulo=mision&accion=ver">Misión</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="?modulo=inicio&accion=ver">Visión</a>
                </li>
            
                <li class="nav-item">
                    <a class="nav-link" href="?modulo=categoria&accion=ver">Categorías </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?modulo=departamento&accion=ver">Departamento</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?modulo=entrega&accion=ver">Entrega</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?modulo=devolucion&accion=ver">Devolución</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="?modulo=identificacion&accion=ver">Identificación</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?modulo=marca&accion=ver">Marca</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?modulo=municipio&accion=ver">Municipio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?modulo=persona&accion=ver">Persona</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?modulo=producto&accion=ver">Producto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?modulo=proveedores&accion=ver">Proveedores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?modulo=sexo&accion=ver">Sexo</a>
                </li>
            </ul>
        </div>


        <div class="row">
 
            <div class="col-md-12" style="border:1px solid silver;border-radius: 1px">
                <?php 
                    require_once($mod_ruta_archivo);
                ?>
            </div>
        </div>
       <?php
        require_once("pie.php");
        ?>
    </div>

</body>

</html>