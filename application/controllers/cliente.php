<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Controller {

    private $exp;
    private $soli;
    private $ope;
    private $depo;
    private $fDepo;
    private $fsoli;
    private $inmueble;
    private $dire;
    private $muni;
    private $parro;
    private $idUser;
    private $cargo;
    private $objeto;
    private $fecha;

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
        $this->layout->setTitle("Cliente");
        $this->layout->setLayout('Client');
        $this->session_id = $this->session->userdata('login');
        
    }
    
	public function index()
	{
		if(!empty($this->session_id))
        {   
             $this->layout->view('index');           
        }else
        {
            redirect(base_url().'index/login',  301);
        }
        
	}

    public function solicitud()
    {
        if(!empty($this->session_id))
        {   
            $nSoli = $this->Model_Clientes->getNumSolicitud();
            $nExpe = $this->Model_Clientes->getNumExpediente();
            $nOpe = $this->Model_Clientes->getNumOperativo();

            $num = $nExpe->Expedientes + 1;
            $nO = $nOpe->Operativo + 1;
            $nSol = $nSoli->Solicitud + 1;

             $nExpediente = $num;
             $nOperativo = $nO;
             $nSolicitud = $nSol;

          
        //validamos si nos enviaron algo por el formulario mediante el metodo POST
        if($this->input->post())
        {

            //validamos que hallan escrito bien los campos
                $bitacora = array
                    (
                        'accion' => 'Solicitud',
                        'usuario' => $this->session_id,
                        'fecha' => date("y/m/d")

                    );

                     $this->Model_Clientes->bitacora($bitacora);

                $data = array 
                    (
                        'nSolicitud' => '',
                        'nExpediente' => $num,
                        'nOperativo' => $nO,
                        'fechaSolicitud' => date("y/m/d"),
                        'idUsuario' => $this->session_id

                    );

                    $this->exp = $num;
                    $this->soli = $nSol;
                    $this->fecha = date("y/m/d");
                    $this->ope = $nO;

                    $this->depo = $this->input->post('nDeposito', true);
                    $this->fDepo = $this->input->post('fechaDeposito', true);
                    $this->fsoli = date("y/m/d");
                    $this->inmueble = $this->input->post('inmueble', true);
                    $this->dire = $this->input->post('direccion', true);
                    $this->muni = $this->input->post('municipio', true);
                    $this->parro = $this->input->post('municipio', true);
                    $this->idUser = $this->session_id;
                    $this->cargo = $this->input->post('cargo', true);
                    $this->objeto = $this->input->post('objetoRazon', true);

                $data2 = array
                    (
                        'nExpediente' => $num,
                        'inmueble' => $this->input->post('inmueble', true),
                        'direccion' => $this->input->post('direccion', true),
                        'municipio' => $this->input->post('municipio', true),
                        'parroquia' => $this->input->post('parroquia', true),
                        'cargo' => $this->input->post('cargo', true),
                        'objetoRazon' => $this->input->post('objetoRazon', true),
                        'deposito' => $this->input->post('nDeposito', true),
                        'fechaDeposito' => $this->input->post('fechaDeposito', true)

                    );

                     //Ahora le mandamos a ejecutar la funcion conectandonos con el modelo
                    $resultado = $this->Model_Clientes->registrarSolicitud($data, $data2);

                        if($resultado)
                        {
                           
                            $this->pdf();

                        } else {
                            $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Intentelo nuevamente por favor.');
                            redirect(base_url().'cliente', 301);
                        }

                        exit;
 
            }
            
                $id=$this->input->post("id",true);
                $datos=$this->Model_Clientes->getsolicitud($id);
                $this->layout->view('solicitud', compact('num', 'nO', 'nSol'));
        } else
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

    public function pdf()
    {

    $pdf = new FPDF();
    $pdf->AliasNbPages();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',8);
    $pdf->Image('public/images/logo_bomber2.jpg',170,15, 20);
    $pdf->Image('public/images/Logo-Gober.jpg',20,20, 30);

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
        $pdf->Cell(30,8, 'EXP N: '. $this->exp  , 1);
        $pdf->Cell(30,8, 'FECHA: ' . $this->fecha, 1);
        $pdf->Cell(50,8, 'REG. OPERATIVO N: '. $this->ope , 1);
        $pdf->Cell(40,8, 'SOLICITUD N: '. $this->soli, 1);
        $pdf->Cell(40,8, 'DEPOSITO N: '. $this->depo, 1);
        $pdf->Ln(8);
        $pdf->Cell(60,8, 'FECHA DEPOSITO: '. $this->fDepo, 1);
        $pdf->Cell(130,8, 'NOMBRE DEL INMUEBLE O RAZON SOCIAL: '. $this->inmueble , 1);
        $pdf->Ln(8);
        $pdf->Cell(190,8, 'DIRECCION: '. $this->dire, 1);
        $pdf->Ln(8);
        $pdf->Cell(95,8, 'MUNICIPIO: '.  $this->muni, 1);
        $pdf->Cell(95,8, 'PARROQUIA: '.  $this->parro, 1);
        $pdf->Ln(8);
        $pdf->Cell(90,8, 'PERSONA SOLICITANTE: '. $this->idUser , 1);
        $pdf->Cell(40,8, 'C.I: ', 1);
      
        $pdf->Cell(60,8, 'CARGO: '. $this->cargo , 1);
        $pdf->Ln(8);
        $pdf->Cell(60,8, 'TELEFONO: ', 1);
        $pdf->Cell(130,8, 'RAMO U OBJETO DE LA RAZON SOCIAL: '. $this->objeto, 1);
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
    }
        
  
	 public function perfil()
    {

        $data = $this->Model_Clientes->getNumSolicitud();
        $datoss = $this->Model_Clientes->datosPerfil($this->session_id);

        $this->layout->view('perfil', compact('data', 'datoss'));

    }
    

    
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */