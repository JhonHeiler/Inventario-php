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

    <title>Proveedores</title>
   
</head>

<body>

   <div id="contenedor-listado" class="content mt-3" style="/*width:1000px;*/ margin:auto">

        <div class="card">
             <div class="card-header">
                Listado de proveedores
            <button id="btn-mostrar-filtros" class="btn btn-sm  float-right ml-1">Buscar</button>

            <button id="btn-agregar" class="btn btn-sm  float-right ml-1">Agregar</button>
            </div>

            <div id="div-formulario-busqueda" class="card-body d-none">

                <form id="formulario-busqueda" method="post" >
                    <input type="hidden" name="id_provedor"  />

                    <div class="form-group row">
                        <label for="tipo_docu" class="col-sm-3 col-form-label">Tipo de documento</label>
                        <div class="col-sm-9">
                            <select class="form-control " name="tipo_docu">
                                <option value="">(Seleccionar el tipo de documento)</option>
                                <?php
                                $sqlm = "SELECT * FROM identificacion ORDER BY nombre";
                                $rsm = mysqli_query($conexion, $sqlm);
                                while ($rwm = mysqli_fetch_assoc($rsm)) {

                                    echo "<option value='$rwm[id_identificacion]'>$rwm[nombre]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                   
                   <div class="form-group row">
                        <label for="nombre" class="col-sm-3 col-form-label">Nombre del proveedor </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nombre" placeholder="Nombre del proveedor"  >
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <label for="num_docu" class="col-sm-3 col-form-label">Documento </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="num_docu" placeholder="Numero de documento"  >
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="telefono" class="col-sm-3 col-form-label">Teléfono </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="telefono" placeholder="Numero de teléfono"  >
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

    <div id="contenedor-formulario" class="content mt-3" style="width:900px; margin:auto; display:none ">

        <div class="card">
            <div class="card-header">
                <span id="titulo"> proveedores</span>
            </div>

            <div class="card-body">
                <form id="formulario" method="post" action="guardar.php">
                    <input type="hidden" name="id_provedor" id="id_provedor" />


                    <div class="form-group row">
                        <label for="tipo_docu" class="col-sm-3 col-form-label"> Tipo de documento</label>
                        <div class="col-sm-9">
                            <select class="form-control " id="tipo_docu" name="tipo_docu">
                                <option value="">(Seleccionar el tipo de cocumento)</option>
                                <?php
                                $sql1 = "SELECT * FROM identificacion ORDER BY nombre";
                                $rs1 = mysqli_query($conexion, $sql1);
                                while ($rw1 = mysqli_fetch_assoc($rs1)) {

                                    echo "<option value='$rw1[id_identificacion]'>$rw1[nombre]</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    

                    <div class="form-group row">
                        <label for="num_docu" class="col-sm-3 col-form-label">Número de identificación  </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="num_docu" name="num_docu" placeholder="Número de identificación " >
                        </div>
                    </div>
                 
                      
                     <div class="form-group row">
                        <label for="nombre" class="col-sm-3 col-form-label">Nombre  del proveedor </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo del proveedor" >
                        </div>
                    </div>

                      
                    <div class="form-group row">
                        <label for="telefono" class="col-sm-3 col-form-label">Telefono </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="telefono" name="telefono"  placeholder="Telefono" >
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="direccion" class="col-sm-3 col-form-label">Dirección</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
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
            $("#titulo").html("Agregar proveedores");
            $("#contenedor-listado").hide();
            $("#contenedor-formulario").show();

            $("#btn-guardar").show();
            $("#btn-modificar").hide();
            $("#formulario")[0].reset(); //limpiar formulario
            $("#formulario input, #formulario select").prop("disabled", false);

        });

     
        $("#btn-guardar").click(function() {
            var parametros = $("#formulario").serialize();
            $.post("?modulo=proveedores&accion=agregar", parametros, function(respuesta) {
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
                $.post("?modulo=proveedores&accion=modificar", parametros, function(respuesta) {
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

        

        function eliminar(id_provedor) {
            if (confirm("¿Realmente desea eliminar el registro?")) {
                var parametros = "id_provedor=" + id_provedor;
                $.post("?modulo=proveedores&accion=eliminar", parametros, function(respuesta) {
                    var r = jQuery.parseJSON(respuesta);
                    alert(r.mensaje);
                    if (r.error == false) {
                        cargar_listado();
                    }
                });
            }
        }


       function modificar(id_provedor) {
            $("#titulo").html("Modificar proveedores");
            var parametros = "id_provedor=" + id_provedor;
            $.get("?modulo=proveedores&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide();
                $("#contenedor-formulario").show();

                $("#btn-guardar").hide();
                $("#btn-modificar").show();
                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", false);
                $("#num_docu").prop("disabled", true);
                
                var r = jQuery.parseJSON(respuesta);

                $("#id_provedor").val(r.id_provedor);
                $("#tipo_docu").val(r.tipo_docu);
                $("#num_docu").val(r.num_docu);
                $("#nombre").val(r.nombre);
                $("#telefono").val(r.telefono);
                $("#direccion").val(r.direccion);
               
            });
        }

        function mostrar(id_provedor) {
            $("#titulo").html("Mostrar proveedores");
            var parametros = "id_provedor=" + id_provedor;
            $.get("?modulo=proveedores&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide();
                $("#contenedor-formulario").show();

                $("#btn-guardar").hide();
                $("#btn-modificar").hide();

                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", true);

                var r = jQuery.parseJSON(respuesta);

                $("#id_provedor").val(r.id_provedor);
                $("#tipo_docu").val(r.tipo_docu);
                $("#num_docu").val(r.num_docu);
                $("#nombre").val(r.nombre);
                $("#telefono").val(r.telefono);
                $("#direccion").val(r.direccion);



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
            $("#listado").load("?modulo=proveedores&accion=listar", parametros);
        }
      
    </script>
</body>

</html> 