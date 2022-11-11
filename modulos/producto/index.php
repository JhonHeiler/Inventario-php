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

    <title>Producto</title>
   
</head>

<body>

   <div id="contenedor-listado" class="content mt-3" style=" margin:auto">

        <div class="card">
             <div class="card-header">
                Listado de productos
            <button id="btn-mostrar-filtros" class="btn btn-sm  float-right ml-1">Buscar</button>

            <button id="btn-agregar" class="btn btn-sm  float-right ml-1">Agregar</button>
            </div>

            <div id="div-formulario-busqueda" class="card-body d-none">

                <form id="formulario-busqueda" method="post" >
                    <input type="hidden" name="id_producto"  />
                    

                    <div class="form-group row">
                        <label for="nombre" class="col-sm-3 col-form-label">Nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del producto">
                        </div>
                    </div>

                    
                      <div class="form-group row">
                        <label for="fecha" class="col-sm-3 col-form-label">Fecha de adquisición</label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control"  name="fecha"  >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_provedor" class="col-sm-3 col-form-label">Proveedores</label>
                        <div class="col-sm-9">
                            <select class="form-control " name="id_provedor">
                                <option value="">(Seleccione el proveedor)</option>
                                <?php
                                $sqlp = "SELECT * FROM proveedores ORDER BY nombre";
                                $rsp = mysqli_query($conexion, $sqlp);
                                while ($rwp = mysqli_fetch_assoc($rsp)) {

                                    echo "<option value='$rwp[id_provedor]'>$rwp[nombre]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_categoria" class="col-sm-3 col-form-label">Categoria</label>
                        <div class="col-sm-9">
                            <select class="form-control " name="id_categoria">
                                <option value="">(Seleccione la categoria)</option>
                                <?php
                                $sqlc = "SELECT * FROM categoria ORDER BY nombre";
                                $rsc = mysqli_query($conexion, $sqlc);
                                while ($rwc = mysqli_fetch_assoc($rsc)) {

                                    echo "<option value='$rwc[id_categoria]'>$rwc[nombre]</option>";
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
                <span id="titulo"> Agregar producto </span>
            </div>

            <div class="card-body">
                <form id="formulario" method="post" action="guardar.php">
                    <input type="hidden" name="id_producto" id="id_producto" />


                    <div class="form-group row">
                        <label for="nombre" class="col-sm-3 col-form-label">Nombre del producto</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_marca" class="col-sm-3 col-form-label">Marca del producto</label>
                        <div class="col-sm-9">
                            <select class="form-control " id="id_marca" name="id_marca">
                                <option value="">(Seleccionar la marca del producto)</option>
                                <?php
                                $sql1 = "SELECT * FROM marca ORDER BY nombre";
                                $rs1 = mysqli_query($conexion, $sql1);
                                while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                    echo "<option value='$rw1[id_marca]'>$rw1[nombre]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                   
                      <div class="form-group row">
                        <label for="modelo" class="col-sm-3 col-form-label">Modelo </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="modelo" name="modelo" placeholder="modelo del producto" >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="stock" class="col-sm-3 col-form-label">Numero de Stock </label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="stock" name="stock" placeholder="ingrese numero de stock" >
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="fecha" class="col-sm-3 col-form-label">Fecha de adquisición  </label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="fecha" name="fecha" >
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="id_provedor" class="col-sm-3 col-form-label">Proveedor</label>
                        <div class="col-sm-9">
                            <select class="form-control " id="id_provedor" name="id_provedor">
                                <option value="">(Seleccionar el provedor)</option>
                                <?php
                                $sql2 = "SELECT * FROM proveedores ORDER BY nombre";
                                $rs2 = mysqli_query($conexion, $sql2);
                                while ($rw2 = mysqli_fetch_assoc($rs2)) {

                                    echo "<option value='$rw2[id_provedor]'>$rw2[nombre]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="referencia" class="col-sm-3 col-form-label">Serial</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="referencia" name="referencia" placeholder="Serial">
                        </div>
                    </div>

                     <div class="form-group row">
                        <label for="descripcion" class="col-sm-3 col-form-label">Descripción</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="descripcion del producto">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="id_categoria" class="col-sm-3 col-form-label">Categoria</label>
                        <div class="col-sm-9">
                            <select class="form-control " id="id_categoria" name="id_categoria">
                                <option value="">(Seleccionar el provedor)</option>
                                <?php
                                $sql3 = "SELECT * FROM categoria ORDER BY nombre";
                                $rs3 = mysqli_query($conexion, $sql3);
                                while ($rw3 = mysqli_fetch_assoc($rs3)) {

                                    echo "<option value='$rw3[id_categoria]'>$rw3[nombre]</option>";
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
            $("#titulo").html("Agregar producto");
            $("#contenedor-listado").hide();
            $("#contenedor-formulario").show();

            $("#btn-guardar").show();
            $("#btn-modificar").hide();
            $("#formulario")[0].reset(); //limpiar formulario
            $("#formulario input, #formulario select").prop("disabled", false);

        });

     
        $("#btn-guardar").click(function() {
            var parametros = $("#formulario").serialize();
            $.post("?modulo=producto&accion=agregar", parametros, function(respuesta) {
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
                $.post("?modulo=producto&accion=modificar", parametros, function(respuesta) {
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

        

        function eliminar(id_producto) {
            if (confirm("¿Realmente desea eliminar el registro?")) {
                var parametros = "id_producto=" + id_producto;
                $.post("?modulo=producto&accion=eliminar", parametros, function(respuesta) {
                    var r = jQuery.parseJSON(respuesta);
                    alert(r.mensaje);
                    if (r.error == false) {
                        cargar_listado();
                    }
                });
            }
        }


           function mostrar(id_producto) {
            $("#titulo").html("Mostrar producto");
            var parametros = "id_producto=" + id_producto;
            $.get("?modulo=producto&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide();
                $("#contenedor-formulario").show();

                $("#btn-guardar").hide();
                $("#btn-modificar").hide();
                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", true);
                
                var r = jQuery.parseJSON(respuesta);

                $("#id_producto").val(r.id_producto);
                $("#nombre").val(r.nombre);
                $("#id_marca").val(r.id_marca);
                $("#modelo").val(r.modelo);
                $("#stock").val(r.stock);
                $("#fecha").val(r.fecha);
                $("#id_provedor").val(r.id_provedor);
                $("#referencia").val(r.referencia);
                $("#descripcion").val(r.descripcion);
                $("#id_categoria").val(r.id_categoria);
                
            });
        }


       function modificar(id_producto) {
            $("#titulo").html("Modificar producto");
            var parametros = "id_producto=" + id_producto;
            $.get("?modulo=producto&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide();
                $("#contenedor-formulario").show();

                $("#btn-guardar").hide();
                $("#btn-modificar").show();
                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", false);
                
                var r = jQuery.parseJSON(respuesta);

                $("#id_producto").val(r.id_producto);
                $("#nombre").val(r.nombre);
                $("#id_marca").val(r.id_marca);
                $("#modelo").val(r.modelo);
                $("#stock").val(r.stock);
                $("#fecha").val(r.fecha);
                $("#id_provedor").val(r.id_provedor);
                $("#referencia").val(r.referencia);
                $("#descripcion").val(r.descripcion);
                $("#id_categoria").val(r.id_categoria);
                
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
            $("#listado").load("?modulo=producto&accion=listar", parametros);
        }
      
    </script>
</body>

</html> 