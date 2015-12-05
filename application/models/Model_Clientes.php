<?php

class Model_Clientes extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }

    public function registrarSolicitud($datos = array(), $datos2 = array())
    {
        $this->db->insert("solicitud", $datos);
        $this->db->insert("razonsocial", $datos2);

        return true;
    }

    public function bitacora($datos = array())
    {
        $this->db->insert("bitacora", $datos);
        
        return true;
    }

    public function getNumSolicitud()
    {
        $query = $this->db
        ->select("count(nSolicitud) as Solicitud ")
        ->from("solicitud")
        ->get();

        return $query->row();
    }

    public function getNumExpediente()
    {
       

        $query = $this->db
        ->select("count(nExpediente) as Expedientes ")
        ->from("solicitud")
        ->get();

        return $query->row();

    }

    public function getNumOperativo()
    {
       

        $query = $this->db
        ->select("count(nOperativo) as Operativo ")
        ->from("solicitud")
        ->get();

        return $query->row();

    }

     public function datosPerfil($id)
    {
         $where = array("idUsuario" => $id);

        $query = $this->db 
        ->select("nom_user, ape_user, cedula_user , email_user")
        ->from("perfil")
        ->where($where)
        ->get();

        return $query->row();
    }

    public function getSolicitud(){

      

        $query = $this->db
        ->select("*")
        ->from("razonsocial")
        ->get();
        
        return $query->result();
    }


    
    

} 