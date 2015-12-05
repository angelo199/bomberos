<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

	private $session_id;

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout('Plantilla');
        $this->session_id = $this->session->userdata('login');
    }
    
	public function index()
	{
		if(!empty($this->session_id))
		{
			$this->layout->view('index');
		} else 
		{
			redirect(base_url().'index/login', 301);
		};
	}
    
	public function login()
	{
		

		//Si recibimos variables por post
		if($this->input->post())
		{
			//llamamos a la funcion validar para ver si el usuario existe
		
			$datos = $this->Model_Usuarios->validarUsuario($this->input->post("login", true), sha1($this->input->post("pass", true)));
			if(!$datos){
				$this->session->set_flashdata('ControllerMessage', 'Usuario y/o clave inválida.');
				redirect(base_url().'index/login' , 301);
			}


			//hacemos un switch para ver que tipo de usuario es para asi darle la vista que le corresponde
			switch ($datos->tipoUsuario) {
				case '1':
					//Defino una variable bom y una login que contiene el nombre del usuario
					$this->session->set_userdata("bomb");
                	$this->session->set_userdata('login', $this->input->post('login',true));
                	
                	$bitacora = array
                    (
                        'accion' => 'Acceso al sistema',
                        'usuario' => $this->session_id,
                        'fecha' => date("y/m/d")

                    );

                     $this->Model_Clientes->bitacora($bitacora);
                	//Redireccione a la vista Usuarios/admi
                	redirect(base_url().'admi',  301);
					break;

				case '2':
					//Defino una variable bom y una login que contiene el nombre del usuario
					$this->session->set_userdata("bomb");
                	$this->session->set_userdata('login', $this->input->post('login',true));
                	
                	$bitacora = array
                    (
                        'accion' => 'Acceso al sistema',
                        'usuario' => $this->session_id,
                        'fecha' => date("y/m/d")

                    );

                     $this->Model_Clientes->bitacora($bitacora);

                	//Redireccione a la vista Usuarios/admi
                	redirect(base_url().'inspector',  301);
					break;

				case '3':
					//Defino una variable bom y una login que contiene el nombre del usuario
					$this->session->set_userdata("bomb");
                	$this->session->set_userdata('login', $this->input->post('login',true));
                	
                	$bitacora = array
                    (
                        'accion' => 'Acceso al sistema',
                        'usuario' => $this->session_id,
                        'fecha' => date("y/m/d")

                    );

                     $this->Model_Clientes->bitacora($bitacora);

                	//Redireccione a la vista Usuarios/admi
                	redirect(base_url().'cliente',  301);
					break;
				
				default:
					$this->session->set_flashdata('ControllerMessage', 'Usuario y/o clave inválida.');
					redirect(base_url().'index/login' , 301);
					break;
			}
		
			

		}

			$this->layout->view("login");
		
	}

	public function registro()
	{

		 $data = $this->Model_Clientes->getNumSolicitud();
        //validamos si nos enviaron algo por el formulario mediante el metodo POST
        if($this->input->post())
        {

            //validamos que hallan escrito bien los campos

                //Ahora cargamos los datos en un array para pasarlo a la funcion insertarUsuario
                $clave = sha1($this->input->post("clave", true));
                $data = array
                    (
                        'tipoUsuario' => '3',
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

                        if($resultado)
                        {
                            $this->session->set_flashdata('ControllerMessage', 'Se ha registrado correctamente');
                            redirect(base_url().'index/login', 301);

                        } else {
                            $this->session->set_flashdata('ControllerMessage', 'Se ha producido un error. Intentelo nuevamente por favor.');
                            redirect(base_url().'index/login', 301);
                        }

                        exit;

                
        }   

        $this->layout->view('registro', compact('data'));


	}

	public function logout()
	{
		 $this->session->unset_userdata(array ('login' => ''));
		 $this->session->sess_destroy("bomb");
		 redirect(base_url().'index/login', 301);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */