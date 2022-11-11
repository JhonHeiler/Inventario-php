<?php
ob_start();
set_time_limit(0); //No limitar el tiempo de ejecuciÃ³n de PHP
ini_set('memory_limit', '-1'); //No liminar la memorÃ­a de PHP
?>

<style>
    td,
    th {
        border: 0.2pt solid #ccc;
    }

    h3 {
        margin: 0px;
    }
</style>

<?php

$id_municipio2 = $_POST['id_municipio'];
$sql = "SELECT 
            CONCAT_WS(' ',
                    p1.pri_nombre,
                    p1.seg_nombre,
                    p1.pri_apellido,
                    p1.seg_apellido) AS nombre,
                    p1.num_docu,
                    Concat_ws(' ',
            p1.tel_pri,'-',
            p1.tel_alt) tele,
           
            m1.nombre AS muni
            
            FROM
            persona p1
            

               
                JOIN
            municipio m1 ON p1.id_mun_res = m1.id_municipio
                
            WHERE p1.id_mun_res ='$id_municipio2'
            
            limit 100

            
";
 
$rs = mysqli_query($conexion, $sql);
$num = 1;
?>


<table style="font-family:'Times New Roman', Times, serif; font-size:8pt; 
       border-collapse:collapse" cellpadding="2" cellspacing="0">
    <thead>
        <tr style="font-weight:bold; text-align:left; background-color:#e1e1e1">
            <tr style=" text-align: center; font-weight:bold;">Lista de persona por municipio</tr>
            <th style="width:10mm">No</th>
            <th style="width:40mm">Municipio de Residencia</th>
            <th style="width:50mm">Nombre</th>
            <th style="width:30mm">Número de documento</th>
            
            <th style="width:40mm">Teléfonos</th>
            
        </tr>
    </thead>

    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($rs)) {
            if ($num % 2 == 0) {
                $fondo = "#eee";
            } else {
                $fondo = "#fff";
            }
            echo "<tr style=\"text-align:left; background-color:$fondo\" > ";
            echo "<td style=\"width:10mm;\">$num</td>";
            echo "<td style=\"width:40mm;\">$row[muni]</td>";
            echo "<td style=\"width:50mm;\">$row[nombre]</td>";
            echo "<td style=\"width:30mm;\">$row[num_docu]</td>";
            
            echo "<td style=\"width:30mm;\">$row[tele]</td>";
            
            echo "</tr>";
            $num++;
        }
        ?>
    </tbody>
</table>


<?php
        $html = ob_get_clean();
        $formato = $_POST['formato'];

        if ($formato == "html") {
            echo $html;
        } else if ($formato == "doc") {
            header("Content-Type: application/download");
            header("Content-Disposition: attachment; filename=listado por municipio.doc;");
            echo $html;
 
        } else if ($formato == "xls") {
            header("Content-Type: application/download");
            header("Content-Disposition: attachment; filename=listado por municipio.xls;");
            echo $html;
        } else if($formato=="pdf") {
            require_once("php/tcpdf/tcpdf.php");
            require_once("php/reporte.php");
            //Iniciar la clase PDF

            //OrientaciÃ³n del papel (P=Verticial, L=Horizontal)
            //


            $titulo="<div style=\"text-align:center\"> 
            <b>Listado por municipio </b>
            <br/> 
            Instituci¨®n educativa Gimnasio</div>";

            $pdf = new REPORTE("P", "mm", "LETTER", true, 'UTF-8', false);

            //Definir los margenes
            //Margin Izquierdo, Superior, Derecho
            $pdf->SetMargins(10, 30, 10);
            //Margen del encabezado
            $pdf->SetHeaderMargin(0);
            //Margen del pie de pagina
            $pdf->SetFooterMargin(40);

            //Margen para el salto de linea. Debe ser mayor que el margen del pie de pagina 
            $pdf->SetAutoPageBreak(TRUE, 50);

            //Tipo y tamaÃ±o de letra
            $pdf->SetFont('times', '', 10);

            //Agregar una pagina
            $pdf->AddPage();

            //Poner el contenido HTML generado dentro del archivo PDF
            $pdf->writeHTML($html, true, false, true, false, '');

            //Generar el archivo PDF y mostrarlo en el navegador
            $pdf->Output('listado por municipio.pdf', 'I');

        }

?>