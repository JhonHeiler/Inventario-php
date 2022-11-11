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

    <title>Persona rol</title>
   
</head>

<body>

   <div id="contenedor-listado" class="content mt-3" style="/*width:800px;*/ margin:auto">

        <div class="card">
             <div class="card-header">
                Listado de persona rol
            <button id="btn-mostrar-filtros" class="btn btn-sm  float-right ml-1">Buscar</button>

            <button id="btn-agregar" class="btn btn-sm  float-right ml-1">Agregar</button>
            </div>

            <div id="div-formulario-busqueda" class="card-body d-none">

                <form id="formulario-busqueda" method="post" >
                    <input type="hidden" name="id_persona_rol"  />

                      <div class="form-group row">
                        <label for="id_persona" class="col-sm-3 col-form-label">Persona</label>
                        <div class="col-sm-9">
                            <select class="form-control " name="id_persona">
                                <option value="">(Seleccionar el responsable)</option>
                                <?php
                                $sqlr = "SELECT * FROM persona ORDER BY pri_nombre";
                                $rsr = mysqli_query($conexion, $sqlr);
                                while ($rwm = mysqli_fetch_assoc($rsr)) {

                                    echo "<option value='$rwm[id_persona]'>$rwm[pri_nombre]  $rwm[seg_nombre] $rwm[pri_apellido] $rwm[seg_apellido]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="id_rol" class="col-sm-3 col-form-label">Rol</label>
                        <div class="col-sm-9">
                            <select class="form-control "  name="id_rol">
                                <option value="">(Seleccione el rol)</option>
                                <?php
                                $sql4 = "SELECT * FROM rol ORDER BY nombre";
                                $rs4 = mysqli_query($conexion, $sql4);
                                while ($rw4 = mysqli_fetch_assoc($rs4)) {

                                    echo "<option value='$rw4[id_rol]'>$rw4[nombre]</option>";
                                }
                                ?>
                            </select>
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
                <span id="titulo"> Rol </span>
            </div>

            <div class="card-body">
                <form id="formulario" method="post" action="guardar.php">
                    <input type="hidden" name="id_persona_rol" id="id_persona_rol" />


                     <div class="form-group row">
                        <label for="id_persona" class="col-sm-3 col-form-label">Persona rol</label>
                        <div class="col-sm-9">
                            <select class="form-control " id="id_persona" name="id_persona">
                                <option value="">(Seleccione persona  )</option>
                                <?php
                                $sqlr1 = "SELECT * FROM persona ORDER BY pri_nombre";
                                $rsr1 = mysqli_query($conexion, $sqlr1);
                                while ($rwr1 = mysqli_fetch_assoc($rsr1)) {

                                    echo "<option value='$rwr1[id_persona]'>$rwr1[pri_nombre]  $rwr1[seg_nombre] $rwr1[pri_apellido] $rwr1[seg_apellido]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_rol" class="col-sm-3 col-form-label">Rol</label>
                        <div class="col-sm-9">
                            <select class="form-control " id="id_rol" name="id_rol">
                                <option value="">(Seleccione el rol)</option>
                                <?php
                                $sql2 = "SELECT * FROM rol ORDER BY nombre";
                                $rs2 = mysqli_query($conexion, $sql2);
                                while ($rw2 = mysqli_fetch_assoc($rs2)) {

                                    echo "<option value='$rw2[id_rol]'>$rw2[nombre]</option>";
                                }
                                ?>
                            </select>
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
            $("#titulo").html("Agregar roles");
            $("#contenedor-listado").hide();
            $("#contenedor-formulario").show();

            $("#btn-guardar").show();
            $("#btn-modificar").hide();
            $("#formulario")[0].reset(); //limpiar formulario
            $("#formulario input, #formulario select").prop("disabled", false);

        });

     
        $("#btn-guardar").click(function() {
            var parametros = $("#formulario").serialize();
            $.post("?modulo=personarol&accion=agregar", parametros, function(respuesta) {
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
                $.post("?modulo=personarol&accion=modificar", parametros, function(respuesta) {
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

        

        function eliminar(id_persona_rol) {
            if (confirm("¿Realmente desea eliminar el registro?")) {
                var parametros = "id_persona_rol=" + id_persona_rol;
                $.post("?modulo=personarol&accion=eliminar", parametros, function(respuesta) {
                    var r = jQuery.parseJSON(respuesta);
                    alert(r.mensaje);
                    if (r.error == false) {
                        cargar_listado();
                    }
                });
            }
        }


       function modificar(id_persona_rol) {
            $("#titulo").html("Modificar ");
            var parametros = "id_persona_rol=" + id_persona_rol;
            $.get("?modulo=personarol&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide();
                $("#contenedor-formulario").show();

                $("#btn-guardar").hide();
                $("#btn-modificar").show();
                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", false);
                
                var r = jQuery.parseJSON(respuesta);

                $("#id_persona_rol").val(r.id_persona_rol);
                $("#id_persona").val(r.id_persona);
                $("#id_rol").val(r.id_rol);
               
               
            });
        }

        function mostrar(id_persona_rol) {
            $("#titulo").html("Mostrar ");
            var parametros = "id_persona_rol=" + id_persona_rol;
            $.get("?modulo=personarol&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide();
                $("#contenedor-formulario").show();

                $("#btn-guardar").hide();
                $("#btn-modificar").hide();

                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", true);

                var r = jQuery.parseJSON(respuesta);

                $("#id_persona_rol").val(r.id_persona_rol);
                $("#id_persona").val(r.id_persona);
                $("#id_rol").val(r.id_rol);
               
            
      

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
            $("#listado").load("?modulo=personarol&accion=listar", parametros);
        }
      
    </script>
</body>

</html> 