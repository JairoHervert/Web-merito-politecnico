<?php
    require '../inc/session_start.php';
    require "../php/main.php";
    $data_user = conexion();
    $data_user = $data_user->query("SELECT * FROM vista_usuarios WHERE usuario_curp = '{$_SESSION['curp']}'");  // esta vista la hice pa facilitar ciertas cosas
    $data_user = $data_user->fetch();

    // datos a utilizar
    $user_id = $data_user['usuario_id'];
    $user_curp = $data_user['usuario_curp'];
    $user_nombre = $data_user['usuario_nombre'];
    $user_numero = $data_user['usuario_numero'];
    $user_instituto = $data_user['institucion_nombre'];
    $user_categoria = $data_user['categoria_nombre'];
    $user_presea = $data_user['presea_nombre'];
    $user_asistencia = $data_user['usuario_asistencia'];
    $user_implemento = $data_user['usuario_implemento'];
    $user_invitado = $data_user['invitado_nombre'];
    $user_invitado_implemento = $data_user['invitado_implemento'];

    header('Content-Type: text/html; charset=utf-8');

    //$utf8 = mb_convert_encoding("\xa5\xa7\xb5", 'UTF-8', 'ISO-8859-2');
    //$iso88592 = mb_convert_encoding($utf8, 'ISO-8859-2', 'UTF-8');


    require('alphapdf.php');
    require 'cn.php';
    $consulta = "SELECT * FROM usuario";
    $resultado = $mysqli->query($consulta);


    $pdf = new ALPHAPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage('PORTRAIT');


    // Logo
    $pdf->Image('../img/header.jpg',0,0,210);
    $pdf->Image('../img/footer.png',0,230,210);
    $pdf->SetFillColor(0,255,0);
    $pdf->Image('../img/ganador2.jpg',0,63,210);
    $pdf->SetAlpha(1);
    // Arial bold 15
    $pdf->SetFont('Arial','B',35);
    // Title
    $bienvenida = iconv('UTF-8', 'windows-1252', '¡Felicidades!');
    $pdf->Cell(190, 70, $bienvenida, 0, 0, 'C', 0);
    // Arial bold 15
    $pdf->SetFont('Arial','B',22);
    $pdf->Ln(17);
    $bienvenida = iconv('UTF-8', 'windows-1252', "$user_nombre");
    $pdf->Cell(190, 70, $bienvenida, 0, 1, 'C', 0);
    // Arial bold 15
    $pdf->SetFont('Arial','',12);

    // 
    $pdf->SetXY(10,203);
    $invitacion = iconv('UTF-8', 'windows-1252', 'El Instituto Politecnico Nacional se enorgullese de invitarlo a la ceremonia para celebrar las');
    $pdf->Cell(0,0, $invitacion, 0, 0, 'C', 0);
    $pdf->Ln(8);
    $invitacion = iconv('UTF-8', 'windows-1252', 'Distinciones al Mérito Politécnico 2024 se llevará a cabo el 22 de enero del 2024 en el Centro');
    $pdf->Cell(0,0, $invitacion, 0, 0, 'C', 0);
    $pdf->Ln(8);
    $invitacion = iconv('UTF-8', 'windows-1252', 'Cultural Jaime Torres Bodet , en un horario de las 11:00a.m. a 2:00p.m. Estamos emocionados');
    $pdf->Cell(0,0, $invitacion, 0, 0, 'C', 0);
    $pdf->Ln(8);
    $invitacion = iconv('UTF-8', 'windows-1252', ' de compartir este este espacio emblemático para reconocer y honrar a individuos destacados.');
    $pdf->Cell(0,0, $invitacion, 0, 0, 'C', 0);
    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',15);
    $invitacion = iconv('UTF-8', 'windows-1252', "$user_curp");
    $pdf->Cell(0,0, $invitacion, 0, 0, 'C', 0);



    if($user_implemento == 'Silla de ruedas'){
        $pdf->Image('../img/discapacidad.png',17,237,30);
    }
    else if($user_implemento == 'Muletas'){
        $pdf->Image('../img/muletas.png',17,237,30);
    }
    else if($user_implemento == 'Bastón'){
        $pdf->Image('../img/baston.png',17,237,30);
    }
    else if($user_implemento == 'Andador'){
        $pdf->Image('../img/andador.png',17,237,30);
    }
    else if($user_implemento == 'Ortesis'){
        $pdf->Image('../img/ortesis.png',17,237,30);
    }
    else if($user_implemento == 'Ayudas para la audición'){
        $pdf->Image('../img/sordera.png',17,235,35);
    }
    else if($user_implemento == 'Gafas y lentes especiales'){
        $pdf->Image('../img/gafas.png',17,230,45);
    }
    else if($user_implemento == 'Dispositivos de comunicación alternativa'){
        $pdf->Image('../img/comunicacion.png',17,235,35);
    }

    if($user_invitado != NULL){
        $pdf->AddPage('PORTRAIT');


        // Logo
        $pdf->Image('../img/header.jpg',0,0,210);
        $pdf->Image('../img/footer.png',0,230,210);
        $pdf->SetFillColor(0,255,0);
        $pdf->Image('../img/ganador1.jpg',0,63,210);
        $pdf->SetAlpha(1);
        // Arial bold 15
        $pdf->SetFont('Arial','B',35);
        // Title
        $bienvenida = iconv('UTF-8', 'windows-1252', '¡Acompañante!');
        $pdf->Cell(190, 70, $bienvenida, 0, 0, 'C', 0);
        // Arial bold 15
        $pdf->SetFont('Arial','B',22);
        $pdf->Ln(17);
        $bienvenida = iconv('UTF-8', 'windows-1252', "$user_invitado");
        $pdf->Cell(190, 70, $bienvenida, 0, 1, 'C', 0);
        // Arial bold 15
        $pdf->SetFont('Arial','',12);

        // 
        $pdf->SetXY(10,201);
        $invitacion = iconv('UTF-8', 'windows-1252', 'El Instituto Politecnico Nacional se enorgullese de invitarlo a la ceremonia para celebrar las');
        $pdf->Cell(0,0, $invitacion, 0, 0, 'C', 0);
        $pdf->Ln(8);
        $invitacion = iconv('UTF-8', 'windows-1252', 'Distinciones al Mérito Politécnico 2024 se llevará a cabo el 22 de enero del 2024 en el Centro');
        $pdf->Cell(0,0, $invitacion, 0, 0, 'C', 0);
        $pdf->Ln(8);
        $invitacion = iconv('UTF-8', 'windows-1252', 'Cultural Jaime Torres Bodet , en un horario de las 11:00a.m. a 2:00p.m. Estamos emocionados');
        $pdf->Cell(0,0, $invitacion, 0, 0, 'C', 0);
        $pdf->Ln(8);
        $invitacion = iconv('UTF-8', 'windows-1252', ' de compartir este este espacio emblemático para reconocer y honrar a individuos destacados.');
        $pdf->Cell(0,0, $invitacion, 0, 0, 'C', 0);
        $pdf->Ln(12);

        if($user_invitado_implemento == 'Silla de ruedas'){
            $pdf->Image('../img/discapacidad.png',17,237,30);
        }
        else if($user_invitado_implemento == 'Muletas'){
            $pdf->Image('../img/muletas.png',17,237,30);
        }
        else if($user_invitado_implemento == 'Bastón'){
            $pdf->Image('../img/baston.png',17,237,30);
        }
        else if($user_invitado_implemento == 'Andador'){
            $pdf->Image('../img/andador.png',17,237,30);
        }
        else if($user_invitado_implemento == 'Ortesis'){
            $pdf->Image('../img/ortesis.png',17,237,30);
        }
        else if($user_invitado_implemento == 'Ayudas para la audición'){
            $pdf->Image('../img/sordera.png',17,235,35);
        }
        else if($user_invitado_implemento == 'Gafas y lentes especiales'){
            $pdf->Image('../img/gafas.png',17,230,45);
        }
        else if($user_invitado_implemento == 'Dispositivos de comunicación alternativa'){
            $pdf->Image('../img/comunicacion.png',17,235,35);
        }
        else{

        }
    }

    $pdf->Output();
?>