<?php

class Model_Inspector extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }    

    public function getInspectores()
    {
        
        $where = array("tipoUsuario" => '2');
        $query = $this->db
        ->select("idUsuario, CONCAT_WS(' '  , nom_user, ape_user ) as inspector")
        ->from("perfil")
        ->where($where)
        ->get();

        return $query->result();
    }

    public function getExpedientes()
    {
        $query = $this->db 
        ->select("nExpediente")
        ->from("solicitud")
        ->get();

        return $query->result();
    }

    public function getExpedientesAsignados($id)
    {
        $where = array("idUsuario" => $id);

        $query = $this->db 
        ->select("nExpediente")
        ->from("exp_inspec")
        ->where($where)
        ->get();

        return $query->result();
    }


    public function asignarInspector($data = array())
    {
        $this->db->insert("exp_inspec", $data);

        return true;
    }

    public function getSolicitudes($id)
    {
        $where = array("idUsuario" => $id);

        $query = $this->db
        ->select("count(nExpediente) as Solicitudes ")
        ->from("exp_inspec")
        ->where($where)
        ->get();

        return $query->row();

    }

    public function registrarResultado($data = array())
    {
        $this->db->insert('datosinspeccion', $data);

        return true;
    }


    public function llenarInspeccion2($expediente)
    {
        $query = $this->db 
        ->select("s.nSolicitud, s.fechaSolicitud, r.deposito, r.fechaDeposito")
        ->from("solicitud as s")
        ->join("razonsocial as r", "p.nExpediente = r.nExpediente", "inner")
        ->get();

        return $query->result();

    }

    public function llenarInspeccion($nExpediente)
    {

        $where = array('nExpediente' => $nExpediente);
        
        $query = $this->db
        ->select("s.nSolicitud, s.fechaSolicitud, r.deposito, r.fechaDeposito")
        ->from("solicitud as s, razonsocial as r")
        ->where($where)
        ->get();

        return $query->result();
    }

} 