<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inspector extends CI_Controller {

    private $solicitudes;
    private $expe;
    private $razonSocial;
    private $ubicacion;
    private $representante;
    private $titular;
    private $fechaSolicitud;
    private $fechaInspeccion;
    private $depositoo;
    private $fechaDepo;
    private $unidad;
    private $nSolici; 
    private $inspector;
    private $nInsignia;

	
    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->layout->setLayout('Inspec');
        $this->layout->setTitle("Inspector");
        $this->session_id = $this->session->userdata('login');
        
    }
    
	public function index()
	{
		if(!empty($this->session_id))
        {   
             $solicitudes = $this->Model_Inspector->getSolicitudes($this->session_id);
                   
             $this->layout->view('index', compact('solicitudes'));           
        }else
        {
            redirect(base_url().'index/login',  301);
        }
        
	}

    public function registrar()
    {
        if(!empty($this->session_id))
        {   
            $solicitudes = $this->Model_Inspector->getSolicitudes($this->session_id);
            $expe = $this->Model_Inspector->getExpedientesAsignados($this->session_id);
            
            //retornamos la vista y le pasamos los datos a la misma
            $this->layout->view('registrar', compact('solicitudes', 'expe'));
            

           

             //validamos si nos enviaron algo por el formulario mediante el metodo POST
            if($this->input->post())
            {

                //Ahora cargamos los datos en un array para pasarlo a la funcion asignarInspector
                    
                    $bitacora = array
                    (
                        'accion' => 'Registro de Resultado de la Inspeccion',
                        'usuario' => $this->session_id,
                        'fecha' => date("y/m/d")

                    );

                     $this->Model_Clientes->bitacora($bitacora);  
                          
                    $data = array 
                        (
                            'nExpediente' => ' ',
                            'razonSocial' => $this->input->post('razon', true),
                            'ubicacion' => $this->input->post('ubicado', true),
                            'representante' => $this->input->post('representante', true),
                            'titular' => $this->input->post('titular', true),
                            'fechaInspeccion' => $this->input->post('fechaInspe', true),
                            'inspector' => $this->input->post('inspector', true),
                            'nInsignia' => $this->input->post('nInsignia', true)
                            
                        );

                    //Ahora le mandamos a ejecutar la funcion conectandonos con el modelo
                    $resultado = $this->Model_Inspector->registrarResultado($data);

                        if($resultado)
                        {
                            $this->expe = $this->input->post('expediente', true);
                            $this->razonSocial = $this->input->post('razon', true);
                            $this->ubicacion = $this->input->post('ubicado', true);
                            $this->representante = $this->input->post('representante', true);
                            $this->titular = $this->input->post('titular', true);
                            $this->fechaSolicitud = $this->input->post('fechaSoli', true);
                            $this->fechaInspeccion = $this->input->post('fechaInspe', true);
                            $this->depositoo = $this->input->post('depositoo', true);
                            $this->fechaDepo = $this->input->post('fechaDepo', true);
                            $this->unidad = $this->input->post('unidad', true);
                            $this->nSolici = $this->input->post('nSolici', true);
                            $this->inspector = $this->input->post('inspector', true);
                            $this->nInsignia = $this->input->post('nInsignia', true);

                            $this->prueba();

                        } else {
                            $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Intentelo nuevamente por favor.');
                            redirect(base_url().'inspector/registrar', 301);
                        }

                        exit;


            }
            

        }else
        {
            redirect(base_url().'index/login',  301);
        }
        

    }

    public function logout()
    {
         $this->session->unset_userdata(array ('login' => ''));
         $this->session->sess_destroy("bobm");
         redirect(base_url().'index/login', 301);
    }

    public function prueba()
    {

    // Instanciation of inherited class
    $pdf = new FPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',8);
    $pdf->Image('public/images/logo_bomber2.jpg',175,5, 20);
    $pdf->Image('public/images/Logo-Gober.jpg',20,10, 30);

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
        $pdf->Cell(50,1, utf8_decode('Razón Social:   '.$this->razonSocial), 0,1);
        $pdf->Cell(19,1, utf8_decode(''), 0);
        $pdf->Cell(50,1, utf8_decode('_____________________________________________________________________________________________________________ '), 0);
        $pdf->Ln(5);

        $pdf->Cell(50,1, utf8_decode('Ubicada en:   '. $this->ubicacion), 0,1);
        $pdf->Cell(17,1, utf8_decode(''), 0);
        $pdf->Cell(50,1, utf8_decode('_____________________________________________________________________________________________ Representada por el '), 0);
        $pdf->Ln(5);

        $pdf->Cell(50,1, utf8_decode('Ciudadano (a):   '. $this->representante), 0,1);
        $pdf->Cell(20,1, utf8_decode('                                                                                                                                                    '.$this->titular . '                                                                '. $this->fechaSolicitud ), 0);
        $pdf->Cell(50,1, utf8_decode('________________________________ titular de la cedula de identidad, ____________________ de Fecha de solicitud __________ '), 0);
        $pdf->Ln(6);

        $pdf->Cell(50,1, utf8_decode('Fecha de Inspección:     '. $this->fechaInspeccion), 0,1);
        $pdf->Cell(29,1, utf8_decode(''), 0);
        $pdf->Cell(50,1, utf8_decode('_______________, consignó ante la División de Prevención e Investigación de Siniestros del Instituto Autónomo de '), 0);
        $pdf->Ln(6);

        $pdf->Cell(50,1, utf8_decode('de Bomberos del Estado Miranda, la documentación requerida para el otorgamiento del CERTIFICADO DE PREVENCIÓN Y CONTROL INCENDIO. '), 0);
        $pdf->Ln(6);

        $pdf->Cell(50,1, utf8_decode('Deposito Nº:     '.$this->depositoo), 0,1);
        $pdf->Cell(20,1, utf8_decode('                                           '.$this->fechaDepo . '                                                                                                                                                                                '.$this->unidad), 0);
        $pdf->Cell(50,1, utf8_decode('________________________________ Fecha Depósito, _______________________________ Unidades Tributarias ______________ '), 0);
        $pdf->Ln(6);

        $pdf->Cell(95,1, utf8_decode('Expediente Nº:     '. $this->expe), 0);
        $pdf->Cell(95,1, utf8_decode('Solicitud Nº:     '.$this->nSolici), 0,1);
        $pdf->Cell(21,1, utf8_decode(''), 0);
        $pdf->Cell(50,1, utf8_decode('_____________________________________________                            ___________________________________________________ '), 0);
        $pdf->Ln(6);

        $pdf->Cell(95,1, utf8_decode('Inspección realizada por:    '. $this->inspector), 0);
        $pdf->Cell(95,1, utf8_decode('Insignia Nº:     '. $this->nInsignia), 0,1);
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
    }

	 public function perfil()
    {
        $data = $this->Model_Clientes->getNumSolicitud();
        $datoss = $this->Model_Clientes->datosPerfil($this->session_id);
		$solicitudes = $this->Model_Inspector->getSolicitudes($this->session_id);
        $expe = $this->Model_Inspector->getExpedientesAsignados($this->session_id);
        $this->layout->view('perfil', compact('data', 'datoss', 'expe', 'solicitudes'));

    }
    
    

    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */