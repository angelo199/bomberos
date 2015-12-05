<?php
require('fpdf/fpdf.php');


	//VARIABLES QUE RECIBE EL REPROTE


   //Cabecera de página
	   
	class PDF extends FPDF
	{
	// Page header
		function Header()
		{
		    // Logo
		 
		    // Arial bold 15
		    $this->SetFont('Arial','B',15);
		    // Move to the right
		    $this->Cell(80);
		    // Title
		    $this->Cell(30,10,'',0,0,'C');
		    // Line break
		    $this->Ln(1);
		}

		// Page footer
		function Footer()
		{
		    // Position at 1.5 cm from bottom
		    $this->SetY(-15);
		    // Arial italic 8
		    $this->SetFont('Arial','I',8);
		    // Page number
		    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');

		}
	}

	// Instanciation of inherited class
	$pdf = new FPDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',8);

/*==============================CABECERA DEL REPORTE =============================== */

		$pdf->Cell(70,20);
	    $pdf->Cell(0,2,'REPUBLICA BOLIVARIANA DE VENEZUELA ',0,1);
	    $pdf->Ln(2);
	    $pdf->Cell(63,2);
	    $pdf->Cell(0,2,'GOBIERNO DEL ESTADO BOLIVARIANO DE MIRANDA ',0,1);
	    $pdf->Cell(89,2);
	    $pdf->Cell(0,5,'COMANDANCIA ',0,1);
	    $pdf->Cell(81,0);
	    $pdf->Cell(0,2,'DIVISION DE PREVENCION E ',0,1);
	    $pdf->Cell(78,0);
	    $pdf->Cell(0,4,'INVESTIGACION DE SINIESTROS ',0,1);
	    $pdf->Cell(87,0);
	    $pdf->Cell(0,4,'RIF. G-20002177-2 ',0,1);
	    $pdf->Cell(67,0);
	    $pdf->Cell(0,4,'SOLICITUD DE CERTIFICACION DE PREVENCION  ',0,1);
	    $pdf->Cell(81,0);
	    $pdf->Cell(0,6,'Y CONTROL DE INCENDIO  ',0,1);
	    $pdf->Cell(60,2);

/*==============================CABECERA DEL REPORTE =============================== */

/*=================================DATOS DEL REPORTE ================================ */
		
	    $pdf->Cell(80,8,'FORMATO PARA TRAMITACION SOLO EN GENERAL  ',1,1, 'C');
	   	$pdf->Ln(8);
	    $pdf->Cell(30,8, 'EXP N: '. $_GET['exp'] , 1);
	    $pdf->Cell(30,8, 'FECHA:' . $_GET['fsoli'], 1);
	    $pdf->Cell(50,8, 'REG. OPERATIVO N: '. $_GET['nO'] , 1);
	    $pdf->Cell(40,8, 'SOLICITUD N: '. $_GET['nSoli'], 1);
	    $pdf->Cell(40,8, 'DEPOSITO N: '. $_GET['depo'], 1);
	    $pdf->Ln(8);
	    $pdf->Cell(60,8, 'FECHA DEPOSITO: '. $_GET['fdepo'], 1);
	    $pdf->Cell(130,8, 'NOMBRE DEL INMUEBLE O RAZON SOCIAL: '. $_GET['inmueble'], 1);
	    $pdf->Ln(8);
	    $pdf->Cell(190,8, 'DIRECCION: '. $_GET['direc'], 1);
	    $pdf->Ln(8);
	    $pdf->Cell(95,8, 'MUNICIPIO: '. $_GET['muni'], 1);
	    $pdf->Cell(95,8, 'PARROQUIA: '. $_GET['parro'], 1);
	    $pdf->Ln(8);
	    $pdf->Cell(90,8, 'PERSONA SOLICITANTE: '. $_GET['idUser'], 1);
	    $pdf->Cell(40,8, 'C.I: ', 1);
	  
	    $pdf->Cell(60,8, 'CARGO: '. $_GET['idUser'], 1);
	    $pdf->Ln(8);
	    $pdf->Cell(60,8, 'TELEFONO: ', 1);
	    $pdf->Cell(130,8, 'RAMO U OBJETO DE LA RAZON SOCIAL: '. $_GET['objeto'], 1);
	    $pdf->Ln(6);
	    $pdf->Cell(190,8, '________________________________________________________________________________________________________________________ ', 0);
	 	$pdf->Ln(7);
	 	$pdf->Cell(190,8, 'RECAUDOS CONSIGNADOS:', 0, 'C');
	 	$pdf->Ln(7);
	 	$pdf->Cell(24,8, 'T. PROPIEDAD:', 0, 'C');
	    $pdf->Cell(8,7, '    ', 1);
	    $pdf->Cell(33,8, 'C. ARRENDAMIENTO:', 0, 'C');
	    $pdf->Cell(8,7, '    ', 1);
	    $pdf->Cell(23,8, 'C. IDENTIDAD:', 0, 'C');
	    $pdf->Cell(8,7, '    ', 1);
	    $pdf->Cell(30,8, 'CONST. DEPOSITO:', 0, 'C');
	    $pdf->Cell(8,7, '    ', 1);
	    $pdf->Cell(23,8, 'N CATASTRO:', 0, 'C');
	    $pdf->Cell(8,7, '    ', 1);
	    $pdf->Ln(9);
	    $pdf->Cell(14,8, 'PLANO:', 0, 'C');
	    $pdf->Cell(8,7, '    ', 1);
	    $pdf->Cell(30,8, 'N CERT ANTERIOR:', 0, 'C');
	    $pdf->Cell(40,7, '    ', 1);
	    $pdf->Cell(43,8, 'AUTORIZACION COLEGIADA:', 0, 'C');
	    $pdf->Cell(8,7, '    ', 1);
	    $pdf->Cell(14,8, 'OTROS:', 0, 'C');
	    $pdf->Cell(8,7, '    ', 1);
	    $pdf->Ln(8);
	    $pdf->Cell(26,8, 'OBSERVACIONES:', 0, 'C');
	    $pdf->Cell(14,8, '________________________________________________________________________________________________________', 0, 'C');
	    $pdf->Ln(8);
	    $pdf->Cell(24,8, 'RECIBIDO POR:', 0, 'C');
	    $pdf->Cell(38,8, '_______________________', 0, 'C');
	    $pdf->Cell(18,8, 'INSIGNIA N:', 0, 'C');
	    $pdf->Cell(38,8, '_______________________', 0, 'C');
	    $pdf->Cell(37,8, 'FIRMA DEL SOLICITANTE:', 0, 'C');
	    $pdf->Cell(38,8, '______________________', 0, 'C');

/*=================================DATOS DEL REPORTE ================================ */


	$pdf->Output();

	?>
		 