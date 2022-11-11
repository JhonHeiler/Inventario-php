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

    
$sql_perso="SELECT * FROM persona WHERE id_persona ='$_SESSION[id_per]'";
$datos=mysqli_query($conexion,$sql_perso);
$dato2=mysqli_fetch_assoc($datos);
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
    <div class="car">
             <div class="card-header " style="width:800px; margin:auto;">
               Cambiar contraseña
            <button id="btn-agregar" class="btn btn-sm  float-right ml-1">Cambiar contraseña</button>
            </div>

        </div>

    <div id="contenedor-cambio" class="content mt-3" style="width:800px; margin:auto; display: none;">

        <div class="card">
            <div class="card-header">
                <span id="titulo"> Modificar datos </span>
            </div>

            <div class="card-body">
                <form id="cambio" method="post" action="guardar.php">
                    <input type="hidden" name="id_persona" id="id_persona" />
                    
                    <div class="form-group row">
                        <label for="clave" class="col-sm-3 col-form-label"  >Contraseña actual </label>
                        <div class="col-sm-9">
                            <input   type="password" class="form-control" id="clave" name="clave" placeholder="Contraseña actual"  >
                        </div>
                    </div>
                    

                    <div class="form-group row">
                        <label for="clave" class="col-sm-3 col-form-label">Nueva contraseña</label>
                        <div class="col-sm-9">
                            <input  type="password" class="form-control" id="clave2" name="clave2" placeholder="Nueva contraseña"  >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="clave2" class="col-sm-3 col-form-label">Repetir nueva contraseña</label>
                        <div class="col-sm-9">
                            <input   type="password" class="form-control" id="clave3" name="clave3" placeholder="Repetir nueva contraseña"  >
                        </div>
                    </div>
                    


                    <hr />
                    <div class="form-group row mb-0">
                        <div class="col-sm-12 text-right">
                            <button type="button" id="btn-modificar2" class="btn btn-sm btn-secondary">Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>




    <!-- Formulario -->

    <div id="contenedor-formulario" class="content mt-3" style="width:800px; margin:auto;">

        <div class="card">
            <div class="card-header">
                <span id="titulo"> Modificar datos </span>
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
                            <input type="text" class="form-control" id="num_docu" name="num_docu" placeholder="Número de identificación " value="<?php echo $dato2['num_docu']; ?>" disabled>
                        </div>
                    </div>
                 

                    <div class="form-group row">
                        <label for="pri_nombre" class="col-sm-3 col-form-label">primer nombre  <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pri_nombre" name="pri_nombre" placeholder="primer nombre" value="<?php echo $dato2['pri_nombre']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="seg_nombre" class="col-sm-3 col-form-label">segundo nombre</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="seg_nombre" name="seg_nombre" placeholder="segundo nombre" value="<?php echo $dato2['seg_nombre']; ?>">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="pri_apellido" class="col-sm-3 col-form-label">primer apellido  <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="pri_apellido" name="pri_apellido" placeholder="primer apellido" value="<?php echo $dato2['pri_apellido']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="seg_apellido" class="col-sm-3 col-form-label">segundo apellido</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="seg_apellido" name="seg_apellido" placeholder="segundo apellido" value="<?php echo $dato2['seg_apellido']; ?>">
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="fecha_nac" class="col-sm-3 col-form-label">Fecha nacimiento  <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="date" class="form-control" id="fecha_nac" name="fecha_nac" value="<?php echo $dato2['fecha_nac']; ?>">
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
                            <input type="text" class="form-control" id="direccion" name="direccion" placeholder="dirección" value="<?php echo $dato2['direccion']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cor_pri" class="col-sm-3 col-form-label">Correo principal  <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cor_pri" name="cor_pri" placeholder="Correo principal, example@ejemplo" class="valid" value="<?php echo $dato2['cor_pri']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="cor_alt" class="col-sm-3 col-form-label">Correo alternativo</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cor_alt" name="cor_alt" placeholder="Correo alternativo" value="<?php echo $dato2['cor_alt']; ?>">
                        </div>
                    </div>

                   
                    <div class="form-group row">
                        <label for="tel_pri" class="col-sm-3 col-form-label">Telefono pricipal  <span class="text-danger">*</span></label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="tel_pri" name="tel_pri" placeholder="Telefono pricipal, solo numero" value="<?php echo $dato2['tel_pri']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tel_alt" class="col-sm-3 col-form-label">Telefono alternativo</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" id="tel_alt" name="tel_alt" placeholder="Telefono alternativo, solo numero" value="<?php echo $dato2['tel_alt']; ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="clave" class="col-sm-3 col-form-label">Clave</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="clave" name="clave" placeholder="Clave" value="<?php echo $dato2['clave']; ?>" disabled>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="clave2" class="col-sm-3 col-form-label">Repetir clave</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="clave2" name="clave2" placeholder="Repetir clave" value="<?php echo $dato2['clave']; ?>" disabled>
                        </div>
                    </div>


                    <hr />
                    <div class="form-group row mb-0">
                        <div class="col-sm-12 text-right">
                            <button type="button" id="btn-modificar" class="btn btn-sm btn-secondary">Modificar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </div>
    <!-- Fin formulario -->
    <script type="text/javascript">
        $("#btn-agregar").click(function() {
            $("#titulo").html("cambiar contraseña");
            $("#contenedor-cambio").show();
            $("#contenedor-formulario").hide();

           
            $("#btn-modificar").show();
            $("#cambio")[0].reset(); //limpiar formulario
            $("#formulario input, #formulario select").prop("disabled", false);

        });

        $("#btn-guardar").click(function() {
            var parametros = $("#formulario").serialize();
            $.post("?modulo=persona&accion=agregar", parametros, function(respuesta) {
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
                $.post("?modulo=modi&accion=modificar", parametros, function(respuesta) {
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


        $("#btn-modificar2").click(function() {
            if (confirm("¿Desea modificar el registro?")) {
                var parametros = $("#cambio").serialize();
                $.post("?modulo=modi&accion=cambio", parametros, function(respuesta) {
                    //jQuery.parseJSON convertir la respuesta en JSON en un arreglo asociativo
                    var r = jQuery.parseJSON(respuesta);
                    alert(r.mensaje);
                    if (r.error == false) {
                        $("#contenedor-cambio").hide();
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

        

       function modificar(id_persona) {
            $("#titulo").html("Modificar persona");
            var parametros = "id_persona=" + id_persona;
            $.get("?modulo=persona&accion=cargar-datos", parametros, function(respuesta) {
                $("#formulario")[0].reset(); //limpiar formulario
                $("#contenedor-listado").hide();
                $("#contenedor-formulario").show();

                $("#btn-guardar").hide();
                $("#btn-modificar").show();
                $("#formulario")[0].reset(); //limpiar formulario
                $("#formulario input, #formulario select").prop("disabled", false);
                $("#num_docu").prop("disabled", true);
                $("#clave2").prop("disabled", true);
                $("#clave").prop("disabled", true);


                var r = jQuery.parseJSON(respuesta);
 
                $("#id_persona").val(r.id_persona);
                $("#id_tipo_docu").val(r.id_tipo_docu);
                $("#num_docu").val(r.num_docu);
                $("#pri_nombre").val(r.pri_nombre);
                $("#seg_nombre").val(r.seg_nombre);
                $("#pri_apellido").val(r.pri_apellido);
                $("#seg_apellido").val(r.seg_apellido);
                $("#fecha_nac").val(r.fecha_nac);
                $("#id_sexo").val(r.id_sexo);
                $("#id_mun_res").val(r.id_mun_res);
                $("#direccion").val(r.direccion);
                $("#cor_pri").val(r.cor_pri);
                $("#cor_alt").val(r.cor_alt);
                $("#tel_pri").val(r.tel_pri);
                $("#tel_alt").val(r.tel_alt);
                $("#clave").val(r.clave);
                $("#clave2").val(r.clave);

                

            });
        }

            $("#btn-mostrar-filtros").click(function() {
            $("#div-formulario-busqueda").toggleClass("d-none");
        });



        $("#id_tipo_docu").val(<?php echo $dato2["id_tipo_docu"];?>)
        $("#id_sexo").val(<?php echo $dato2["id_sexo"];?>)
        $("#id_mun_res").val(<?php echo $dato2["id_mun_res"];?>)
    </script>
</body>

</html>