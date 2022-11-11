<?php 
//require_once("conexion.php");

if(isset($_GET['pagina_actual'])) {
    $pagina = $_GET['pagina_actual'];
} else {
    $pagina=1;
}

if(isset($_GET['num_registros'])) {
    $num_registros = $_GET['num_registros'];
} else {
    $num_registros=5;
}

$sql_cantidad = "SELECT COUNT(*) AS cantidad FROM devolucion";
$rs_cantidad = mysqli_query($conexion,$sql_cantidad);
$row_cantidad = mysqli_fetch_assoc($rs_cantidad);
$cantidad = $row_cantidad['cantidad'];
$num_paginas = ceil ($cantidad/$num_registros);
$inicio = ($pagina-1)*$num_registros;


?>
<table class="table table-striped" >
    <thead>
        <tr>
            <th>No</th>
            
            <th>Observacion</th>
            <th>Producto</th>
            <th>Responsable</th>
            <th>Fecha de devolución</th>
            <th>cantidad</th>
            <th>Acciones</th>
        </tr>
    </thead>
        
    <tbody>


        <?php 

        $num = $inicio+1;
        $filtros = "";

        if (isset($_GET['id_producto']) == true &&  $_GET['id_producto']  != "") {
            $filtros .= " AND d.id_producto = '$_GET[id_producto]' ";
        }

        if (isset($_GET['responsable']) == true &&  $_GET['responsable']  != "") {
            $filtros .= " AND d.responsable = '$_GET[responsable]' ";
        }


    

        $sql = "SELECT 
                d.id_devolucion,
                d.obse,
                producto.nombre producto,
                CONCAT_WS('',
                persona.pri_nombre,' ',
                persona.seg_nombre,' ',
                persona.pri_apellido) nombre,
                d.fecha_de,
                d.cantidad
                
            
                FROM devolucion d
              
                join producto on d.id_producto=producto.id_producto
                join persona on d.responsable=persona.id_persona
                WHERE TRUE $filtros
               
                LIMIT $inicio, $num_registros
    
                ";
        $rmu = mysqli_query($conexion, $sql);
        while ($row = mysqli_fetch_assoc($rmu)) {
            echo "<tr>";
            echo "<td>$num</td>";
           
            echo "<td>$row[obse]</td>";
            echo "<td>$row[producto]</td>";
            echo "<td>$row[nombre]</td>";
            echo "<td>$row[fecha_de]</td>";
            echo "<td>$row[cantidad]</td>";
             echo "<td class='acciones'>

                    <a href='javascript:;' class='mostrar'  onclick='mostrar(\"$row[id_devolucion]\")'>
                        <i class='fas fa-eye'></i>
                    </a>
                   
                    <a href='javascript:;' class='eliminar' onclick='eliminar(\"$row[id_devolucion]\")'>
                        <i class='fas fa-trash'></i>
                    </a>
                    <a href='javascript:;' class='modificar' onclick='modificar(\"$row[id_devolucion]\")'>
                        <i class='fas fa-edit '></i>
                    </a>
                </td>";
            echo "</tr>";
            //$num = $num + 1;
            $num++;
            //$num += 1;
        }
        ?>

    </tbody>
</table>


<div class="card-footer">
    <form class="text-center" id="formulario-paginacion">
        <select id="num_registros" name="num_registros">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="30">30</option>
            <option value="40">40</option>
            <option value="50">50</option>
            <option value="100">100</option>
        </select>
        
        <button type="button" class="btn btn-sm btn-primary" id="btn-inicio"> <i class="fas fa-fast-backward"></i> </button>
        <button type="button" class="btn btn-sm btn-primary" id="btn-anterior"> <i class="fas fa-step-backward"></i>  </button>
        
        <input  type="text" value="<?php echo $pagina ?>" id="pagina_actual" name="pagina_actual" style="width:40px"/>
        /
        <input  type="text" value="<?php echo $num_paginas ?>" id="num_paginas"  style="width:40px" disabled />

        <button type="button" class="btn btn-sm btn-primary" id="btn-siguiente"> <i class="fas fa-step-forward"></i> </button>
        <button type="button" class="btn btn-sm btn-primary" id="btn-final"> <i class="fas fa-fast-forward"></i> </button>
        <?php
                $desde = $inicio + 1;
                $hasta = $inicio+ $num_registros;
                echo "$desde - $hasta de $cantidad";
                ?>
    </form>
</div>
 
 <script type="text/javascript">
        $("#btn-inicio").click(function(){
            $("#pagina_actual").val("1");
            cargar_listado();
        });

        $("#btn-anterior").click(function(){
            $pagina = parseInt($("#pagina_actual").val())-1;
            if($pagina <1) {
                $pagina=1;
            }
            $("#pagina_actual").val($pagina);
            cargar_listado();
        });    

        $("#btn-siguiente").click(function(){
            $pagina = parseInt($("#pagina_actual").val())+1;
 
            if($pagina > parseInt($("#num_paginas").val()) ) {
                $pagina=parseInt($("#num_paginas").val());
            }

            $("#pagina_actual").val($pagina);
            cargar_listado();
        });

        $("#btn-final").click(function(){
            $pagina = parseInt($("#num_paginas").val());
            $("#pagina_actual").val($pagina);
            cargar_listado();
        }); 

        $("#num_registros").val("<?php echo $num_registros ?>");

        $("#num_registros, #pagina_actual").change(function() {
            cargar_listado();
        });
 </script>