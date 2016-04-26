<?php

class Login_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function validar($username,$password){
        $query=$this->db->query("select * from usuario where username='".$username."'");
        $result=$query->result_object();
        $this->db->close();
        foreach($result as $usuario){
            if(password_verify($password, $usuario->password)){
                return $result;
            }else{
                return false;
            }
        }
    }
}
