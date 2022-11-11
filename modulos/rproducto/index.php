<div id="" class="content mt-2 mb-2" style="width:500px; margin-left: 30px; float: left; ">

    <div class="card">
        <div class="card-header">
            <h3 id="titulo">Reportes de Categorías </h3>

        </div>

        <div class="card-body">
            <form id="formulario" method="post" target="_blank" action="?modulo=rproducto&accion=mostrar">
                <div class="form-group row">
                    <label for="clave" class="col-sm-3 col-form-label">Formato</label>
                    <div class="col-sm-9">
                       <select class="form-control" id="formato" name="formato">
                            <option>(Seleccionar formato)</option>
                            <option value="html" selected>Ver en linea</option>
                            <option value="pdf" >Archivo PDF</option>
                            <option value="doc">Microsoft Word</option>
                            <option value="xls">Microsoft Excel</option>
                       </select>
                    </div>
                </div>

                <hr />
                <div class="form-group row mb-0">
                    <div class="col-sm-12 text-right">
                        <button type="submit" id="btn-iniciar" class="btn btn-lg btn-block btn-primary">Mostrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>  
</div>

<div id="" class="content mt-2 mb-2 " style="width:500px; margin-right: 30px; float: right;">

    <div class="card">
        <div class="card-header">
            <h3 id="titulo">Reportes de listado de proveedores </h3>

        </div>

        <div class="card-body">
            <form id="formulario" method="post" target="_blank" action="?modulo=reporte2&accion=mostrar">
                <div class="form-group row">
                    <label for="clave" class="col-sm-3 col-form-label">Formato</label>
                    <div class="col-sm-9">
                       <select class="form-control" id="formato" name="formato">
                            <option>(Seleccionar formato)</option>
                            <option value="html" selected>Ver en linea</option>
                            <option value="pdf" >Archivo PDF</option>
                            <option value="doc">Microsoft Word</option>
                            <option value="xls">Microsoft Excel</option>
                       </select>
                    </div>
                </div>

                <hr />
                <div class="form-group row mb-0">
                    <div class="col-sm-12 text-right">
                        <button type="submit" id="btn-iniciar" class="btn btn-lg btn-block btn-primary">Mostrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>  
</div>


<div id="" class="content mt-2 mb-2 " style="width:500px; margin-right:30px; float: right;">

    <div class="card">
        <div class="card-header">
            <h3 id="titulo">Producto </h3>

        </div>

        <div class="card-body">
            <form id="formulario" method="post" target="_blank" action="?modulo=reporte8&accion=mostrar">
                <div class="form-group row">
                    <label for="clave" class="col-sm-3 col-form-label">Formato</label>
                    <div class="col-sm-9">
                       <select class="form-control" id="formato" name="formato">
                            <option>(Seleccionar formato)</option>
                            <option value="html" selected>Ver en linea</option>
                            <option value="pdf" >Archivo PDF</option>
                            <option value="doc">Microsoft Word</option>
                            <option value="xls">Microsoft Excel</option>
                       </select>
                    </div>
                </div>

                <hr />
                <div class="form-group row mb-0">
                    <div class="col-sm-12 text-right">
                        <button type="submit" id="btn-iniciar" class="btn btn-lg btn-block btn-primary">Mostrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>  
</div>



<div id="" class="content mt-2 mb-2 " style="width:500px; margin-right: 30px; float:right;">

    <div class="card">
        <div class="card-header">
            <h3 id="titulo">Entregas</h3>

        </div>

        <div class="card-body">
            <form id="formulario" method="post" target="_blank" action="?modulo=reporte4&accion=mostrar">
                <div class="form-group row">
                    <label for="clave" class="col-sm-3 col-form-label">Formato</label>
                    <div class="col-sm-9">
                       <select class="form-control" id="formato" name="formato">
                            <option>(Seleccionar formato)</option>
                            <option value="html" selected>Ver en linea</option>
                            <option value="pdf" >Archivo PDF</option>
                            <option value="doc">Microsoft Word</option>
                            <option value="xls">Microsoft Excel</option>
                       </select>
                    </div>
                </div>

                <hr />
                <div class="form-group row mb-0">
                    <div class="col-sm-12 text-right">
                        <button type="submit" id="btn-iniciar" class="btn btn-lg btn-block btn-primary">Mostrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>  
</div>

