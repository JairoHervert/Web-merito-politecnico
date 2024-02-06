<?php
    header('Content-Type: text/html; charset=utf-8');

    //$utf8 = mb_convert_encoding("\xa5\xa7\xb5", 'UTF-8', 'ISO-8859-2');
    //$iso88592 = mb_convert_encoding($utf8, 'ISO-8859-2', 'UTF-8');

    require('fpdf.php');

    class PDF extends FPDF
    {
        // Page header
        function Header()
        {
            // Logo
            $this->Image('../img/EducacionIPN.png',10,5,100);
            // Arial bold 15
            $this->SetFont('Arial','B',18);
            // Move to the right
            $this->Cell(50);
            // Title
            $this->Cell(200,10,'REPORTE',0,0,'C');
            // Logo
            $this->Image('../img/gobmxlogo.png',253,11,30);
            // Line break
            $this->Ln(20);

            $this->SetFont('Arial','B',11);

            $this->SetFillColor(144, 12, 63);
            $this->SetDrawColor(0, 0, 0);
            $this->SetTextColor(255, 255, 255, 1);

            $this->Cell(47, 10, 'CURP', 1, 0, 'C', 1);
            $this->Cell(60, 10, 'Nombre', 1, 0, 'C', 1);
            $this->Cell(31, 10, 'Implemento', 1, 0, 'C', 1);
            $asis = iconv('UTF-8', 'windows-1252', 'Asistencia');
            $this->Cell(29, 10, $asis, 1, 0, 'C', 1);
            $inv = iconv('UTF-8', 'windows-1252', 'Invitado');
            $this->Cell(55, 10, $inv, 1, 0, 'C', 1);
            $this->Cell(31, 10, 'Imp. Invitado', 1, 0, 'C', 1);
            $this->Cell(24, 10, 'Rol', 1, 1, 'C', 1);
        }

        // Page footer
        function Footer()
        {
            // Position at 1.5 cm from bottom
            $this->SetY(-15);
            // Arial italic 8
            $this->SetFont('Arial','I',8);
            // Page number
            $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
        }
    }

    require 'cn.php';
    $consulta = "SELECT * FROM usuario";
    $resultado = $mysqli->query($consulta);

    $pdf = new PDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('landscape');
    $pdf->SetFont('Arial','',9);

    while($row = $resultado->fetch_assoc()){

        $curp = iconv('UTF-8', 'windows-1252', $row['usuario_curp']);
        $pdf->Cell(47, 10, $curp, 1, 0, 'C', 0);

        $nombre = iconv('UTF-8', 'windows-1252', $row['usuario_nombre']);
        $pdf->Cell(60, 10, $nombre, 1, 0, 'C', 0);


        if (is_null($row['usuario_implemento'])) {
            $pdf->Cell(31, 10, $row['usuario_implemento'], 1, 0, 'C', 0);
        } else {
            $uimp = iconv('UTF-8', 'windows-1252', $row['usuario_implemento']);
            $pdf->Cell(31, 10, $uimp, 1, 0, 'C', 0);
        }

        $pdf->Cell(29, 10, $row['usuario_asistencia'], 1, 0, 'C', 0);

        if (is_null($row['invitado_nombre'])) {
            $pdf->Cell(55, 10, $row['invitado_nombre'], 1, 0, 'C', 0);
        } else {
            $invitado = iconv('UTF-8', 'windows-1252', $row['invitado_nombre']);
            $pdf->Cell(55, 10, $invitado, 1, 0, 'C', 0);
        }

        if (is_null($row['invitado_implemento'])) {
            $pdf->Cell(31, 10, $row['invitado_implemento'], 1, 0, 'C', 0);
        } else {
            $inimp = iconv('UTF-8', 'windows-1252', $row['invitado_implemento']);
            $pdf->Cell(31, 10, $inimp, 1, 0, 'C', 0);
        }

        if (($row['fk_rol_id']) == 1) {
            $pdf->Cell(24, 10, 'Lector', 1, 1, 'C', 0);
        } else {
            $pdf->Cell(24, 10, 'Admin', 1, 1, 'C', 0);
        }

    }



    $pdf->Output();
?>