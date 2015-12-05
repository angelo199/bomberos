<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admi extends CI_Controller {

	
    public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('Admi');
        $this->layout->setTitle("Administrador");
        $this->session_id = $this->session->userdata('login');
        
    }
    
	public function index()
	{
		if(!empty($this->session_id))
        {   
             $data = $this->Model_Clientes->getNumSolicitud();
             $this->layout->view('index', compact('data'));           
        } else
        {
            redirect(base_url().'index/login',  301);
        }
        
	}

    public function add()
    {
    	if(!empty($this->session_id))
        {   
        //validamos si nos enviaron algo por el formulario mediante el metodo POST
        if($this->input->post())
        {

            //validamos que hallan escrito bien los campos

            
            if ($this->form_validation->run('formulario/add'))
                {
                //Ahora cargamos los datos en un array para pasarlo a la funcion insertarUsuario
                $clave = sha1($this->input->post("clave", true));

                $bitacora = array
                    (
                        'accion' => 'Registro de nuevo Usuario',
                        'usuario' => $this->session_id,
                        'fecha' => date("y/m/d")

                    );

                $data = array
                    (
                        'tipoUsuario' => $this->input->post('tipoUsuario', true),
                        'idUsuario' => $this->input->post('usuario', true),
                        'clave' => $clave
                    );

                $data2 = array
                    (
                        'tipoUsuario' => $this->input->post('tipoUsuario', true),
                        'idUsuario' => $this->input->post('usuario', true),
                        'nom_user' => $this->input->post('nombres', true),
                        'ape_user' => $this->input->post('apellidos', true),
                        'cedula_user' => $this->input->post('cedula', true),
                        'email_user' => $this->input->post('email', true)
                    );

                    //Ahora le mandamos a ejecutar la funcion conectandonos con el modelo
                    $resultado = $this->Model_Usuarios->insertarUsuario($data, $data2);
                    $this->Model_Clientes->bitacora($bitacora);

                        if($resultado)
                        {
                            $this->session->set_flashdata('ControllerMessage', 'Se ha insertado correctamente');
                            redirect(base_url().'cliente', 301);

                        } else {
                            $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Intentelo nuevamente por favor.');
                            redirect(base_url().'cliente', 301);
                        }

                        exit;

                }
        }   

        $data = $this->Model_Clientes->getNumSolicitud();
        $this->layout->view('add', compact('data'));

        }   else
            
            {
                redirect(base_url().'index/login',  301);
            } 
    }

    public function asignarInspector()
    {
    	if(!empty($this->session_id))
        {   
        //cargamos los inspectores y expedientes para luego pasarselos al combo box
        $datos = $this->Model_Inspector->getInspectores();
        $expe = $this->Model_Inspector->getExpedientes();
        $data = $this->Model_Clientes->getNumSolicitud();
     

        //retornamos la vista y le pasamos los datos a la misma
        $this->layout->view('asignarInspector', compact('datos', 'expe', 'data'));

        //validamos si nos enviaron algo por el formulario mediante el metodo POST
            if($this->input->post())
            {

                //validamos que hallan escrito bien los campos
                    $bitacora = array
                    (
                        'accion' => 'Asignar Inspector',
                        'usuario' => $this->session_id,
                        'fecha' => date("y/m/d")

                    );

                     $this->Model_Clientes->bitacora($bitacora);
                    
                    //Ahora cargamos los datos en un array para pasarlo a la funcion asignarInspector
                    $data = array 
                        (
                            'id' => ' ',
                            'nExpediente' => $this->input->post('expediente', true),
                            'idUsuario' => $this->input->post('inspector', true)

                        );

                    //Ahora le mandamos a ejecutar la funcion conectandonos con el modelo
                    $resultado = $this->Model_Inspector->asignarInspector($data);

                        if($resultado)
                        {
                            $this->session->set_flashdata('ControllerMessage', 'Se ha insertado correctamente');
                            redirect(base_url().'admi', 301);

                        } else {
                            $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Intentelo nuevamente por favor.');
                            redirect(base_url().'admi', 301);
                        }

                        exit;

            }

        } else
            
            {
                redirect(base_url().'index/login',  301);
            }  
    }


    public function logout()
    {
         $this->session->unset_userdata(array ('login' => ''));
         $this->session->sess_destroy("bomb");
         $this->session->sess_destroy("login");
         redirect(base_url().'index/login', 301);
    }


    public function perfil()
    {
        $data = $this->Model_Clientes->getNumSolicitud();
        $datoss = $this->Model_Clientes->datosPerfil($this->session_id);

        $this->layout->view('perfil', compact('data', 'datoss'));

    }

    public function bitacora()
    {

        $data = $this->Model_Clientes->getNumSolicitud();
        $datos = $this->Model_Usuarios->obtenerBitacora();
        

        $this->layout->view('bitacora', compact('data', 'datos'));

    }
    

    public function obtenerSolicitud()
    {
        
        $data = $this->Model_Clientes->getNumSolicitud();
        $datos = $this->Model_Clientes->getSolicitud();


        echo json_encode($datos);

         $this->layout->view('solicitudes', compact('data', 'datos'));


    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */