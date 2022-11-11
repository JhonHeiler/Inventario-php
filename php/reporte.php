<?php
class REPORTE extends TCPDF {

    //Page header
    public function Header() {
        // Logo
        global $titulo;
        
       $this->Image("img/x2.png", 10, 5, 50);
        
        // Set font
        //$this->SetFont('helvetica', 'B', 20);
        // Title
        $this->SetY(5); 

         $this->writeHTML($titulo, true, false, true, false, '');
        }

    // Page footer
    public function Footer() {
        // Position at 15 mm from bottom
        //$this->SetY(-15);
        // Set font
        $this->SetFont('helvetica', 'I', 8);
        // Page number
         $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
    }
}

?>