<div id="" class="content mt-2 mb-2 " style="width:500px; float: left; margin-left: 30px; ">

    <div class="card">
        <div class="card-header">
            <h3 id="titulo">Listado de municipios de residencia </h3>

        </div>

        <div class="card-body">
            <form id="formulario" method="post" target="_blank" action="?modulo=reporte3&accion=mostrar">

                <div class="form-group row">
                    <label for="id_municipio" class="col-sm-3 col-form-label">Municipio residencia</label>
                    <div class="col-sm-9">
                        <select class="form-control " id="id_municipio" name="id_municipio">
                            <option value="">(Seleccionar municipio de nacimiento)</option>
                            <?php
                            $sql3 = "SELECT 
                                        m.id_municipio,
                                        CONCAT_WS(': ', d.nombre, m.nombre) AS nombre
                                    FROM
                                        municipio m
                                            JOIN
                                        departamento d ON m.id_departamento = d.id_departamento
                                    ORDER BY nombre";
                            $rs3 = mysqli_query($conexion, $sql3);
                            while ($rw3 = mysqli_fetch_assoc($rs3)) {

                                echo "<option value='$rw3[id_municipio]'>$rw3[nombre]</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="clave" class="col-sm-3 col-form-label">Formato</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="formato" name="formato">
                            <option>(Seleccionar formato)</option>
                            <option value="html"selected>Ver en linea</option>
                            <option value="pdf" >Archivo PDF</option>
                            <option value="doc">Microsoft Word</option>
                            <option value="xls">Microsoft Excel</option>
                        </select>
                    </div>
                </div>

                <hr />
                <div class="form-group row mb-0">
                    <div class="col-sm-12 text-right">
                        <button type="submit" id="btn-iniciar" class="btn btn-lg btn-block btn-primary">Mostrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<div id="" class="content mt-2 mb-2" style="width:500px; float: right; margin-right: 30px; ">

    <div class="card">
        <div class="card-header">
            <h3 id="titulo">Reportes por tipo de documento </h3>

        </div>

        <div class="card-body">
            <form id="formulario" method="post" target="_blank" action="?modulo=reporte6&accion=mostrar">

                <div class="form-group row">
                    <label for="id_tipo_docu" class="col-sm-3 col-form-label">Tipo identificación</label>
                    <div class="col-sm-9">
                         <select class="form-control " name="id_tipo_docu" id="id_tipo_docu">
                                <option value="">(Seleccionar tipo de identificación)</option>
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
                    <label for="clave" class="col-sm-3 col-form-label">Formato</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="formato" name="formato">
                            <option>(Seleccionar formato)</option>
                            <option value="html" selected>Ver en linea</option>
                            <option value="pdf" >Archivo PDF</option>
                            <option value="doc">Microsoft Word</option>
                            <option value="xls">Microsoft Excel</option>
                        </select>
                    </div>
                </div>

                <hr />
                <div class="form-group row mb-0">
                    <div class="col-sm-12 text-right">
                        <button type="submit" id="btn-iniciar" class="btn btn-lg btn-block btn-primary">Mostrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>





    


<div id="" class="content mt-2 mb-2 " style="width:500px; margin-left: 30px; float: left;">

    <div class="card">
        <div class="card-header">
            <h3 id="titulo">Devoluciones </h3>

        </div>

        <div class="card-body">
            <form id="formulario" method="post" target="_blank" action="?modulo=reporte5&accion=mostrar">
                <div class="form-group row">
                    <label for="clave" class="col-sm-3 col-form-label">Formato</label>
                    <div class="col-sm-9">
                       <select class="form-control" id="formato" name="formato">
                            <option>(Seleccionar formato)</option>
                            <option value="html" selected>Ver en linea</option>
                            <option value="pdf" >Archivo PDF</option>
                            <option value="doc">Microsoft Word</option>
                            <option value="xls">Microsoft Excel</option>
                       </select>
                    </div>
                </div>

                <hr />
                <div class="form-group row mb-0">
                    <div class="col-sm-12 text-right">
                        <button type="submit" id="btn-iniciar" class="btn btn-lg btn-block btn-primary">Mostrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>  
</div>



<div id="" class="content mt-2 mb-2" style="width:500px; float: left; margin-left:  30px; ">

    <div class="card">
        <div class="card-header">
            <h3 id="titulo">Reportes por sexo</h3>

        </div>

        <div class="card-body">
            <form id="formulario" method="post" target="_blank" action="?modulo=reporte7&accion=mostrar">

                <div class="form-group row">
                    <label for="id_sexo" class="col-sm-3 col-form-label">Sexo</label>
                    <div class="col-sm-9">
                         <select class="form-control " name="id_sexo" id="id_sexo">
                                <option value="">(Seleccionar tipo de identificación)</option>
                                <?php
                                $sql2 = "SELECT * FROM sexo ORDER BY nombre";
                                $rs2 = mysqli_query($conexion, $sql2);
                                while ($rw2 = mysqli_fetch_assoc($rs2)) {

                                    echo "<option value='$rw2[id_sexo]'>$rw2[nombre]</option>";
                                }
                                ?>
                            </select>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="clave" class="col-sm-3 col-form-label">Formato</label>
                    <div class="col-sm-9">
                        <select class="form-control" id="formato" name="formato">
                            <option>(Seleccionar formato)</option>
                            <option value="html" selected>Ver en linea</option>
                            <option value="pdf" >Archivo PDF</option>
                            <option value="doc">Microsoft Word</option>
                            <option value="xls">Microsoft Excel</option>
                        </select>
                    </div>
                </div>

                <hr />
                <div class="form-group row mb-0">
                    <div class="col-sm-12 text-right">
                        <button type="submit" id="btn-iniciar" class="btn btn-lg btn-block btn-primary">Mostrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

    