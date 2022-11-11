<?php
//require_once("conexion.php");


?>

<!doctype html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="webfonts/fontawesome-5.10.2/css/all.css" />
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript"></script>

    <title>Categoria</title>

</head>

<body>

   <div id="contenedor-listado" class="content mt-3" style="/*width:800px;*/ margin:auto">

        <div class="card">
             <div class="card-header">
                Listado de proyectos
            <button id="btn-mostrar-filtros" class="btn btn-sm  float-right ml-1">Buscar</button>

            <button id="btn-agregar" class="btn btn-sm  float-right ml-1">Agregar</button>
            </div>

            <div id="div-formulario-busqueda" class="card-body d-none">

                <form id="formulario-busqueda" method="post" >
                    <input type="hidden" name="id_categoria"  />

                    <div class="form-group row">
                        <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control"  name="nombre" >
                        </div>
                    </div>
                 

                    <hr />
                    <div class="form-group row mb-0">
                        <div class="col-sm-12 text-right">
                            <button type="button" id="btn-buscar" class="btn btn-sm btn-secondary">Buscar</button>
                        </div>
                    </div>
                </form>




            </div>
            <div id="listado">
                <?php
                require_once("listado.php");
                ?>
            </div>
        </div>
    </div>






    <!-- Formulario -->

    <div id="contenedor-formulario" class="content mt-3" style="width:800px; margin:auto; display:none ">

        <div class="card">
            <div class="card-header">
                <span id="titulo"> Categoría</span>
            </div>

            <div class="card-body">
                <form id="formulario" method="post" action="guardar.php">
                    <input type="hidden" name="id_categoria" id="id_categoria" />


                     <div class="form-group row">
                        <label for="nombre" class="col-sm-3 col-form-label">Nombre </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre de la categoría" >
                        </div>
                    </div> 
                   
                    <hr />
                    <div class="form-group row mb-0">
                        <div class="col-sm-12 text-right">
                            <button type="button" id="btn-regresar" class="btn btn-sm ">Regresar</button>
                            <button type="button" id="btn-guardar" class="btn btn-sm ">Guardar</button>
                            <button type="button" id="btn-modificar" class="btn btn-sm ">Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
    <!-- Fin formulario -->
    <script type="text/javascript">
        $("#btn-agregar").click(function() {
            $("#titulo").html("Agregar categoría");
            $("#contenedor-listado").hide();
            $("#contenedor-formulario").show();

            $("#btn-guardar").show();
            $("#btn-modificar").hide();
            $("#formulario")[0].reset(); //limpiar formulario
            $("#formulario input, #formulario select").prop("disabled", false);

        });

     
        $("#btn-guardar").click(function() {
            var parametros = $("#formulario").serialize();
            $.post("?modulo=categoria&accion=agregar", parametros, function(respuesta) {
                //jQuery.parseJSON convertir la respuesta en JSON en un arreglo asociativo
                var r = jQuery.parseJSON(respuesta);
                alert(r.error);
                if (r.bueno == true) {
                    $("#contenedor-listado").show();
                    $("#contenedor-formulario").hide();

                     cargar_listado();
                }

            });

        });

        $("#btn-modificar").click(function() {
            if (confirm("¿Desea modificar el registro?")) {
                var parametros = $("#formulario").serialize();
                $.post("?modulo=categoria&accion=modificar", parametros, function(respuesta) {
                    //jQuery.parseJSON convertir la respuesta en JSON en un arreglo asociativo
                    var r = jQuery.parseJSON(respuesta);
                    alert(r.mensaje);
                    if (r.error == false) {
                        $("#contenedor-listado").show();
                        $("#contenedor-formulario").hide();
                        cargar_listado();
                    }
                });
            }
        });

 
        $("#btn-regresar").click(function() {
            $("#contenedor-listado").show();
            $("#contenedor-formulario").hide();

            cargar_listado();
        });

        

        function eliminar(id_categoria) {
            if (confirm("¿Realmente desea eliminar el registro?")) {
                var parametros = "id_categoria=" + id_categoria;
                $.post("?modulo=categoria&accion=eliminar", parametros, function(respuesta) {
                    var r = jQuery.parseJSON(respuesta);
                    alert(r.mensaje);
                    if (r.error == false) {
                        cargar_listado();
                    }
                });
            }
        }


       function modificar(id_categoria) {
            $("#titulo").html("Modificar categoría");
            var parametros = "id_categoria=" + id_categoria;
            $.get("?modulo=categoria&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide();
                $("#contenedor-formulario").show();

                $("#btn-guardar").hide();
                $("#btn-modificar").show();
                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", false);
                
                var r = jQuery.parseJSON(respuesta);

                $("#id_categoria").val(r.id_categoria);
                $("#nombre").val(r.nombre);
            
               
            });
        }

        function mostrar(id_categoria) {
            $("#titulo").html("Mostrar categoría");
            var parametros = "id_categoria=" + id_categoria;
            $.get("?modulo=categoria&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide();
                $("#contenedor-formulario").show();

                $("#btn-guardar").hide();
                $("#btn-modificar").hide();

                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", true);

                var r = jQuery.parseJSON(respuesta);

                $("#id_categoria").val(r.id_categoria);
                $("#nombre").val(r.nombre);
               
            
      

            });
        }

        $("#btn-mostrar-filtros").click(function() {
            $("#div-formulario-busqueda").toggleClass("d-none");
        });

        $("#btn-buscar").click(function() {
            $("#pagina_actual").val("1");
            cargar_listado();
        });

        function cargar_listado() {
            var parametros = $("#formulario-busqueda").serialize() + "&" + 
            $("#formulario-paginacion").serialize();
            $("#listado").load("?modulo=categoria&accion=listar", parametros);
        }
      
    </script>
</body>

</html> 