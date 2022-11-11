<?php
ob_start();
set_time_limit(0); //No limitar el tiempo de ejecución de PHP
ini_set('memory_limit', '-1'); //No liminar la memoría de PHP
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


$id_sexo2 = $_POST['id_sexo'];
$sql = "SELECT 
            CONCAT_WS(' ',
                    p1.pri_nombre,
                    p1.seg_nombre,
                    p1.pri_apellido,
                    p1.seg_apellido) AS nombre,
                    sexo.nombre sexo,
                    p1.cor_pri,
           
            m1.nombre AS muni,
            Concat_ws(' ',
            p1.tel_pri,'-',
            p1.tel_alt) tele
            
            FROM
            persona p1
    
                
              
            JOIN
            municipio m1 ON p1.id_mun_res = m1.id_municipio
            join sexo on p1.id_sexo=sexo.id_sexo
                
            WHERE p1.id_sexo ='$id_sexo2'   
            
";
 
$rs = mysqli_query($conexion, $sql);
$num = 1;
?>


<table style="font-family:'Times New Roman', Times, serif; font-size:8pt; 
       border-collapse:collapse" cellpadding="2" cellspacing="0">
    <thead>
        <tr style="font-weight:bold; text-align:left; background-color:#e1e1e1">
            <tr style=" text-align: center; font-weight:bold;">Lista de personas por género</tr>
            <th style="width:10mm">No</th>
            <th style="width:20mm">Sexo</th>
            <th style="width:40mm">Nombre </th>
            <th style="width:40mm">Municipio de recidencia </th>
            <th style="width:40mm">correo electrónico </th>
            <th style="width:30mm">Teléfonos </th>
            
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
            echo "<td style=\"width:20mm;\">$row[sexo]</td>";
            echo "<td style=\"width:40mm;\">$row[nombre]</td>";
            
           
            echo "<td style=\"width:40mm;\">$row[muni]</td>";
            echo "<td style=\"width:40mm;\">$row[cor_pri]</td>";
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
            header("Content-Disposition: attachment; filename=listadosexo.doc;");
            echo $html;
 
        } else if ($formato == "xls") {
            header("Content-Type: application/download");
            header("Content-Disposition: attachment; filename=listadosexo.xls;");
            echo $html;
        } else if($formato=="pdf") {
            require_once("php/tcpdf/tcpdf.php");
            require_once("php/reporte.php");
            //Iniciar la clase PDF

            //Orientación del papel (P=Verticial, L=Horizontal)
            //


            $titulo="<div style=\"text-align:center\"> 
            <b>Listado por sexo</b>
            <br/> 
            </div>";

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

            //Tipo y tamaño de letra
            $pdf->SetFont('times', '', 10);

            //Agregar una pagina
            $pdf->AddPage();

            //Poner el contenido HTML generado dentro del archivo PDF
            $pdf->writeHTML($html, true, false, true, false, '');

            //Generar el archivo PDF y mostrarlo en el navegador
            $pdf->Output('listadosexo.pdf', 'I');

        }


?>