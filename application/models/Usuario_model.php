<?php
//El modelo se usa para trabajar con la base de datos.

class Usuario_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function list_all(){
        $query=$this->db->query("select Usuario.usuario_id,Usuario.nombre,Usuario.apepat,Ciudad.nombre as nomciudad from Usuario,Ciudad where Usuario.ciudad_id=Ciudad.ciudad_id");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
    public function save($nombre,$apepat,$ciudad_id){
        $this->db->query("insert into Usuario(nombre,apepat,ciudad_id) values('".$nombre."','".$apepat."','".$ciudad_id."')");
        $this->db->close();
    }
    public function eliminar($usuario_id){
        $this->db->query("delete from Usuario where usuario_id='".$usuario_id."'");
        $this->db->close();
    }
    public function ver_detalle($usuario_id){
        $query=$this->db->query("select * from Usuario where usuario_id='".$usuario_id."'");
        $result=$query->result_object();
        $this->db->close();
        return $result;
    }
}

