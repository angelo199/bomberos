<?php
  
$config = array
	(
		'formulario/add' 
			=> array(

				array('field' => 'tipoUsuario',  'label' => 'Tipo-Usuario',
					  'rules' => 'validaSelect|required|trim|xss_clear'),

				array('field' => 'usuario',  'label' => 'Usuario',
					  'rules' => 'required|trim|xss_clear'),

				array('field' => 'nombres',  'label' => 'Nombres',
					  'rules' => 'required|alpha|xss_clear'),

				array('field' => 'apellidos',  'label' => 'Apellidos',
					  'rules' => 'required|alpha|xss_clear'),

				array('field' => 'cedula',  'label' => 'Cedula',
					  'rules' => 'required|numeric|trim|xss_clear'),

				array('field' => 'email',  'label' => 'E-mail',
					  'rules' => 'required|valid_email|trim|xss_clear')

				
					),

			'formulario/asignar' 
			=> array(

				array('field' => 'inspector',  'label' => 'Inspector',
					  'rules' => 'validaSelect|required|trim|xss_clear'),

				array('field' => 'expediente',  'label' => 'Expediente',
					  'rules' => 'validaSelect|required|trim|xss_clear')


					),

			'formulario/soli' 
			=> array(

                array('field' => 'nDeposito',  'label' => 'NºDeposito',
					  'rules' => 'required|numeric|trim|xss_clear'),

                array('field' => 'fechaDeposito',  'label' => 'Fecha Deposito',
					  'rules' => 'required|trim|xss_clear'),

				array('field' => 'inmueble',  'label' => 'Inmueble',
					  'rules' => 'required|alpha|trim|xss_clear'),

				array('field' => 'direccion',  'label' => 'Direccion',
					  'rules' => 'required|trim|xss_clear'),

				array('field' => 'municipio',  'label' => 'Municipio',
					  'rules' => 'validaSelect|required|trim|xss_clear'),

				array('field' => 'parroquia',  'label' => 'Parroquia',
					  'rules' => 'validaSelect|required|trim|xss_clear'),

				array('field' => 'cargo',  'label' => 'Cargo',
					  'rules' => 'required|trim|xss_clear'),

				array('field' => 'objetoRazon',  'label' => 'Ramo Razon',
					  'rules' => 'required|trim|xss_clear')

				
					),
			
	);



?>