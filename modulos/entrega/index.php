<?php



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

    <title>Entrega</title>
    
</head>

<body>

   <div id="contenedor-listado" class="content mt-3" style="/*width:1000px;*/ margin:auto">

        <div class="card">
             <div class="card-header">
                Listado de entregas
            <button id="btn-mostrar-filtros" class="btn btn-sm  float-right ml-1">Buscar</button>

            <button id="btn-agregar" class="btn btn-sm  float-right ml-1">Agregar</button>
            </div>

            <div id="div-formulario-busqueda" class="card-body d-none">

                <form id="formulario-busqueda" method="post" >
                    <input type="hidden" name="id_entrega"  />

                    <div class="form-group row">
                        <label for="id_producto" class="col-sm-3 col-form-label">Producto</label>
                        <div class="col-sm-9">
                            <select class="form-control " name="id_producto">
                                <option value="">(Seleccionar el nombre del producto)</option>
                                <?php
                                $sqlm = "SELECT * FROM producto ORDER BY nombre";
                                $rsm = mysqli_query($conexion, $sqlm);
                                while ($rwm = mysqli_fetch_assoc($rsm)) {

                                    echo "<option value='$rwm[id_producto]'>$rwm[nombre]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                   
                   

                    <div class="form-group row">
                        <label for="respon" class="col-sm-3 col-form-label">Responsable</label>
                        <div class="col-sm-9">
                            <select class="form-control " name="respon">
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
                <span id="titulo"> Entrega de producto </span>
            </div>

            <div class="card-body">
                <form id="formulario" method="post" action="guardar.php">
                    <input type="hidden" name="id_entrega" id="id_entrega" />


                    <div class="form-group row">
                        <label for="id_producto" class="col-sm-3 col-form-label"> producto</label>
                        <div class="col-sm-9">
                            <select class="form-control " id="id_producto" name="id_producto">
                                <option value="">(Seleccionar el nombre del producto)</option>
                                <?php
                                $sql1 = "SELECT * FROM producto ORDER BY nombre";
                                $rs1 = mysqli_query($conexion, $sql1);
                                while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                    echo "<option value='$rw1[id_producto]'>$rw1[nombre]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                   
                      

                     <div class="form-group row">
                        <label for="fecha_ad" class="col-sm-3 col-form-label">Fecha de adquisición  </label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="fecha_ad" name="fecha_ad" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fecha_en" class="col-sm-3 col-form-label">Fecha de entrega </label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="fecha_en" name="fecha_en" >
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="respon" class="col-sm-3 col-form-label">Responsable</label>
                        <div class="col-sm-9">
                            <select class="form-control " id="respon" name="respon">
                                <option value="">(Seleccionar el responsable)</option>
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
                        <label for="cantidad" class="col-sm-3 col-form-label">cantidad</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="cargo" class="col-sm-3 col-form-label">Cargo</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cargo" name="cargo" placeholder="cargo">
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
            $("#titulo").html("Agregar entrega");
            $("#contenedor-listado").hide();
            $("#contenedor-formulario").show();

            $("#btn-guardar").show();
            $("#btn-modificar").hide();
            $("#formulario")[0].reset(); //limpiar formulario
            $("#formulario input, #formulario select").prop("disabled", false);

        });

     
        $("#btn-guardar").click(function() {
            var parametros = $("#formulario").serialize();
            $.post("?modulo=entrega&accion=agregar", parametros, function(respuesta) {
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
                $.post("?modulo=entrega&accion=modificar", parametros, function(respuesta) {
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

        

        function eliminar(id_entrega) {
            if (confirm("¿Realmente desea eliminar el registro?")) {
                var parametros = "id_entrega=" + id_entrega;
                $.post("?modulo=entrega&accion=eliminar", parametros, function(respuesta) {
                    var r = jQuery.parseJSON(respuesta);
                    alert(r.mensaje);
                    if (r.error == false) {
                        cargar_listado();
                    }
                });
            }
        }


       function modificar(id_entrega) {
            $("#titulo").html("Modificar entrega");
            var parametros = "id_entrega=" + id_entrega;
            $.get("?modulo=entrega&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide();
                $("#contenedor-formulario").show();

                $("#btn-guardar").hide();
                $("#btn-modificar").show();
                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", false);
                
                var r = jQuery.parseJSON(respuesta);

                $("#id_entrega").val(r.id_entrega);
                $("#id_producto").val(r.id_producto);
                $("#fecha_ad").val(r.fecha_ad);
                $("#fecha_en").val(r.fecha_en);
                $("#respon").val(r.respon);
                $("#cantidad").val(r.cantidad);
                $("#cargo").val(r.cargo);
               
            });
        }

        function mostrar(id_entrega) {
            $("#titulo").html("Mostrar entregas");
            var parametros = "id_entrega=" + id_entrega;
            $.get("?modulo=entrega&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide();
                $("#contenedor-formulario").show();

                $("#btn-guardar").hide();
                $("#btn-modificar").hide();

                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", true);

                var r = jQuery.parseJSON(respuesta);

                $("#id_entrega").val(r.id_entrega);
                $("#id_producto").val(r.id_producto);
                $("#fecha_ad").val(r.fecha_ad);
                $("#fecha_en").val(r.fecha_en);
                $("#respon").val(r.respon);
                $("#cantidad").val(r.cantidad);
                $("#cargo").val(r.cargo);

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
            $("#listado").load("?modulo=entrega&accion=listar", parametros);
        }
      
    </script>
</body>

</html> 