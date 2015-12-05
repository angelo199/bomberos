<?php
require('../fpdf.php');

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
		$pdf->Image('Logo-Gober.jpg',20,8,33);
	   	$pdf->Image('logo_bomber2.jpg',175,5,17);
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
	    $pdf->Ln(4);

/*==============================CABECERA DEL REPORTE =============================== */

/*=================================DATOS DEL REPORTE ================================ */
		$pdf->Cell(50,16, 'Oficina: ____________________ ', 0);
	    $pdf->Cell(105,10, utf8_decode('CONSTANCIA DE CUMPLIMIENTO DE INSPECCIÓN PERMISO PROVISIONAL '), 1);
	  
	   	$pdf->Ln(4);
		$pdf->Cell(160,8, ' ', 0);
	   	$pdf->Cell(50,8, utf8_decode('Nº: ________________ '), 0);
	    $pdf->Ln(10);
	   	
	   	$pdf->Cell(1,9, utf8_decode('Se hace constar que inspectores de esta institución efectuaron una evaluacion de las condiciones de prevención y extinción de incendio en la') , 0, 1);
	   	$pdf->Cell(50,1, utf8_decode('Razón Social: '), 0,1);
	   	$pdf->Cell(19,1, utf8_decode(''), 0);
	   	$pdf->Cell(50,1, utf8_decode('_____________________________________________________________________________________________________________ '), 0);
	   	$pdf->Ln(5);

	   	$pdf->Cell(50,1, utf8_decode('Ubicada en: '), 0,1);
	   	$pdf->Cell(17,1, utf8_decode(''), 0);
	   	$pdf->Cell(50,1, utf8_decode('_____________________________________________________________________________________________ Representada por el '), 0);
	   	$pdf->Ln(5);

	   	$pdf->Cell(50,1, utf8_decode('Ciudadano (a): '), 0,1);
	   	$pdf->Cell(20,1, utf8_decode(''), 0);
	   	$pdf->Cell(50,1, utf8_decode('________________________________ titular de la cedula de identidad, _______________________ de Fecha de solicitud _______ '), 0);
	   	$pdf->Ln(6);

	   	$pdf->Cell(50,1, utf8_decode('Fecha de Inspección: '), 0,1);
	   	$pdf->Cell(29,1, utf8_decode(''), 0);
	   	$pdf->Cell(50,1, utf8_decode('_______________, consignó ante la División de Prevención e Investigación de Siniestros del Instituto Autónomo de '), 0);
	   	$pdf->Ln(6);

	   	$pdf->Cell(50,1, utf8_decode('de Bomberos del Estado Miranda, la documentación requerida para el otorgamiento del CERTIFICADO DE PREVENCIÓN Y CONTROL INCENDIO. '), 0);
	   	$pdf->Ln(6);

	   	$pdf->Cell(50,1, utf8_decode('Deposito Nº: '), 0,1);
	   	$pdf->Cell(20,1, utf8_decode(''), 0);
	   	$pdf->Cell(50,1, utf8_decode('________________________________ Fecha Depósito, _______________________________ Unidades Tributarias ______________ '), 0);
	   	$pdf->Ln(6);

	   	$pdf->Cell(95,1, utf8_decode('Expediente Nº: '), 0);
	   	$pdf->Cell(95,1, utf8_decode('Solicitud Nº:  '), 0,1);
	   	$pdf->Cell(21,1, utf8_decode(''), 0);
	   	$pdf->Cell(50,1, utf8_decode('_____________________________________________                            ___________________________________________________ '), 0);
	   	$pdf->Ln(6);

	   	$pdf->Cell(95,1, utf8_decode('Inspección realizada por: '), 0);
	   	$pdf->Cell(95,1, utf8_decode('Insignia Nº:  '), 0,1);
	   	$pdf->Cell(35,1, utf8_decode(''), 0);
	   	$pdf->Cell(50,1, utf8_decode('____________________________________                            ___________________________________________________ '), 0);
	   	$pdf->Ln(20);

	   	$pdf->Cell(73,1, utf8_decode(''), 0);
	   	$pdf->Cell(95,6, utf8_decode('______________________________________ '), 0,1);
	   	$pdf->Cell(90,1, utf8_decode(''), 0);
	  	$pdf->Cell(95,1, utf8_decode('JEFE DE OFICINA '), 0);
	  	$pdf->Ln(16);

	  	$pdf->Cell(63,16, 'SELLO RELIEVE ', 0);
	    $pdf->Cell(80,10, utf8_decode('FORMATO PARA TRAMITACION SOLO EN ORIGINAL '), 1, 0, 'C');
	  	$pdf->Ln(4);
	   
		$pdf->Cell(165,8, ' ', 0);
	   	$pdf->Cell(50,8, utf8_decode('SELLO HUMEDO '), 0);
	   	$pdf->Ln(14);

	   	$pdf->Cell(84,8, ' ', 0);
	   	$pdf->Cell(50,8, utf8_decode('LEY CONTRA LA CORRUPCIÓN '), 0);
	   	$pdf->Ln(14);

	   	$pdf->SetFont('Arial','B',7);


	   	$pdf->Cell(50,4, utf8_decode('ARTICULO 60: El funcionario público que abusando de sus funciones, constriña o induzca a alguien a que dé o prometa, para sí o para otro, una suma de dinero  '), 0,1);
	    $pdf->Cell(50,4, utf8_decode('o cualquier otra ganancia o dádiva indebida, será penado con prision de dos(2) a seis (6) años y multa dehasta el ciencuetna por ciento (50%) del valor de la cosa '), 0,1);
	    $pdf->Cell(50,4, utf8_decode('dada o prometida. '), 0,1);
	    $pdf->Ln(6);

	    $pdf->Cell(50,4, utf8_decode('ARTICULO 61: El funcionario público que por algún acto de sus funciones reciba para sí mismo o para otro, retribuciones u otra utilidad que no se le deban o cuya'), 0,1);
	    $pdf->Cell(50,4, utf8_decode('promesa acepte, será penado con prisión de uno (1) a cuatro (4) años y multa de hasta el cincuenta por ciento (50%) de lo recibido o prometido. Con la misma pena '), 0,1);
	    $pdf->Cell(50,4, utf8_decode('será castigado quien diere o prometiere el dinero, retribuciones u otra utilidad indicados en este artículo. '), 0,1);
	    $pdf->Ln(6);

	    $pdf->Cell(50,4, utf8_decode('CUERPO DE BOMBEROS DEL ESTADO MIRANDA: Final Avenidad Víctor Baptista, frente al Núcleo de la Universidad Simón Rodríguez, Telf. Nº 3225265, 3229814'), 0,1);
	    $pdf->Cell(50,4, utf8_decode('CHARALLAVE - 0239-2491020 - GUARENAS - 0212-3699092, SAN ANTONIO - 0212-3721959-3722589 HIGUEROTE - 0234-3204220, RIO CHICO 0234-721866.'), 0,1);
	    $pdf->Cell(50,4, utf8_decode('será castigado quien diere o prometiere el dinero, retribuciones u otra utilidad indicados en este artículo. '), 0,1);
	    $pdf->Ln(6);


	   	
	   	




/*=================================DATOS DEL REPORTE ================================ */


	$pdf->Output();

	?>
		 