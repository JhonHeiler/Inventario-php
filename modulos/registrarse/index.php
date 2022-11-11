<?php
//require_once("conexion.php");

$sql_identificacion="SELECT * FROM  identificacion";

$sql_mun="SELECT 
municipio.id_municipio,
municipio.nombre as municipio,
departamento.nombre as departamento
FROM municipio
join departamento on municipio.id_departamento=departamento.id_departamento";
$sql_se="SELECT * FROM sexo";

$r_se=mysqli_query($conexion,$sql_se);
$rm_mexp=mysqli_query($conexion,$sql_mun);
$rm_nac=mysqli_query($conexion,$sql_mun);
$rm_res=mysqli_query($conexion,$sql_mun);
$r_iden=mysqli_query($conexion,$sql_identificacion);

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

    <title>Persona</title>
  
</head>

<body>

     <!-- Formulario -->

    <div id="contenedor-formulario" class="content " style="width:900px; margin:auto;  ">

        <div class="card">
            <div class="card-header">
                <span id="titulo"> Agregar persona </span>
            </div>

            <div class="card-body">
                <form id="formulario" method="post" action="guardar.php">
                    <input type="hidden" name="id_persona" id="id_persona" />
                    <div class="form-group row">
                        <label for="id_tipo_docu" class="col-sm-3 col-form-label">Tipo identificación  <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select class="form-control " id="id_tipo_docu" name="id_tipo_docu">
                                <option value="">(Seleccionar tipo de identificación)</option>
                               <?php while ($rr_inden=mysqli_fetch_assoc($r_iden)) { ?>
                                    <option value="<?php echo $rr_inden['id_identificacion']; ?>"><?php echo $rr_inden['nombre'] ; ?></option>
                               <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="num_docu" class="col-sm-3 col-form-label">Número de identificación  <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="num_docu" name="num_docu" placeholder="Número de identificación " >
                        </div>
                    </div>
                 

                    <div class="form-group row">
                        <label for="pri_nombre" class="col-sm-3 col-form-label">primer nombre  <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pri_nombre" name="pri_nombre" placeholder="primer nombre">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="seg_nombre" class="col-sm-3 col-form-label">segundo nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="seg_nombre" name="seg_nombre" placeholder="segundo nombre">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pri_apellido" class="col-sm-3 col-form-label">primer apellido  <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pri_apellido" name="pri_apellido" placeholder="primer apellido">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="seg_apellido" class="col-sm-3 col-form-label">segundo apellido</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="seg_apellido" name="seg_apellido" placeholder="segundo apellido">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="fecha_nac" class="col-sm-3 col-form-label">Fecha nacimiento  <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="id_sexo" class="col-sm-3 col-form-label">sexo  <span class="text-danger">*</span></label>
                        <div class="col-sm-9">

                        <select class="form-control " id="id_sexo" name="id_sexo">
                                <option value="">(Seleccionar sexo)</option>
                               <?php while ($r_sex=mysqli_fetch_assoc($r_se)) { ?>
                                    <option value="<?php echo $r_sex['id_sexo']; ?>"><?php echo $r_sex['nombre']; ?></option>
                               <?php } ?>
                            </select>
                            
                        </div>
                    </div>

                   
                    <div class="form-group row">
                        <label for="id_mun_res" class="col-sm-3 col-form-label">Municipio residencia  <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <select class="form-control " id="id_mun_res" name="id_mun_res">
                                <option value="">(Seleccionar municipio de residencia)</option>
                               <?php while ($rmre_res=mysqli_fetch_assoc($rm_res)) { ?>
                                    <option value="<?php echo $rmre_res['id_municipio']; ?>"><?php echo $rmre_res['municipio']."-".$rmre_res['departamento']; ?></option>
                               <?php } ?>
                            </select>
                        </div>
                    </div>
                 
                    <div class="form-group row">
                        <label for="direccion" class="col-sm-3 col-form-label">Dirección  <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="dirección">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cor_pri" class="col-sm-3 col-form-label">Correo principal  <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cor_pri" name="cor_pri" placeholder="Correo principal, example@ejemplo" class="valid">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cor_alt" class="col-sm-3 col-form-label">Correo alternativo</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cor_alt" name="cor_alt" placeholder="Correo alternativo">
                        </div>
                    </div>

                   
                    <div class="form-group row">
                        <label for="tel_pri" class="col-sm-3 col-form-label">Telefono pricipal  <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="tel_pri" name="tel_pri" placeholder="Telefono pricipal, solo numero">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tel_alt" class="col-sm-3 col-form-label">Telefono alternativo</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="tel_alt" name="tel_alt" placeholder="Telefono alternativo, solo numero">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="clave" class="col-sm-3 col-form-label">Clave</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="clave" name="clave" placeholder="Clave">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="clave2" class="col-sm-3 col-form-label">Repetir clave</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="clave2" name="clave2" placeholder="Repetir clave">
                        </div>
                    </div>


                    <hr />
                    <div class="form-group row mb-0">
                        <div class="col-sm-12 text-right">
                        
                        <button type="button" id="btn-guardar" class="btn btn-sm ">Guardar</button>

                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
    <!-- Fin formulario -->
    <script type="text/javascript">
        $("#btn-agregar").click(function() {
            $("#titulo").html("Agregar persona");
            $("#contenedor-listado").hide();
            $("#contenedor-formulario").show();

            $("#btn-guardar").show();
            $("#btn-modificar").hide();
            $("#formulario")[0].reset(); //limpiar formulario
            $("#formulario input, #formulario select").prop("disabled", false);

        });

        $("#btn-guardar").click(function() {
            var parametros = $("#formulario").serialize();
            $.post("?modulo=registrarse&accion=agregar", parametros, function(respuesta) {
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

        
        
        $("#btn-regresar").click(function() {
            $("#contenedor-listado").show();
            $("#contenedor-formulario").hide();
            cargar_listado();
        });


        $("#btn-mostrar-filtros").click(function() {
        $("#div-formulario-busqueda").toggleClass("d-none");
        });

       

        function cargar_listado() {
            var parametros = $("#formulario-busqueda").serialize() + "&" + 
            $("#formulario-paginacion").serialize();
            $("#listado").load("?modulo=registrarse&accion=listar", parametros);
        }
    </script>
</body>

</html>