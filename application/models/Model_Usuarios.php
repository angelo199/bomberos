<?php

class Model_Usuarios extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function validarUsuario($login, $pass)
    {
        $query = $this->db 
        ->select("tipoUsuario")
        ->from("usuarios")
        ->where(array('idUsuario' => $login, "clave" => $pass))
        ->get();

        return $query->row();
    }

    public function insertarUsuario($datos = array(), $datos2 = array())
    {
        $this->db->insert("usuarios", $datos);
        $this->db->insert("perfil", $datos2);

        return true;
    }

    public function obtenerBitacora()
    {

        $query = $this->db
        ->select("*")
        ->from("bitacora")
        ->get();

        return $query->result();

    }

    
    

} 